<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class btukonsumsi extends CI_Controller {

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
		$data['riwayat']		= $this->db->query("select * from riwayatkonsumsi,db_btu where riwayatkonsumsi.ID_BTU = db_btu.ID_BTU and db_btu.Type = 'CONSUMPTION' order by riwayatkonsumsi.date_time desc");
		$this->load->view('databtukonsumsi', $data);
	}

	function konsumsi()
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
		 
		$sama		= 0;

		//extract to a PHP readable array format
		foreach ($cell_collection as $cell) {
		    $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
		    $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
		    $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getFormattedValue();

		    //header will/should be in row 1 only. of course this can be modified to suit your need
		   if ($row == 1) {
		        $header[$row][$column] = $data_value;
		        
		    } elseif($column == 'A') {
		        $isidatanya = $data[$row][$column] = date('Y-m-d', strtotime($data_value));

		        $cek_tanggal	= $this->db->query("select * from riwayatkonsumsi where date(Date_Time) = date('$isidatanya')");
		        if($cek_tanggal->num_rows() > 0)
		        {
		        	$sama = 1;
		        }
		        else
		        {
		        	$sama = 0;
		        	$posisitanggal = $isidatanya;
		        }
		    }
		    elseif($column == 'B' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '10' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('riwayatkonsumsi', $data); 
		    }	
		    elseif($column == 'C' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '11' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('riwayatkonsumsi', $data); 
		    }
		    elseif($column == 'D' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '12' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('riwayatkonsumsi', $data); 
		    }
		    elseif($column == 'E' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '15' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('riwayatkonsumsi', $data); 
		    }
		     elseif($column == 'F' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '16' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('riwayatkonsumsi', $data); 
		    }
		     elseif($column == 'G' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '17' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('riwayatkonsumsi', $data); 
		    }
		     elseif($column == 'H' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '18' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('riwayatkonsumsi', $data); 
		    }
		     elseif($column == 'I' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '19' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('riwayatkonsumsi', $data); 
		    }
		     elseif($column == 'J' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '20' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('riwayatkonsumsi', $data); 
		    }
		     elseif($column == 'K' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '21' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('riwayatkonsumsi', $data); 
		    }
		     elseif($column == 'L' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '22' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('riwayatkonsumsi', $data); 
		    }
		     elseif($column == 'M' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '23' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('riwayatkonsumsi', $data); 
		    }
		     elseif($column == 'N' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '25' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('riwayatkonsumsi', $data); 
		    }
		     elseif($column == 'O' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '26' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('riwayatkonsumsi', $data); 
		    }
		     elseif($column == 'P' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '27' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('riwayatkonsumsi', $data); 
		    }
		     elseif($column == 'Q' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '28' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('riwayatkonsumsi', $data); 
		    }
		     elseif($column == 'R' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '29' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('riwayatkonsumsi', $data); 
		    }
		     elseif($column == 'S' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '30' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('riwayatkonsumsi', $data); 
		    }
		     elseif($column == 'T' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '31' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('riwayatkonsumsi', $data); 
		    }
		     elseif($column == 'U' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '32' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('riwayatkonsumsi', $data); 
		    }
		     elseif($column == 'V' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '33' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('riwayatkonsumsi', $data); 
		    }
		     elseif($column == 'W' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '35' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('riwayatkonsumsi', $data); 
		    }
		     elseif($column == 'X' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '36' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('riwayatkonsumsi', $data); 
		    }
		     elseif($column == 'Y' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '37' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('riwayatkonsumsi', $data); 
		    }
		     elseif($column == 'Z' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '38' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('riwayatkonsumsi', $data); 
		    }
		     elseif($column == 'AA' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '39' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('riwayatkonsumsi', $data); 
		    }
		     elseif($column == 'AB' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '41' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('riwayatkonsumsi', $data); 
		    }
		     elseif($column == 'AC' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '42' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('riwayatkonsumsi
					', $data); 
		    }
		    else
		    {

		    }
		}
		
		$this->session->set_flashdata('msg', 'success'); 

		redirect(base_url().'btukonsumsi');

		//send the data in an array format
	}

}