<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KWH extends CI_Controller {

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
		$this->load->view('KWH');
	}

	public function filter()
	{
		$data['start']		= date('Y-m-d' ,strtotime($this->input->post('start')));
		$data['finish']		= date('Y-m-d' ,strtotime($this->input->post('finish')));

		$data['filter']		= "yes";

		
		$this->load->view('KWH', $data);
	}

		function cetak($start="",$finish="")
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
		<h2 align="center"> REPORT KWH WISMA MULIA 2 </h2>
		<h4 align="center"> PERIODE : '. date('d F Y' ,strtotime($start)).' - '. date('d F Y' ,strtotime($finish)).'</h4>

		'; 


		$html .= '<br><br><br>
			<table>
		'; 
		
		$jumlah_konsumsiTenant = 0;
		$list_pln_konsumsi				= '';
		$list_pln_chiller				= '';
		$list_tenant					= '';

		if(isset($filter))
		{	
			$pln_konsumsi 				= $this->db->query("select *,(select sum(Value) from tr_pln where ID_PLN = pln_type.ID_PLN and Date_Time between '$start' and '$finish') as total_value from pln_type where status= 'KONSUMSI TENANT'");

			$pln_chiller 				= $this->db->query("select *,(select sum(Value) from tr_pln where ID_PLN = pln_type.ID_PLN and Date_Time between '$start' and '$finish') as total_value from pln_type where status= 'CHILLER PLANT'");	

			$kwh_pln_tenant		= $this->db->query("select sum(Value) as total_kwh from tr_pln, pln_type where pln_type.ID_PLN = tr_pln.ID_PLN and pln_type.Status = 'KONSUMSI TENANT' and Date_Time between '$start' and '$finish'")->row();
			$kwh_pln_chiller	= $this->db->query("select sum(Value) as total_kwh from tr_pln, pln_type where pln_type.ID_PLN = tr_pln.ID_PLN and pln_type.Status = 'CHILLER PLANT' and Date_Time between '$start' and '$finish'")->row();	
			$tdb_lantai 		= $this->db->query("select sum(Value) as tdb_lantai from tdb where Date_Time between '$start' and '$finish'")->row();
			$hdb_lantai 		= $this->db->query("select sum(Value) as hdb_lantai from hdb where Date_Time between '$start' and '$finish'")->row();
			$query_ch42				= $this->db->query("select sum(Value) as ch42 from ch42 where Date_Time between '$start' and '$finish'")->row();
			$query_list_tenant	= $this->db->query("select *,(select Value from hdb where ID_Lantai = lantai.ID_Lantai and Date_Time between '$start' and '$finish') as hdb, (select sum(Value) from tdb where ID_Lantai = lantai.ID_Lantai and Date_Time between '$start' and '$finish') as tdb from lantai");
			

			$tenant_floor		= $tdb_lantai->tdb_lantai + $hdb_lantai->hdb_lantai;
			$konsumsi_tenant	= $tdb_lantai->tdb_lantai + $hdb_lantai->hdb_lantai + $kwh_pln_tenant->total_kwh;
			$other 				= $kwh_pln_tenant->total_kwh - ($tdb_lantai->tdb_lantai + $hdb_lantai->hdb_lantai);
			$incoming_pln		= $konsumsi_tenant + $kwh_pln_chiller->total_kwh;
			$ch42 				= $query_ch42->ch42;

			$nama_pln_chiller 		= "";
			$total_value_chiller 	= 0;
			foreach($pln_chiller->result() as $row)
			{	
				$nama_pln_chiller 		.= " ".$row->Nama_PLN;
				$total_value_chiller	= $total_value_chiller + $row->total_value;
			}

			$list_pln_chiller		.= '<h3 class="heading-xs"> '.$nama_pln_chiller.'<span class="pull-right">'.$total_value_chiller.'</span></h3><br>';
			$ch7				= $total_value_chiller - $ch42;

			$lantai 			= $this->db->query("select *,(select sum(Value) from tdb where ID_Lantai = lantai.ID_Lantai) as total_tdb, (select sum(Value) from hdb where ID_Lantai = lantai.ID_Lantai) as total_hdb from lantai");	

		} 
		else
		{
			$pln_konsumsi				= $this->db->query("select *,(select sum(Value) from tr_pln where ID_PLN = pln_type.ID_PLN) as total_value from pln_type where status= 'KONSUMSI TENANT'");	
			$pln_chiller 				= $this->db->query("select *,(select sum(Value) from tr_pln where ID_PLN = pln_type.ID_PLN) as total_value from pln_type where status= 'CHILLER PLANT'");	

			$kwh_pln_tenant		= $this->db->query("select sum(Value) as total_kwh from tr_pln, pln_type where pln_type.ID_PLN = tr_pln.ID_PLN and pln_type.Status = 'KONSUMSI TENANT'")->row();
			$kwh_pln_chiller	= $this->db->query("select sum(Value) as total_kwh from tr_pln, pln_type where pln_type.ID_PLN = tr_pln.ID_PLN and pln_type.Status = 'CHILLER PLANT'")->row();	
			$tdb_lantai 		= $this->db->query("select sum(Value) as tdb_lantai from tdb")->row();
			$hdb_lantai 		= $this->db->query("select sum(Value) as hdb_lantai from hdb")->row();
			$query_ch42			= $this->db->query("select sum(Value) as ch42 from ch42")->row();
			$query_list_tenant	= $this->db->query("select *,(select Value from hdb where ID_Lantai = lantai.ID_Lantai) as hdb, (select sum(Value) from tdb where ID_Lantai = lantai.ID_Lantai) as tdb from lantai");

			$tenant_floor		= $tdb_lantai->tdb_lantai + $hdb_lantai->hdb_lantai;
			$konsumsi_tenant	= $tdb_lantai->tdb_lantai + $hdb_lantai->hdb_lantai + $kwh_pln_tenant->total_kwh;
			$other 				= $kwh_pln_tenant->total_kwh - ($tdb_lantai->tdb_lantai + $hdb_lantai->hdb_lantai);
			$incoming_pln		= $konsumsi_tenant + $kwh_pln_chiller->total_kwh;
			$ch42 				= $query_ch42->ch42;

			$nama_pln_chiller 		= "";
			$total_value_chiller 	= 0;
			foreach($pln_chiller->result() as $row)
			{	
				$nama_pln_chiller 		.= " ".$row->Nama_PLN;
				$total_value_chiller	= $total_value_chiller + $row->total_value;
			}			
			
			$lantai 			= $this->db->query("select *,(select sum(Value) from tdb where ID_Lantai = lantai.ID_Lantai) as total_tdb, (select sum(Value) from hdb where ID_Lantai = lantai.ID_Lantai) as total_hdb from lantai");	

			
		}
		
		$html				.= "<tr>
										<td>Incoming PLN</td>
										<td>".$incoming_pln."</td>
									</tr>
									<tr>
										<td>LVMSB</td>
										<td>".$konsumsi_tenant."</td>
									</tr>";
		
			foreach($pln_konsumsi->result() as $row)
			{	
		
				$html		.= '<tr>
									<td>'.$row->Nama_PLN.'</td>
									<td>'.$row->total_value.'</td>
								</tr>';
		
			}
			
			$html			.= "<tr>
										<td>CONSUMPTION TENANT FLOOR</td>
										<td>".$tenant_floor."</td>
									</tr>";
									
			$html			.= "<tr>
										<td>OTHER</td>
										<td>".$other."</td>
									</tr>";

			$html			.= "<tr>
									<td>CHILLER PLANT TOTAL</td>
									<td>".$kwh_pln_chiller->total_kwh."</td>
								</tr>";
								
		
			$html				.= "<tr>
									<td>".$nama_pln_chiller."</td>
									<td>".$total_value_chiller."</td>
								</tr>";
			
			$ch7				= $total_value_chiller - $ch42;

			$html				.= "<tr>
									<td>CHILLER PLANT LEVEL 42</td>
									<td>".$ch42."</td>
								</tr>";
								
			$html				.= "<tr>
									<td>CHILLER PLANT LEVEL 7</td>
									<td>".$ch7."</td>
								</tr>";											
		
		$html .= '
			</table>
		';	

		$pdf->writeHTML($html, true, false, true, false, '');

		$pdf->AddPage('P','A4');	
	
		$html = '
		<font face="times">
		';

		$html .= '
		<h2 align="center"> REPORT KWH WISMA MULIA 2 </h2>
		<h4 align="center"> PERIODE : '. date('d F Y' ,strtotime($start)).' - '. date('d F Y' ,strtotime($finish)).'</h4>

		'; 


		$html .= '<br><br><br>
			<table>
		'; 
		
		foreach($query_list_tenant->result() as $row)
		{
			$html				.= "<tr>
										<td>".$row->Nama_Lantai."</td>
										<td>".($row->hdb + $row->tdb)."</td>
									</tr>";
			
			$html				.= "<tr>
										<td>HDB</td>
										<td>".$row->hdb."</td>
									</tr>";	
			
			$query_list_hdb			= $this->db->query("select * from tdb where ID_Lantai = '$row->ID_Lantai'");
			$no_tdb					= 1;
			
			foreach($query_list_hdb->result() as $row_hdb)
			{
				$list_tenant			.= '<h3 class="heading-xs">TDB '.$no_tdb++.'<span class="pull-right">'.$row->tdb.'</span></h3><br>
				';
				
				$html				.= "<tr>
											<td>TDB ".$no_tdb++."</td>
											<td>".$row->tdb."</td>
										</tr>";	
			}
			
			$list_tenant			.= "<hr>";
		}
		
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
