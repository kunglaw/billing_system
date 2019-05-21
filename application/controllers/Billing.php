<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Billing extends CI_Controller {

	public function index()
	{
		$data['ms_kwh']		= $this->db->query("select * from ms_kwh");
		$data['golongan']	= $this->db->query("select * from golongan");
		$this->load->view('billing',$data);
	}
	
	function get_kwh()
	{
		$start	= date("Y-m-d", strtotime($this->input->post("tgl_start")));
		$finish	= date("Y-m-d", strtotime($this->input->post("tgl_finish")));
		$client	= $this->input->post("client_id");
		
		//echo "select max(Value) as maximum, min(Value) as minimum from tb_riwayat where Date_Time between '$start' and '$finish' and No_ID = '$client'";
		
		$query	= $this->db->query("select max(Value) as maximum, min(Value) as minimum from tb_riwayat where Date_Time between '$start' and '$finish' and No_ID = '$client'");
		
		if($query->num_rows() > 0)
		{
			$query	= $query->row();
			$data	= array("maximum" => $query->maximum, "minimum" => $query->minimum);
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode($data));
		}
	}

	function get_kwh_wbp()
	{
		$start	= date("Y-m-d", strtotime($this->input->post("tgl_start")));
		$finish	= date("Y-m-d", strtotime($this->input->post("tgl_finish")));
		$client	= $this->input->post("client_id");
		
		//echo "select max(Value) as maximum, min(Value) as minimum from tb_riwayat where Date_Time between '$start' and '$finish' and No_ID = '$client'";
		
		$query	= $this->db->query("select max(Value) as maximum, min(Value) as minimum from tb_riwayat2 where Date_Time between '$start' and '$finish' and No_ID = '$client'");
		
		if($query->num_rows() > 0)
		{
			$query	= $query->row();
			$data	= array("maximum" => $query->maximum, "minimum" => $query->minimum);
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode($data));
		}
	}

	public function filter()
	{
		$data['start']		= date('Y-m-d' ,strtotime($this->input->post('start')));
		$data['finish']		= date('Y-m-d' ,strtotime($this->input->post('finish')));

		$data['filter']		= "yes";

		
		$this->load->view('billing', $data);
	}

	function cetak()
	{
		$nama_laporan	= $this->input->post("nama_laporan");
		$golongan		= json_decode($this->input->post("golongan"), true);
		$alamat			= $this->input->post("alamat_tujuan");
		$ms_kwh			= json_decode($this->input->post("ms_kwh"), true);
		//print_r($ms_kwh);
		//exit();
		$tarif_lwb		= $this->input->post("tarif_lwb");
		$tarif_pln		= $this->input->post("tarif_pln");
		
		$tgl_start		= date("d/m/Y", strtotime($this->input->post('start')));
		$tgl_finish		= date("d/m/Y", strtotime($this->input->post('finish')));
		$max_kwh		= $this->input->post("max_kwh");
		$min_kwh		= $this->input->post("min_kwh");
		$total_kwh		= $max_kwh - $min_kwh;
		$jumlah_biaya	= $this->input->post("jumlah_biaya");

		$alamat_tujuan	= $this->input->post("alamat_tujuan");
		$kordinator		= $this->input->post("kordinator");
		$manager		= $this->input->post("manager");
		
		$query_pph		= $this->db->query("select * from pph limit 1");
		if($query_pph->num_rows() > 0)
		{
			$pph	= $query_pph->row()->PPH;
		}	
		else
		{
			$pph	= 0;
		}	
		
		// Buat disini itungannya, gue nggak tau rumusnya. variable nya kan udah ada diatas. yang lebih gede itu yang jadi biaya ditagihkan
		$harga_minimum		= $ms_kwh['daya'] * $tarif_pln * $tarif_lwb;
		$harga_pemakaian    = $total_kwh * $tarif_lwb; 
		//
		
		if($harga_pemakaian > $harga_minimum)
		{
			$biaya_ditagihkan		= $harga_pemakaian;
		}	
		else
		{
			$biaya_ditagihkan		= $harga_minimum;
		}

		$subtotal = ($biaya_ditagihkan - $pph);
		$ppn = $subtotal * 0.1;
		$grandTotal = ($subtotal + $ppn);
		
		$this->load->library('Pdf');

		$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
		// set document information
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('Jaga Citra Inti'); // ini ganti, ji satu lagi pleasee itu gimana cara ngeluarin biaya ditagihkan ? Harga minimum dibanding pemakaian kwh
		$pdf->SetTitle('Menara Palma 2'); // ini ganti,ji yang golongan masih salah keluarnya harusnya Tarif - 1 bukan angkanya, EGOIS		itung sendiri lah ya
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
		//$pdf->Image('assets/img/team/logoXl.png',27,10,-2500);
		// set font
		$pdf->SetFont('helvetica','',11);
		


		$html = '
		<font face="times">
		';

		$html .= '
		<br/> <br/>
		<table>
				<tr>
					<th rowspan="4" width="20%"></th>
					<th width="53%">MidTown  </th>
					<th rowspan="4" width="27%" align="center" border="1">INFORMASI TAGIHAN REKENING LISTRIK</th>
				</tr>
				<tr>
					<th width="53%">Jalan H.R. Rasuna Said No.Kav 6, Kuningan Timur, Kec.Setia Budi, Jakarta Selatan, 12950.</th>
				</tr>
				<tr>
					<th width="53%">Telp.</th>
				</tr>
			

			</table>
			<br/> <br/>
			<hr />
		
		<h3 align="center"> '.$nama_laporan.'</h3>

		'; 


		$html .= '<br><br>


			<table border="0">
				<tr>
					<th rowspan="6" width="45%">'.$alamat_tujuan.'</th>
					<th width="25%">Nama Pelanggan  </th>
					<td width="5%" align="center">:</td>
					<td>'.$ms_kwh['nama_client'].'</td>
				</tr>
				<tr>
					<th width="25%">Lokasi  </th>
					<td width="5%" align="center">:</td>
					<td>'.$ms_kwh['lokasi'].'</td>
				</tr>
				<tr>
					<th width="25%">Tarif LWBP/Kwh  </th>
					<td width="5%" align="center">:</td>
					<td>'.$tarif_lwb.'</td>
				</tr>
				<tr>
					<th width="25%">Faktur Meter  </th>
					<td width="5%" align="center">:</td>
					<td>1</td>
				</tr>
				<tr>
					<th width="25%">Golongan Tarif  </th>
					<td width="5%" align="center">:</td>
					<td>'.$golongan['golongan'].'</td>
				</tr>
				<tr>
					<th width="25%">Daya  </th>
					<td width="5%" align="center">:</td>
					<td>'.$ms_kwh['daya'].'</td>
				</tr>


			</table>
			<br/> <br/>
			
			<table border="1">
				<tr>
					<th align="center"><strong>Catatan Meter</strong></th>
					<th align="center"><strong>Tanggal</strong></th>
					<th align="center"><strong>Pembacaan</strong></th>
				</tr>
				<tr>
					<td align="center">Stand Meter Awal</td>
					<td align="center">'.$tgl_start.'</td>
					<td align="center">'.$min_kwh.'</td>
				</tr>
				<tr>
					<td align="center">Stand Meter Akhir</td>
					<td align="center">'.$tgl_finish.'</td>
					<td align="center">'.$max_kwh.'</td>
				</tr>
				<tr>
					<td colspan="2" align="center"><strong>Pemakaian KWH</strong></td>
					<td align="center"><strong>'.$total_kwh.'</strong></td>
				</tr>
			</table>
			<br/> <br/>
			<table>
				<tr>
					<td colspan="7"><i>1. Rekening Minimum : (Daya x PLN x Tarif LWB)</i></td>
				</tr>
				<tr>
					<td align="center">'.$ms_kwh['daya'].'</td>
					<td width="5%">X</td>
					<td align="center">'.$tarif_pln.'</td>
					<td width="5%">X</td>
					<td align="center">'.$tarif_lwb.'</td>
					<td width="5%">=</td>
					<td width="5%">Rp.</td>
					<td width="14.3%" align="right">'.number_format($harga_minimum,0,",",".").',00</td>
				</tr>
			</table>
			<br/> <br/>
			<table>
				<tr>
					<td colspan="7"><i>2. Biaya Pemakaian : (Faktur Meter x Jumlah Pemakaian Kwh x Tarif LWB)</i></td>
				</tr>
				<tr>
					<td align="center">1</td>
					<td width="5%">X</td>
					<td align="center">'.$total_kwh.'</td>
					<td width="5%">X</td>
					<td align="center">'.$tarif_lwb.'</td>
					<td width="5%">=</td>
					<td width="5%">Rp.</td>
					<td width="14.3%" align="right">'.number_format($harga_pemakaian,0,",",".").',00 </td>
				</tr>
			</table>
			<br/> <br/>
			<table>
				<tr>
					<td colspan="7"><i>3. Jumlah Biaya yang harus dibayarkan :</i></td>
				</tr>
				<br/>
				<tr>
					<td width="52.9%">a. Biaya Ditagihkan</td>
					<td width="5%">=</td>
					<td width="5%">Rp.</td>
					<td align="right">'.number_format($biaya_ditagihkan,0,",",".").',00</td>
				</tr>
				<br/>
				<tr>
					<td width="52.9%">b. PPH Pasal 4, Ayat 2</td>
					<td width="5%">=</td>
					<td width="5%">Rp.</td>
					<td align="right">'.number_format($pph,0,",",".").',00</td>
				</tr>
				<br/>
				<tr>
					<td width="26.9%"></td>
					<td width="26%">Sub Total</td>
					<td width="5%">=</td>
					<td width="5%">Rp.</td>
					<td align="right">'.number_format($subtotal,0,",",".").',00</td>
				</tr>
				<br/>
				<tr>
					<td width="26.9%"></td>
					<td width="26%">PPN 10%</td>
					<td width="5%">=</td>
					<td width="5%">Rp.</td>
					<td align="right">'.number_format($ppn,0,",",".").',00</td>
				</tr>
			</table>
			<hr/>
			<table>
				<br/> <br/>
				<tr>
					<td width="26.9%"></td>
					<td width="26%"><strong>Grand Total</strong></td>
					<td width="5%"><strong>=</strong></td>
					<td width="5%"><strong>Rp.</strong></td>
					<td width="14.3%" align="right"><strong>'.number_format($grandTotal,0,",",".").',00</strong></td>
				</tr>
			</table>
			<br/> <br/> <br/> <br/> 

			<table border="0">
				<tr>
					<td align="center">Dibuat Oleh,</td>
					<td align="center">Disetujui Oleh,</td>
				</tr>
				<tr>
					<td align="center">Engineer Coordinator</td>
					<td align="center">Manager</td>
				</tr>
			</table>
			<br/> <br/> <br/>  <br/> <br/> 
			<table border="0">
				<tr>
					<td align="center">'.$kordinator.'</td>
					<td align="center">'.$manager.'</td>
				</tr>
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
