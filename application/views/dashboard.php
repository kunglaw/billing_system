<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.4/page_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Jun 2016 13:38:12 GMT -->
<head>
	<title>Wisma Mulia 2 | BTU Chiller </title>

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
		<div class="container content profile">
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
					<div class="profile-body">

						<!-- Start Search Chiller -->
						<div class="table-search-v1 margin-bottom-20">

						<form action="<?php echo base_url()?>dashboard/filter" method="post" id="sky-form1" class="sky-form">
						<!-- Start Search Chiller -->
						<section class="col col-5">
							<label class="input">
								<i class="icon-append fa fa-calendar"></i>
								<input type="text" name="start" id="start" placeholder="Expected start date">
							</label>
						</section>

						<section class="col col-5">
							<label class="input">
								<i class="icon-append fa fa-calendar"></i>
								<input type="text" name="finish" id="finish" placeholder="Expected finish date">
							</label>
						</section>
						&nbsp &nbsp 
						<div class="btn-group">
							<button type="submit" class="btn btn-success">Search</button> 
								
						</div>

						</form>
						<br /> <br /> 
						<!-- End Search Chiller -->
						<section class="col col-5">
							<?php if($this->uri->segment(2) == 'filter'){ ?>
								&nbsp &nbsp<a href="<?php  echo base_url()?>dashboard/cetak/<?php echo $start?>/<?php echo $finish?>" target="_blank" class="btn btn-success">Print PDF </a> 
							<?php } ?>
						</section>
						<br/ >

						
						<div class="headline-center margin-bottom-60">
					<h2><strong>REPORT BTU CHILLER PRODUCTION</strong></h2>
					<p>Laporan BTU Chiller Produksi Wisma Mulia 2<br>
					<?php if($this->uri->segment(2) == 'filter'){ ?>
					<strong>Periode <?php echo date('d F Y' ,strtotime($this->input->post('start')));?> - <?php echo date('d F Y' ,strtotime($this->input->post('finish'))); ?></strong>
					<?php } ?>
					  </p>
				</div>	

						<!-- Start Test Chiller -->
						<?php 
						$jumlah_pro = 0;
						if(isset($filter))
						{	
							$chiller = $this->db->query("select * from db_btu where Type = 'Production'");
							foreach($chiller->result() as $row)
							{
								$max		= $this->db->query("select max(value) as max from bturiwayat where Date_Time between '$start' and '$finish' and ID_BTU = '$row->ID_BTU'")->row();
								$min		= $this->db->query("select min(value) as min from bturiwayat where Date_Time between '$start' and '$finish' and ID_BTU = '$row->ID_BTU'")->row();

								$jumlah_pro		= $jumlah_pro + ($max->max - $min->min);
							?>
							<h3 class="heading-xs"><?php echo $row->Nama_BTU?> <span class="pull-right"><?php echo $max->max - $min->min?></span></h3>
								<div class="progress progress-u progress-xxs">
									<div style="width: <?php echo (($max->max - $min->min)/2500000000) * 100?>%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="42" role="progressbar" class="progress-bar progress-bar-blue">
									</div>
								</div>
							
						<?php 
							}
						} ?>

						<h3 class="heading-xs"><b>TOTAL CHILLER PRODUCTION</b><span class="pull-right"><?php echo $jumlah_pro?></span></h3>
							<div class="progress progress-u progress-xxs">
								<div style="<?php echo (isset($filter) ? (($max->max - $min->min)/2500000000) * 100 : '0' ) ;?>%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="85" role="progressbar" class="progress-bar progress-bar-u">
								</div>
							</div>
						<!-- End Test Chiller -->
						<br/ >
						<div class="headline-center margin-bottom-60">
					<h2><strong>REPORT BTU CHILLER CONSUMPTION</strong></h2>
					<p>Laporan BTU Chiller Konsumsi Wisma Mulia 2<br>
					<?php if($this->uri->segment(2) == 'filter'){ ?>
					<strong>Periode <?php echo date('d F Y' ,strtotime($this->input->post('start')));?> - <?php echo date('d F Y' ,strtotime($this->input->post('finish'))); ?></strong>
					<?php } ?>
					</p>
				</div>

						<!-- Start Test Chiller -->
						<!-- Start Test Chiller -->
						<?php 
						$jumlah_con = 0;
						if(isset($filter))
						{	
							$chiller = $this->db->query("select * from db_btu where Type = 'Consumption'");
							foreach($chiller->result() as $row)
							{
								$max		= $this->db->query("select max(value) as max from riwayatkonsumsi where Date_Time between '$start' and '$finish' and ID_BTU = '$row->ID_BTU'")->row();
								$min		= $this->db->query("select min(value) as min from riwayatkonsumsi where Date_Time between '$start' and '$finish' and ID_BTU = '$row->ID_BTU'")->row();

								$jumlah_con		= $jumlah_con + ($max->max - $min->min);
							?>
							<h3 class="heading-xs"><?php echo $row->Nama_BTU?> <span class="pull-right"><?php echo $max->max - $min->min?></span></h3>
								<div class="progress progress-u progress-xxs">
									<div style="width: <?php echo (($max->max - $min->min)/2500000000) * 100?>%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="42" role="progressbar" class="progress-bar progress-bar-blue">
									</div>
								</div>
							
						<?php 
							}
						} ?>

						<h3 class="heading-xs">TOTAL OTHER BTU CONSUMPTION<span class="pull-right"><?php echo $jumlah_pro - $jumlah_con?></span></h3>
							<div class="progress progress-u progress-xxs">
								<div style="width: <?php echo (($max->max - $min->min)/2500000000) * 100?>%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="42" role="progressbar" class="progress-bar progress-bar-blue">
									</div>
							</div>

						<h3 class="heading-xs"><b>TOTAL CHILLER CONSUMPTION</b><span class="pull-right"><?php echo $jumlah_con + ($jumlah_pro - $jumlah_con) ?></span></h3>
							<div class="progress progress-u progress-xxs">
								<div style="width: <?php echo (($max->max - $min->min)/2500000000) * 100?>%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="42" role="progressbar" class="progress-bar progress-bar-blue">
									</div>
							</div>	
						<!-- End Test Chiller -->

						
						<!-- Start Table Chiller -->

						
						<hr>

					</div>

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
