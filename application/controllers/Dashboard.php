<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$this->load->view('dashboard');
	}

	public function filter()
	{
		$data['start']		= date('Y-m-d' ,strtotime($this->input->post('start')));
		$data['finish']		= date('Y-m-d' ,strtotime($this->input->post('finish')));

		$data['filter']		= "yes";

		
		$this->load->view('dashboard', $data);
	}

	function cetak($start,$finish)
	{
		$this->load->library('Pdf');

		$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
		// set document information
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('BabaStudio');
		$pdf->SetTitle('NBLS');
		$pdf->SetSubject('Laporan');
		$pdf->SetKeywords('TCPDF, PDF');

		// remove default header/footer
		$pdf->setPrintHeader(false);
		$pdf->setPrintFooter(false);

		// set default monospaced font
		$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

		// set margins
		$pdf->SetMargins(30, 0, 20);

		// set auto page breaks
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
		
		// set image scale factor
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

		// set some language-dependent strings (optional)
		if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
			require_once(dirname(__FILE__).'/lang/eng.php');
			$pdf->setLanguageArray($l);
		}

		// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

		// add a page
		$pdf->AddPage('P','A4');


		$html = '
		<font face="times">
		';

		$html .= '
		<h2 align="center"> REPORT BTU CHILLER PRODUCTION </h2>
		<h4 align="center"> PERIODE : '. date('d F Y' ,strtotime($start)).' - '. date('d F Y' ,strtotime($finish)).'</h4>

		'; 


		$html .= '<br><br><br>
			<table border="1">
				<tr>
				<td align="center"><strong>Nama BTU</strong></td>
				<td align="center"><strong>Nilai</strong></td>
				</tr>
		'; 

		$chiller = $this->db->query("select * from db_btu where Type = 'Production'");

		$jumlah_pro = 0;
		foreach($chiller->result() as $row)
		{
			$max		= $this->db->query("select max(value) as max from bturiwayat where Date_Time between '$start' and '$finish' and ID_BTU = '$row->ID_BTU'")->row();
			$min		= $this->db->query("select min(value) as min from bturiwayat where Date_Time between '$start' and '$finish' and ID_BTU = '$row->ID_BTU'")->row();

			$as = $max->max - $min->min;

			$jumlah_pro		= $jumlah_pro + ($max->max - $min->min);

			$html .= '

			<tr>
				<td>'.$row->Nama_BTU.'</td>
				<td align="center">'.$as.'</td>


			</tr>
			';	

		}

		$html .= '

			<tr>
				<td><strong>TOTAL BTU PRODUCTION</strong></td>
				<td align="center">'.$jumlah_pro.'</td>


			</tr>
			';

		$html .= '
			</table>
		';	

		$pdf->writeHTML($html, true, false, true, false, '');

		$pdf->AddPage('P','A4');	

		$html = "";
		$html .= ' <br><br><br>
		<h2 align="center"> REPORT BTU CHILLER CONSUMPTION </h2>
		<h4 align="center"> PERIODE : '. date('d F Y' ,strtotime($start)).' - '. date('d F Y' ,strtotime($finish)).'</h4>
		
		'; 

		$html .= '<br><br><br>
			<table border="1">
				<tr>
				<td align="center"><strong>Nama BTU</strong></td>
				<td align="center"><strong>Nilai</strong></td>
				</tr>
		'; 

		$chiller = $this->db->query("select * from db_btu where Type = 'Consumption'");
		$jumlah_con		= 0;

		foreach($chiller->result() as $row)
		{
			$max		= $this->db->query("select max(value) as max from bturiwayat where Date_Time between '$start' and '$finish' and ID_BTU = '$row->ID_BTU'")->row();
			$min		= $this->db->query("select min(value) as min from bturiwayat where Date_Time between '$start' and '$finish' and ID_BTU = '$row->ID_BTU'")->row();

			$as = $max->max - $min->min;

			$jumlah_con	= $jumlah_con + ($max->max - $min->min);

			$html .= '
			<tr>
				<td>'.$row->Nama_BTU.'</td>
				<td align="center">'.$as.'</td>
			</tr>
			';	

		}

		$other = $jumlah_con + ($jumlah_pro - $jumlah_con);

		$html .= '
			<tr>
				<td>TOTAL OTHER BTU CONSUMPTION</td>
				<td align="center">'.$other.'</td>
			</tr>
			';	

			$html .= '
			<tr>
				<td ><strong>TOTAL BTU CONSUMPTION</strong></td>
				<td align="center">'.$jumlah_con.'</td>
			</tr>
			';	

		$html .= '
			</table>
		';	

		$pdf->writeHTML($html, true, false, true, false, '');

		//$pdf->SetAutoPageBreak(false, 0);
		
		//$pdf->Image($img_file, 0, 0, 300, 220);
		
		// output the HTML content
		

		// -----------------------------------------------------------------------------

		//Close and output PDF document
		$pdf->Output('laporan.pdf', 'I');
	}
}
