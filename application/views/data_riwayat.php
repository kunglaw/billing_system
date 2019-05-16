<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.4/page_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Jun 2016 13:38:12 GMT -->
<?php $this->load->view("components/head")?>

<body>
	<div class="wrapper">
		

		<!--=== Profile ===-->
		<div class="container content profile">
			<div class="row">
				<!--Left Sidebar-->
				<div class="col-md-3 md-margin-bottom-40">
					<img class="img-responsive profile-img margin-bottom-20" src="assets/img/team/img32-md.png" alt="">

					<?php $this->load->view('sidebar')?>

					<div class="margin-bottom-50"></div>

					
				</div>
				<!--End Left Sidebar-->

				
				
				<!-- Begin Content -->
				<div class="col-md-9">
				    <!--Tag Box v5-->
					<div class="row tag-box tag-box-v5">
						
						<form action="<?php echo base_url()?>/index.php/riwayat_kwh/export" method="post" class="sky-form" enctype="multipart/form-data">
						<div class="col-md-9">
							<label for="file" class="input input-file">
									<div class="button"><input name="file" type="file">Browse</div><input placeholder="Import data excel" readonly="" type="text">
							</label>
						</div>
						<button type="submit" class="btn-u">Import Now! </button>
						</form>
					</div>
					<!--End Tag Box v5-->
					<?php if($this->session->flashdata('msg') == 'success'){?>
					<div class="alert alert-warning fade in">
						<button data-dismiss="alert" class="close" type="button">×</button>
						<strong>Data Berhasil Disimpan</strong> <br>
						
					</div>
					<?php } ?>

					<!--Basic Table Option (Spacing)-->
					<div class="panel panel-green margin-bottom-40">
						<div class="panel-heading">
							<center><h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Data Riwayat KWH</h3></center>
						</div>
						<div class="panel-body">
							<table class="table table-striped" id="mytable">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Client</th>
										<th class="hidden-sm">Value</th>
										<th>Date/Time</th>
										
									</tr>
								</thead>
								<tbody>
								<?php 
								$i = 1;
								foreach($riwayat->result() as $row){ ?>
									<tr>
										<td><?php echo $i++?></td>
										<td><?php echo $row->Nama_Client?></td>
										<td class="hidden-sm"><?php echo $row->Value?></td>
										<td><?php echo date('d F Y', strtotime($row->Date_Time))?></td>
										
									</tr>
								<?php } ?>	
								</tbody>
							</table>
						</div>
						
					</div>
					<!--End Basic Table-->


						<!--End Tag Box v5-->

				
				</div>
				<!-- End Content -->
				
				</div>
				<!-- End Profile Content -->
			</div>
		</div><!--/container-->
		<!--=== End Profile ===-->

		
	</div><!--/wrapper-->

	

	<!-- JS Global Compulsory -->
	<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
	<script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>
	<script type="text/javascript" src="assets/plugins/counter/waypoints.min.js"></script>
	<script type="text/javascript" src="assets/plugins/counter/jquery.counterup.min.js"></script>
	<script type="text/javascript" src="assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<!-- JS Customization -->
	<script type="text/javascript" src="assets/js/custom.js"></script>
	<!-- JS Page Level -->
	<script type="text/javascript" src="assets/js/app.js"></script>
	<script type="text/javascript" src="assets/js/plugins/datepicker.js"></script>
	<script type="text/javascript" src="assets/js/plugins/style-switcher.js"></script>
	<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
	
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
			App.initCounter();
			App.initScrollBar();
			Datepicker.initDatepicker();
			StyleSwitcher.initStyleSwitcher();
			$('#mytable').DataTable();
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
