<script>
var baseurl = "<?php echo base_url()?>";

function tambah()
{
	//alert('test');
	$.ajax({
		type:"post",
		url:baseurl+"client/add_process",
		data:$("form#formClient").serialize(),
		beforeSend:function(){
			$("#buttonTambah").hide();
		},
		success:function(){
			$("#buttonTambah").show();
			location.reload();
		}
	});
}

function update()
{
	//alert('test');
	$.ajax({
		type:"post",
		url:baseurl+"client/update_process",
		data:$("form#formClient").serialize(),
		beforeSend:function(){
			$("#buttonUbah").hide();
		},
		success:function(){
			//$("#buttonTambah").show();
			$("#buttonUbah").show();
			//location.reload();
		}
	});
}

function reset_button()
{
	$("#No_ID").val('');
	$("#Nama_Client").val('');
	$("#Lokasi").val('');
	$("#Daya").val('');

	
	$("#buttonTambah").show();
	$("#buttonUbah").hide();
	//alert('test');
}

function loadForm(id)
{
	//alert('test');
	$.ajax({
		type:"post",
		url:baseurl+"client/ambil_data/"+id,
		dataType:"json",
		beforeSend:function(){
			$("#buttonTambah").hide();
			$("#buttonUbah").show();
		},
		success:function(data){
			//alert(data.paket_id);
			$("#No_ID").val(data.No_ID);
			$("#Nama_Client").val(data.Nama_Client);
			$("#Lokasi").val(data.Lokasi);
			$("#Daya").val(data.Daya);
			$("#Nama_Client").focus();
		}
	});
}
</script>







<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.4/page_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Jun 2016 13:38:12 GMT -->
<head>
	<title>Menara Mulia 2 | Billing System</title>

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
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="assets/css/headers/header-default.css">
	<link rel="stylesheet" href="assets/css/footers/footer-v1.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="assets/plugins/animate.css">
	<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
	<link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">

	<!-- CSS Page Style -->
	<link rel="stylesheet" href="assets/css/pages/profile.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">
	<link rel="stylesheet" href="assets/css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="assets/css/custom.css">
</head>

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
						
						<form action="<?php echo base_url()?>riwayat_kwh/export" method="post" class="sky-form" enctype="multipart/form-data">
						<div class="col-md-9">
							<h2><i> Silahkan Masukkan Data Baru untuk " Data Client "</i> </h2>
						</div>
						<button type="submit" class="btn-u">Add New Data! </button>
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
							<center><h3 class="panel-title"><i class="fa fa-user"></i> Data Client</h3></center>
						</div>
						<?php if($riwayat->num_rows() == 0){ ?>
						<div class="alert alert-danger">Tidak Ada Data !</div>
						<?php } else { ?>	
						<div class="panel-body">
							<table class="table table-striped" id="mytable">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Client</th>
										<th class="hidden-sm">Lokasi</th>
										<th>Daya</th>
										<th align="center">Status</th>
										
									</tr>
								</thead>
								<tbody>
								<?php 
								$i = 1;
								foreach($riwayat->result() as $row){ ?>
									<tr>
										<td><?php echo $i++?></td>
										<td><?php echo $row->Nama_Client?></td>
										<td class="hidden-sm"><?php echo $row->Lokasi?></td>
										<td><?php echo $row->Daya?></td>
										<td>
										<button class="btn btn-warning btn-xs" onclick="loadForm('<?php echo $row->No_ID?>')"><i class="fa fa-pencil"></i> Edit
										</button> <a href="<?php echo base_url()?>client/delete/<?php echo $row->No_ID?>">
										<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete</button></td>
										
									</tr>
								<?php } ?>	
								</tbody>
							</table>
						</div>
						<?php } ?> 
						
					</div>
					<!--End Basic Table-->

						<!-- Horizontal Form -->
					<div class="panel panel-green margin-bottom-40">
						<div class="panel-heading">
							<h3 class="panel-title"><center><i class="fa fa-user"></i>Form Data Client </center></h3>
						</div>
						<div class="panel-body">
						  <?php
							$message = $this->session->flashdata('success');
							echo $message == '' ? '' : '<div class="alert alert-success"><i class="fa fa-check"></i> ' . $message . '</div>';
						  ?>
						  <?php
							$message = $this->session->flashdata('info');
							echo $message == '' ? '' : '<div class="alert alert-info"><i class="fa fa-info"></i> ' . $message . '</div>';
						  ?>
						  <?php
							$message = $this->session->flashdata('warning');
							echo $message == '' ? '' : '<div class="alert alert-warning"><i class="fa fa-exclamation"></i> ' . $message . '</div>';
						  ?>
						  <?php
							$message = $this->session->flashdata('danger');
							echo $message == '' ? '' : '<div class="alert alert-danger"><i class="fa fa-ban"></i> ' . $message . '</div>';
						  ?>


							<form class="form-horizontal" role="form" id="formClient" method="post">
							<div class="form-group">
									<label for="inputEmail1" class="col-lg-2 control-label">No_ID</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="No_ID" name="No_ID" placeholder="No ID">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail1" class="col-lg-2 control-label">Nama Client</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="Nama_Client" name="Nama_Client" placeholder="Nama Client">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword1" class="col-lg-2 control-label">Lokasi</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="Lokasi" name="Lokasi" placeholder="Lokasi">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword1" class="col-lg-2 control-label">Daya</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="Daya" name="Daya" placeholder="Daya">
									</div>
								</div>
								<div class="form-group">
									
								</div>
								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
										<button type="submit" class="btn-u btn-u-green" id="buttonTambah" class="btn btn-success" onclick="tambah()">Add</button>
										<button type="submit" class="btn-u btn-u-blue" id="buttonUbah" onclick="update()">Update</button>
										<button type="button" id="buttonReset" onclick="reset_button()" class="btn btn-warning">Reset</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- End Horizontal Form -->


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
