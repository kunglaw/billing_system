<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$data		= $this->db->query("select * from bturiwayat");

		foreach($data->result() as $row)
		{
			$str = $row->Date_Time;

			$text = (explode(" ",$str));

			$waktu = $text[0];

			$this->db->query("update bturiwayat set Date_Time = '$waktu' where id = '$row->id'");
		}
	}

	function convert()
	{
		$data		= $this->db->query("select * from bturiwayat");	

		foreach($data->result() as $row)
		{
			$waktu  = date('Y-m-d', strtotime($row->Date_Time));

			$this->db->query("update bturiwayat2 set Date_Time = '$waktu' where id = '$row->id'");
		}	
	}

	function export()
	{
		$file = './test/test2.xlsx';
		 
		//load the excel library
		$this->load->library('excel');
		 
		//read file from path
		$objPHPExcel = PHPExcel_IOFactory::load($file);
		 
		//get only the Cell Collection
		$cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
		 
		//extract to a PHP readable array format
		foreach ($cell_collection as $cell) {
		    $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
		    $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
		    $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
		    echo "test";

		 
		    //header will/should be in row 1 only. of course this can be modified to suit your need.
		    if ($row == 1) {
		        $header[$row][$column] = $data_value;
		    } else {
		        $arr_data[$row][$column] = $data_value;
		    }
		}
		 
		//send the data in an array format
		$data['header'] = $header;
		$data['values'] = $arr_data;

		print_r($data['values']);
	}
}
