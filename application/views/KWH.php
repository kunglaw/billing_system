<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.4/page_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Jun 2016 13:38:12 GMT -->
<head>
	<title>Wisma Mulia 2 | Report KWH</title>

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
					<img class="img-responsive profile-img margin-bottom-20" src="<?php echo base_url()?>assets/img/team/img32-md.jpg" alt="">

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
				<!-- Tabs -->
					<div class="tab-v1">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#home-1" data-toggle="tab">Report KWH</a></li>
							<li class=""><a href="#home-2" data-toggle="tab">Tenant Floor </a></li>						
						</ul>

						
							<!-- Success Forms -->
						

					<div class="profile-body">

						<!-- Start Search Chiller -->
						<div class="table-search-v1 margin-bottom-20">

					<div class="tab-content">
						
						<div class="tab-pane fade in active" id="home-1">		
						
						<form action="<?php echo base_url()?>KWH/filter" method="post" id="sky-form1" class="sky-form">
						<!-- Start Search Chiller -->
						<section class="col col-5">
							<label class="input">
								<i class="icon-append fa fa-calendar"></i>
								<input type="text" name="start" id="start" placeholder="Expected start date" required>
							</label>
						</section>

						<section class="col col-5">
							<label class="input">
								<i class="icon-append fa fa-calendar"></i>
								<input type="text" name="finish" id="finish" placeholder="Expected finish date" required>
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
								&nbsp &nbsp<a href="<?php  echo base_url()?>KWH/cetak/<?php echo $start?>/<?php echo $finish?>" target="_blank" class="btn btn-success">Print PDF </a> 
							<?php } ?>
						</section>
						<br/ >

				
						
						<div class="headline-center margin-bottom-60">
					<h2><strong>KWH Wisma Mulia 2</strong></h2>
					<p>Laporan Perhitungan KWH Wisma Mulia 2<br>
					<?php if($this->uri->segment(2) == 'filter'){ ?>
					<strong>Periode <?php echo date('d F Y' ,strtotime($this->input->post('start')));?> - <?php echo date('d F Y' ,strtotime($this->input->post('finish'))); ?></strong>
					<?php } ?>
					  </p>
				</div>	

						<!-- Start Test Chiller -->
						<?php 
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

							$list_pln_chiller		.= '<h3 class="heading-xs"> '.$nama_pln_chiller.'<span class="pull-right">'.$total_value_chiller.'</span></h3><br>';
							$ch7				= $total_value_chiller - $ch42;

							$lantai 			= $this->db->query("select *,(select sum(Value) from tdb where ID_Lantai = lantai.ID_Lantai) as total_tdb, (select sum(Value) from hdb where ID_Lantai = lantai.ID_Lantai) as total_hdb from lantai");	

							
						}
						
						foreach($pln_konsumsi->result() as $row)
						{	
					
							$list_pln_konsumsi		.= '<h3 class="heading-xs">'.$row->Nama_PLN.'<span class="pull-right">'.$row->total_value.'</span></h3><br>
							';
					
						}
						
						foreach($query_list_tenant->result() as $row)
						{
							$list_tenant			.= '<h3 class="heading-xs"><b>'.$row->Nama_Lantai.'</b><span class="pull-right">'.number_format(($row->hdb + $row->tdb),0,",",".").'</span></h3><br>
							';
							
							$list_tenant			.= '<h3 class="heading-xs">HDB<span class="pull-right">'.$row->hdb.'</span></h3><br>
							';
							
							$query_list_hdb			= $this->db->query("select * from tdb where ID_Lantai = '$row->ID_Lantai'");
							$no_tdb					= 1;
							
							foreach($query_list_hdb->result() as $row_hdb)
							{
								$list_tenant			.= '<h3 class="heading-xs">TDB '.$no_tdb++.'<span class="pull-right">'.$row_hdb->Value.'</span></h3><br>
								';
							}
							
							$list_tenant			.= "<hr>";
						}
						?>

						<h2 class="heading-xs"><b>INCOMING PLN </b><span class="pull-right"><b><?php echo number_format($incoming_pln,0,",",".");?></b></span></h2>
						<hr />
							
						<!-- End Test Chiller -->
						<br/ >

						<h3 class="heading-xs"><b>LVMSB</b><span class="pull-right"><b><?php echo number_format($konsumsi_tenant,0,",",".");?></b></span></h3>

						<br/ >

						<?php echo $list_pln_konsumsi?>
						<h3 class="heading-xs">CONSUMPTION TENANT FLOOR<span class="pull-right"><?php echo number_format($tenant_floor,0,",",".");?></span></h3><br/>

						<h3 class="heading-xs"> OTHERS <span class="pull-right"><?php echo number_format($other,0,",",".");?></span></h3>

						<br/ >
						<hr />

							<h3 class="heading-xs"><b>CHILLER PLANT TOTAL </b><span class="pull-right"><b><?php echo number_format($kwh_pln_chiller->total_kwh,0,",","."); ?></b></span></h3>
							
						<!-- End Test Chiller -->
						<br/ >
			
						<?php echo $list_pln_chiller?>
						<h3 class="heading-xs">CHILLER PLANT LEVEL 42<span class="pull-right"><?php echo number_format($ch42,0,",","."); ?></span></h3><br/>
						<h3 class="heading-xs"> CHILLER PLANT LEVEL 7 <span class="pull-right"><?php echo number_format($ch7,0,",","."); ?></span></h3>

						

						<hr>


					</div>
					
					<div class="tab-pane" id="home-2">	
						<?php echo $list_tenant?>
					</div>

				</div>
				<!-- End Profile Content -->
				</div>
				
				
				</div>
				</div>
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
