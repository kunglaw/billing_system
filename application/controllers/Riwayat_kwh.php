<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat_kwh extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['riwayat']		= $this->db->query("select * from tb_riwayat,ms_kwh where tb_riwayat.No_ID = ms_kwh.No_ID order by tb_riwayat.Date_Time desc");
		$this->load->view('data_riwayat', $data);
	}

	function export()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = '*';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('file'))
		{
			echo $this->upload->display_errors('<p>', '</p>');
			exit();
		}
		else
		{
			$data = $this->upload->data();

		}

		$file = './uploads/'.$data['file_name'];
		 
		//load the excel library
		$this->load->library('excel');
		 
		//read file from path
		$objPHPExcel = PHPExcel_IOFactory::load($file);
		 
		//get only the Cell Collection
		$cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
		 
		$sama			= 0;
		$jumlah_kolom	= 67;
		$NoId 			= 0;
		$data			= array();
		//extract to a PHP readable array format
		foreach ($cell_collection as $cell) {

		    $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
		    $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
		    $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getFormattedValue();

			// print_r($row);
			// print_r($column);
			// print_r($data_value);
			// print("<hr>");
			if($row != 1) {
				if($data_value !== "") {
				 
					if($column != "A") {
						
						$value = $data_value;
						$NoId += 1;
						$posisi_tanggal = date('Y-m-d H:i:s', strtotime($posisi_tanggal));
						$jam = date('G', strtotime($posisi_tanggal));
						$type = "lwbp";
						if( 17 < $jam && $jam < 22 ) { 
							$type = "wbp";
						}

						$str = "
							SELECT * FROM tb_riwayat 
							WHERE 
							Date_Time = '".$posisi_tanggal."'
							AND 
							`Value` = '".$value."'
						";

						$query = $this->db->query($str);

						$fetch = $query->row_array();

						if(count($fetch) == 0){
							$data_row = array(
								'No_ID' 	=> $NoId,
								'Date_Time' => $posisi_tanggal,
								'Value' 	=> $value,
								"type"		=> $type // 18.00 - 22.00 wbp // lwbp 
							);

							$data[] = $data_row;

						}
						// else {
						// 	echo $str;
						// 	echo "<hr>";
						// }

					} else {
						$posisi_tanggal =  $data_value;
						$NoId = 0;
					}
				}
			}
			//continue;
		    //header will/should be in row 1 only. of course this can be modified to suit your need
		//    if ($row == 1) {

		//         $header[$row][$column] = $data_value;
		        
		//     } elseif($column == 'A') {
		//         $i = 1;
		//         $isidatanya = $data[$row][$column] = date('Y-m-d', strtotime($data_value));

		//         $cek_tanggal	= $this->db->query("select * from tb_riwayat where date(Date_Time) = date('$isidatanya')");
		//         if($cek_tanggal->num_rows() > 0)
		//         {
		//         	$sama = 1;
		//         }
		//         else
		//         {
		//         	$sama = 0;
		//         	$posisitanggal = $isidatanya;
		//         }
		//     }
		//   //   elseif($column == 'B' and $sama == 0){
		//   //   	$data = array(
		// 		//    'ID_BTU' 	=> '1' ,
		// 		//    'Date_Time' 	=> $posisitanggal,
		// 		//    'value' 		=> $data_value
		// 		// );

		// 		// $this->db->insert('bturiwayat', $data); 
		//   //   }	
		//     elseif($data_value == "")
		//     {
		    	
		//     	break;
		//     }
		//     elseif($sama == 0)
		//     {
		    	
	    // 		$data = array(
		// 		    'No_ID' 		=> $i ,
		// 		    'Date_Time' 	=> $posisitanggal,
		// 		    'Value' 		=> $data_value
		// 		);

		// 		$this->db->insert('tb_riwayat', $data);
		    
		//     	$i++;	
		//     }			    
		}
		
		$this->db->insert_batch('tb_riwayat', $data);

		$this->session->set_flashdata('msg', 'success'); 

		redirect(base_url().'riwayat_kwh');

		//send the data in an array format
	}

}