<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.4/page_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Jun 2016 13:38:12 GMT -->
<head>
	<title>MidTown | Billing System</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/img/team/favicon.ico">

	<!-- Web Fonts -->
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/headers/header-default.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/footers/footer-v1.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/animate.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">

	<!-- CSS Page Style -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/pages/profile.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/theme-colors/default.css" id="style_color">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/custom.css">
</head>

<body>
	<div class="wrapper">
		

		<!--=== Profile ===-->
		<div class="container content profile">
			<div class="row">
				<!--Left Sidebar-->
				<div class="col-md-3 md-margin-bottom-40">
					<img class="img-responsive profile-img margin-bottom-20" src="<?php echo base_url()?>" alt="">

					<?php $this->load->view('sidebar')?>

					<div class="margin-bottom-50"></div>

					<!--Datepicker-->
					<form action="#" id="sky-form2" class="sky-form">
						<div id="inline-start"></div>
					</form>
					<!--End Datepicker-->
				</div>
				<!--End Left Sidebar-->

				<!-- Profile Content -->
				<div class="col-md-9">
					<div class="profile-body">

					

						
					<div class="headline-center margin-bottom-60">
					<h2><strong>MidTown - Billing System</strong></h2>
					<?php if($this->uri->segment(2) == 'filter'){ ?>
					<strong>Periode <?php echo date('d F Y' ,strtotime($this->input->post('start')));?> - <?php echo date('d F Y' ,strtotime($this->input->post('finish'))); ?></strong>
					<?php } ?>
					  </p>
						

						<form action="<?php echo base_url()?>billing/cetak" target="_blank" method="post" id="sky-form" class="sky-form">
						<header><p><b>Form Pemakaian KWH</b></p></header>

						<fieldset>

						    <div class="row">
						    <section>
								<label for="file" class="input">
									<input type="text" id="nama_laporan" name="nama_laporan" placeholder="Tuliskan Nama Laporan ">
								</label>
							<section>
								<label class="textarea">
									<textarea rows="3" name="alamat_tujuan" placeholder="Diajukan Kepada"></textarea>
								</label>
							</section>

							<div class="row">
								<label class="label col"><b>Informasi Data Client : </b> </label>
								</div> 
								<div class="row">
								<section class="col col-5">
									<label class="select">
										<select name="ms_kwh" id="ms_kwh" onchange="changeKwh(this.value)">
											<option value="0" selected disabled>Pilih Nama Client</option>
											<?php foreach($ms_kwh->result() as $row){ 
												$kwh = array("lokasi" => $row->Lokasi, "daya" => $row->Daya, "no_id" => $row->No_ID, "nama_client" => $row->Nama_Client);
												$kwh = json_encode($kwh);
											?>
												<option value='<?php echo $kwh?>'><?php echo $row->Nama_Client?></option>
											<?php } ?>
										</select>
										<input id="client_id" name="client_id" type="hidden">
										<i></i>
									</label>
								</section>
								<section class="col col-4">
									<label class="input">
										<input type="text" name="lokasi" id="lokasi" placeholder="Lokasi">
									</label>
								</section>
								<section class="col col-3">
									<label class="input">
										<input type="text" name="daya" id="daya" placeholder="Daya">
									</label>
								</section>
								</div>

								<div class="row">
								<section class="col col-5">
									<label class="select">
										<select name="golongan" id="golongan" onchange="changeGolongan(this.value)">
											<option value="0" selected disabled>Pilih Golongan Tarif</option>
											<?php foreach($golongan->result() as $row){ 
											$gol		= array("tarif" => $row->Tarif_KWH, "golongan" => $row->Golongan_Tarif);
											$gol		= json_encode($gol);
											?>
											<option value='<?php echo $gol?>'><?php echo $row->Golongan_Tarif?></option>
											<?php } ?>
										</select>
										<input name="nama_golongan" id="nama_golongan" type="hidden"/>
										<!--<input type="hidden" name="nama_golongan" id="nama_golongan">-->
										<i></i>
									</label>
								</section>
								<section class="col col-4">
									<label class="input">
										<input type="text" name="tarif_lwb" id="tarif_lwb" placeholder="Tarif LWB">
									</label>
								</section>
								</div>
								<hr />
								<div class="row">
								<label class="label col"><b>Perhitungan Harga Minimum : </b> <i>(Daya x PLN x Tarif LWB)</i></label>
								</div>

								<div class="row">
								<section class="col col-2">
									<label class="input">
										<input type="text" name="daya2" id="daya2" placeholder="Daya">
									</label>
								</section>
								<label class="label col">X</label>
								<section class="col col-2">
									<label class="input">
										<input type="number" name="tarif_pln" id="tarif_pln"  placeholder="Tarif PLN">
									</label>
								</section>
								<label class="label col">X</label>
								<section class="col col-2">
									<label class="input">
										<input type="text" name="tarif_lwb2" id="tarif_lwb2" placeholder="Tarif LWB">
									</label>
								</section>
								<label class="label col">=</label>
								<label class="label col">Rp.</label>
								<section class="col col-2">
									<label class="input">
										<input type="text" name="jumlah_minimum" id="jumlah_minimum" placeholder="Jumlah">
									</label>
								</section>
								<label class="label col">Kva</label>
								</div>
								<hr />

								<div class="row">
								<label class="label col"><b>Perhitungan Pemakaian KWH : </b> <i>(Value Tanggal Akhir - Value Tanggal Awal)</i></label>
								</div>
								<div class="row">
								
								<section class="col col-6">
									<label class="input">
										<i class="icon-append fa fa-calendar"></i>
										<input type="text" name="start" id="start" onchange="getJumlahKwh()" placeholder="Pilih Tanggal Awal">
									</label>
								</section>
								<section class="col col-6">
									<label class="input">
										<i class="icon-append fa fa-calendar"></i>
										<input type="text" name="finish" id="finish" onchange="getJumlahKwh()" placeholder="Pilih Tanggal Akhir">
									</label>
								</section>
								<label class="label col"><b> Jumlah Pemakaian KWH LWBP / Luar Waktu Beban Puncak : </b></label>
							</div>

							<div class="row">

								<section class="col col-3">
									<label class="input">
										<input type="text" name="max_kwh" id="max_kwh" placeholder="Value Tanggal Akhir">
									</label>
								</section>
								<label class="label col">-</label>
								<section class="col col-3">
									<label class="input">
										<input type="text" name="min_kwh" id="min_kwh" placeholder="Value Tanggal Awal">
									</label>
								</section>
								<label class="label col">=</label>
								<section class="col col-3">
									<label class="input">
										<input type="text" name="jumlah_kwh" id="jumlah_kwh" placeholder="Jumlah">
									</label>
								</section>
								<label class="label col">Kwh</label>
								<label class="label col"><b> Jumlah Pemakaian KWH WBP / Waktu Beban Puncak : </b></label>
								</div>

								<div class="row">

								<section class="col col-3">
									<label class="input">
										<input type="text" name="max_kwh" id="max_kwh" placeholder="Value Tanggal Akhir">
									</label>
								</section>
								<label class="label col">-</label>
								<section class="col col-3">
									<label class="input">
										<input type="text" name="min_kwh" id="min_kwh" placeholder="Value Tanggal Awal">
									</label>
								</section>
								<label class="label col">=</label>
								<section class="col col-3">
									<label class="input">
										<input type="text" name="jumlah_kwh" id="jumlah_kwh" placeholder="Jumlah">
									</label>
								</section>
								<label class="label col">Kwh</label>
								</div>

								<hr />
								<div class="row">
								<label class="label col"><b>Perhitungan Biaya Pemakaian : </b> <i>(Faktur Meter x Jumlah Pemakaian Kwh x Tarif LWB)</i></label>
								</div>

								<div class="row">
								<label class="label col"><b>Jumlah Pemakaian LWBP / Luar Waktu Beban Puncak :</i></label>
								</div>
								<div class="row">

								<label class="label col">1</label>
								<label class="label col">X</label>
								<section class="col col-2">
									<label class="input">
										<input type="text" name="jumlah_kwh2" id="jumlah_kwh2" placeholder="Jumlah Kwh">
									</label>
								</section>
								<label class="label col">X</label>
								<section class="col col-2">
									<label class="input">
										<input type="text" name="tarif_lwb3" id="tarif_lwb3" placeholder="Tarif LWB">
									</label>
								</section>

								<label class="label col">=</label>
								<label class="label col">Rp.</label>
								<section class="col col-3">
									<label class="input">
										<input type="text" name="jumlah_biaya" id="jumlah_biaya" placeholder="Jumlah">
									</label>
								</section>
								</div>

								<div class="row">
								<label class="label col"><b>Jumlah Pemakaian WBP / Waktu Beban Puncak :</i></label>
								</div>
								
								<div class="row">
								<label class="label col">1</label>
								<label class="label col">X</label>
								<section class="col col-2">
									<label class="input">
										<input type="text" name="jumlah_kwh2" id="jumlah_kwh2" placeholder="Jumlah Kwh">
									</label>
								</section>
								<label class="label col">X</label>
								<section class="col col-2">
									<label class="input">
										<input type="text" name="tarif_lwb3" id="tarif_lwb3" placeholder="Tarif LWB">
									</label>
								</section>

								<label class="label col">=</label>
								<label class="label col">Rp.</label>
								<section class="col col-3">
									<label class="input">
										<input type="text" name="jumlah_biaya" id="jumlah_biaya" placeholder="Jumlah">
									</label>
								</section>
								</div>
								<hr />




								<div class="row">
								<label class="label col"><b>Mengetahui / Penanggung Jawab : </i></label>
								</div>
								<div class="row">
								<section class="col col-6">
									<label class="input">
										<input type="text" name="kordinator" id="kordinator" placeholder="Nama Koordinator">
									</label>
								</section>

								<section class="col col-6">
									<label class="input">
										<input type="text" name="manager" id="manager" placeholder="Nama Manager">
									</label>
								</section>
								</div>
								<footer>
								<button type="submit" class="btn-u">
								Save & Print</button>
								<div class="progress"></div>
								</footer>
								
						</fieldset>
						</form>

				</div>
				<!-- End Profile Content -->
			</div>
		</div><!--/container-->
		<!--=== End Profile ===-->

		
	</div><!--/wrapper-->

	

	<!-- JS Global Compulsory -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/plugins/back-to-top.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/plugins/smoothScroll.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/plugins/counter/waypoints.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/plugins/counter/jquery.counterup.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>

	<!-- JS Customization -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/custom.js"></script>
	<!-- JS Page Level -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/app.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/datepicker.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/style-switcher.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/forms/reg.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
			App.initCounter();
			StyleSwitcher.initStyleSwitcher();
			

			$('#start').datepicker({
	            dateFormat: 'dd-mm-yy',
	            changeMonth: true,
	            changeYear: true,
	            prevText: '<i class="icon-chevron-left"></i>',
	            nextText: '<i class="icon-chevron-right"></i>',
	            onSelect: function( selectedDate )
	            {
	                $('#finish').datepicker('option', 'minDate', selectedDate);
					getJumlahKwh();
	            }
	        });
	        $('#finish').datepicker({
	            dateFormat: 'dd-mm-yy',
	            changeMonth: true,
	            changeYear: true,
	            prevText: '<i class="icon-chevron-left"></i>',
	            nextText: '<i class="icon-chevron-right"></i>',
	            onSelect: function( selectedDate )
	            {
	                $('#start').datepicker('option', 'maxDate', selectedDate);
					getJumlahKwh();
				}
	        });

			$('#tarif_pln').on('input', function() {
				// do something
				var total	= ($("#daya").val() * $("#tarif_lwb").val() * $('#tarif_pln').val()).toFixed(2);
				$("#jumlah_minimum").val(total);
			});
			
		});

		function changeKwh(value)
		{
			var kwh	= $.parseJSON(value);
			$("#lokasi").val(kwh.lokasi);
			$("#daya").val(kwh.daya);
			$("#client_id").val(kwh.no_id);
			$("#daya2").val(kwh.daya);
			var total	= ($("#daya").val() * $("#tarif_lwb").val() * $('#tarif_pln').val()).toFixed(2);
			$("#jumlah_minimum").val(total);
			//alert(kwh.lokasi);
		}
		
		function changeGolongan(value)
		{
			var gol	= $.parseJSON(value);
			$("#tarif_lwb").val(gol.tarif);
			$("#tarif_lwb2").val(gol.tarif);
			$("#tarif_lwb3").val(gol.tarif);
			$("#nama_golongan").val(gol.golongan);
			var total	= ($("#daya").val() * $("#tarif_lwb").val() * $('#tarif_pln').val()).toFixed(2);
			$("#jumlah_minimum").val(total);
		}
		
		function getJumlahKwh()
		{
			console.log("as");
			
			var start	= $("#start").val();
			var finish	= $("#finish").val();
			var client	= $("#client_id").val();
			
			if(start != "" && finish != "" && client != "")
			{
				$.ajax({
					data 	: { tgl_start : start, tgl_finish : finish, client_id : client},
					type	: "post",
					url		: "<?php echo base_url()?>billing/get_kwh",
					success	: function(response)
					{
						$("#max_kwh").val(response.maximum);
						$("#min_kwh").val(response.minimum);
						$("#jumlah_kwh").val((response.maximum - response.minimum).toFixed(2));
						$("#jumlah_kwh2").val((response.maximum - response.minimum).toFixed(2));
						$("#jumlah_biaya").val(($("#jumlah_kwh").val() * $("#tarif_lwb").val()).toFixed(2));
					}
				});
			}	
		}
	</script>
	
	<!--[if lt IE 9]>
	<script src="assets/plugins/respond.js"></script>
	<script src="assets/plugins/html5shiv.js"></script>
	<script src="assets/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->
</body>

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.4/page_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Jun 2016 13:40:32 GMT -->
</html>
