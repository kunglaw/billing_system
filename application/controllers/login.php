<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

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
		$data['user']		= $this->db->query("select * from user");
		$this->load->view('index', $data);
	}

	function login_process()
	{
		$user 		= $this->input->post('username');
		$pass		= $this->input->post('password');
		
		$cek		= $this->model_utama->cek_data2($user,$pass,'username','password','user');
		
		if($cek->num_rows() > 0)
		{
			$sess	= array(
				'ID_User'		=> $cek->row()->ID_User,
				'login_user'	=> true
			);
			
			$this->session->set_userdata($sess);
			
			redirect(base_url()."billing", 'refresh');
		}	
		else
		{
			$this->session->set_flashdata('username atau password salah');
		
			redirect(base_url()."login", 'refresh');
		}	
	}
}