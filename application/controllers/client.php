<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class client extends CI_Controller {

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
		$data['riwayat']		= $this->db->query("select * from ms_kwh");
		$this->load->view('data_client', $data);
	}

		function add_process()
	{
		$data = array(
				'namaclient'		=> $this->input->post('Nama_Client'),
				'lokasi'			=> $this->input->post('Lokasi'),
				'daya'				=> $this->input->post('Daya'),
				
		);
		
		$this->model_utama->insert_data('ms_kwh',$data);
		
		$this->session->set_flashdata('success','Data Berhasil Dismpan');
		
		redirect(base_url().'client', 'refresh');
	}
	
	function ambil_data($id)
	{
		$riwayat		= $this->model_utama->cek_data($id,'No_ID','ms_kwh')->row();
		
		$data		= array(
						'No_ID'				=> $riwayat->No_ID,
						'Nama_Client'		=> $riwayat->Nama_Client,
						'Lokasi'			=> $riwayat->Lokasi,
						'Daya'				=> $riwayat->Daya,
		);
		
		echo json_encode($data);
	}
	
	function update_process()
	{
		$id			= $this->input->post('No_ID');
		echo $id; 
		exit();
	
		$data = array(
				'Nama_Client'		=> $this->input->post('Nama_Client'),
				'Lokasi'			=> $this->input->post('Lokasi'),
				'Daya'				=> $this->input->post('Daya'),
				
		);
		
		$this->model_utama->update_data($id,'No_ID','ms_kwh',$data);
		
		$this->session->set_flashdata('success','Data Berhasil Diubah');
		
		redirect(base_url().'client', 'refresh');
	}
	
	function delete($id)
	{
		$this->db->query("delete from ms_kwh where No_ID = '$id'");
		$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
		
		redirect(base_url().'client', 'refresh');
	}

}