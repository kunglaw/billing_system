<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Rptpdf extends CI_Controller{
    //put your code here
     public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('font/fpdf');
        $logged_in = $this->session->userdata('logged_in');
        if(!$logged_in){
            header("location: ".base_url());
        }
    } 
    
    public function index() {
        $this->load->model('rptpdf/Data');
        $res['data'] = $this->Data->select_data();
        $this->load->view('rptpdf/index',$res);
    }
    
}