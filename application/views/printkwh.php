<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.4/page_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Jun 2016 13:38:12 GMT -->
<head>
	<title>Menara Palma 2 | Billing System</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">

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
		<div class="container content">
			<div class="row">
				<!--Left Sidebar-->
				<div class="col-md-3 md-margin-bottom-40">
					<img class="img-responsive profile-img margin-bottom-20" src="<?php echo base_url()?>assets/img/team/img32-md.png" alt="">

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
						
					<div class="headline-center margin-bottom-60">
				
						<form action="#" id="sky-form" class="sky-form">
						<header><p><b>Form Pemakaian KWH</b></p></header>

						<fieldset>

						    <div class="row">
						    <section>
								<label for="file" class="input">
									<input type="text" id="file" placeholder="Tuliskan Nama Laporan ">
								</label>
							</section>
							<div class="row">
							<section class="col col-6">
								<label class="textarea">
									<textarea rows="7" name="info" placeholder="Tuliskan Alamat Tujuan"></textarea>
								</label>
							</section>
							<section class="col col-3">
							<label class="label col"><b>Informasi Data Client : </b> </label>
							</section>
							<section class="col col-3">
									<label class="input">
										<input type="text" name="year" id="year" placeholder="Nama Client">
									</label>
									<label class="input">
										<input type="text" name="year" id="year" placeholder="Lokasi">
									</label>
									<label class="input">
										<input type="text" name="year" id="year" placeholder="Tarif LWBP">
									</label>
									<label class="input">
										<input type="text" name="year" id="year" placeholder="Faktur Meter">
									</label>
									<label class="input">
										<input type="text" name="year" id="year" placeholder="Golongan Tarif">
									</label>
								</section>
								</div>
							</div>

							<table class="table table-striped">
									<thead>
										<tr>
											<th><center>Catatan Meter</center></th>
											<th><center>TANGGAL</center></th>
											<th><center>PEMBACAAN</center></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>STAND METER AWAL</td>
											<td>24/10/1990</td>
											<td>1990</td>
										</tr>
										<tr>
											<td>STAND METER AKHIR</td>
											<td>31/10/1990</td>
											<td>1990</td>
										</tr>
										<tr>
											<td></td>
											<td>PEMAKAIAN KWH</td>
											<td>1990</td>
										</tr>
								</tbody>
								</table>

								<hr/>

								
								<div class="row">
								<label class="label col"><b>Biaya Pemakaian : </b> <i>(Faktur Meter x Jumlah Pemakaian Kwh x Tarif LWB)</i></label>
								</div>

								<div class="row">
								<label class="label col">1</label>
								<label class="label col">X</label>
								<section class="col col-3">
									<label class="input">
										<input type="text" name="year" id="year" placeholder="Jumlah Kwh">
									</label>
								</section>
								<label class="label col">X</label>
								<section class="col col-3">
									<label class="input">
										<input type="text" name="year" id="year" placeholder="Tarif LWB">
									</label>
								</section>
								<label class="label col">=</label>
								<label class="label col">Rp.</label>
								<section class="col col-3">
									<label class="input">
										<input type="text" name="year" id="year" placeholder="Jumlah">
									</label>
								</section>
								
								</div>
								<div class="row">
								<label class="label col"><b>Rekening Biaya Minimum : </b> <i>(Faktur Meter x Jumlah Pemakaian Kwh x Tarif LWB)</i></label>
								</div>

								<div class="row">
								<label class="label col">1</label>
								<label class="label col">X</label>
								<section class="col col-3">
									<label class="input">
										<input type="text" name="year" id="year" placeholder="Jumlah Kwh">
									</label>
								</section>
								<label class="label col">X</label>
								<section class="col col-3">
									<label class="input">
										<input type="text" name="year" id="year" placeholder="Tarif LWB">
									</label>
								</section>
								<label class="label col">=</label>
								<label class="label col">Rp.</label>
								<section class="col col-3">
									<label class="input">
										<input type="text" name="year" id="year" placeholder="Jumlah">
									</label>
								</section>
								
								</div>
								<hr />


								<div class="row">
								<label class="label col"><b>Jumlah yang harus dibayarkan : </i></label>
								</div>
								<div class="row">
								<label class="label col col-4"><b>Biaya Ditaagihkan </b></label>
								<label class="label col"><b>Rp.</b></label>

								<section class="col col-3">
									<label class="input">
										<input type="text" name="year" id="year" placeholder="Jumlah">
									</label>
								</section>
								</div>

								<div class="row">
								<label class="label col col-4"><b>PPH Pasal 4,Ayat 2 </b></label>
								<label class="label col"><b>Rp.</b></label>

								<section class="col col-3">
									<label class="input">
										<input type="text" name="year" id="year" placeholder="Jumlah">
									</label>
								</section>
								</div>

								<div class="row">
								<label class="label col col-4"><b>Sub Total </b></label>
								<label class="label col"><b>Rp.</b></label>

								<section class="col col-3">
									<label class="input">
										<input type="text" name="year" id="year" placeholder="Jumlah">
									</label>
								</section>
								</div>
								<hr />
								<div class="row">
								<label class="label col col-4"><b>Grand Total </b></label>
								<label class="label col"><b>Rp.</b></label>

								<section class="col col-3">
									<label class="input">
										<input type="text" name="year" id="year" placeholder="Jumlah">
									</label>
								</section>
								</div>


								
								<footer>
								<button type="submit" class="btn-u">Save & Print</button>
								<div class="progress"></div>
								</footer>
								
						</fieldset>
						</form>

				</div>
				<!-- End Profile Content -->
			
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
	            }
	        });


		});
	</script>
	
	<!--[if lt IE 9]>
	<script src="assets/plugins/respond.js"></script>
	<script src="assets/plugins/html5shiv.js"></script>
	<script src="assets/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->
</body>

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.4/page_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Jun 2016 13:40:32 GMT -->
</html>
