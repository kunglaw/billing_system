<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editbtu extends CI_Controller {

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
		$data['riwayat']		= $this->db->query("select * from bturiwayat,db_btu where bturiwayat.ID_BTU = db_btu.ID_BTU order by bturiwayat.date_time desc");
		$this->load->view('editdatabtu', $data);
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

		        $cek_tanggal	= $this->db->query("select * from bturiwayat where date(Date_Time) = date('$isidatanya')");
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
				   'ID_BTU' 	=> '1' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('bturiwayat', $data); 
		    }	
		    elseif($column == 'C' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '2' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('bturiwayat', $data); 
		    }
		    elseif($column == 'D' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '3' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('bturiwayat', $data); 
		    }
		    elseif($column == 'E' and $sama == 0){
		    	$data = array(
				   'ID_BTU' 	=> '4' ,
				   'Date_Time' 	=> $posisitanggal,
				   'value' 		=> $data_value
				);

				$this->db->insert('bturiwayat', $data); 
		    }
		    else
		    {

		    }
		}
		
		$this->session->set_flashdata('msg', 'success'); 

		redirect(base_url().'editbtu');

		//send the data in an array format
	}

}