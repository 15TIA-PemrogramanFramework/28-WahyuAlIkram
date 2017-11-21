
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title>Minimal an Admin Panel Category Flat Bootstrap Responsive Website Template | Blank :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="<?php echo base_url('assets/') ?>css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<link href="<?php echo base_url('assets/') ?>css/style.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url('assets/') ?>css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>"/> 

	<style>
	.dataTables_wrapper {
		min-height: 500px
	}
	
	.dataTables_processing {
		position: absolute;
		top: 50%;
		left: 50%;
		width: 100%;
		margin-left: -50%;
		margin-top: -25px;
		padding-top: 20px;
		text-align: center;
		font-size: 1.2em;
		color:grey;
	}
</style>

<script src="<?php echo base_url('assets/') ?>js/jquery.min.js"> </script>
<script src="<?php echo base_url('assets/') ?>js/bootstrap.min.js"> </script>

<!-- Mainly scripts -->
<script src="<?php echo base_url('assets/') ?>js/jquery.metisMenu.js"></script>
<script src="<?php echo base_url('assets/') ?>js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="<?php echo base_url('assets/') ?>css/custom.css" rel="stylesheet">
<script src="<?php echo base_url('assets/') ?>js/custom.js"></script>
<script src="<?php echo base_url('assets/') ?>js/screenfull.js"></script>
<script src="js/screenfull.js"></script>
<script>
	$(function () {
		$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

		if (!screenfull.enabled) {
			return false;
		}

		

		$('#toggle').click(function () {
			screenfull.toggle($('#container')[0]);
		});
		

		
	});
</script>

<!----->
	

</head>
<body onload="matchIndex()">

	<div id="wrapper">
       <!----->
       <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand">Sorum Mobil</a></h1>         
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
            <div class="clearfix"> </div>
           </div>
        <nav class="navbar-default navbar-static-top" role="navigation">
        	
     
       
        	<!-- Brand and toggle get grouped for better mobile display -->
        	
        	<!-- Collect the nav links, forms, and other content for toggling -->

        	<?php
        	$nama = $this->session->userdata('nama');
        	$username = $this->session->userdata('username');
            $kode=$this->session->userdata('kode'); 
        	?>
        	<div class="drop-men" >
        		<ul class=" nav_1">
        			<li class="dropdown">
        				<a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret"><?php echo $this->session->userdata('username') ?><i class="caret"></i></span><img src="<?php echo base_url('assets/') ?>images/user.png"></a>
        				<ul class="dropdown-menu " role="menu">
        					<?php if($this->session->userdata('status') == 'dealer'){ ?>
        					<li><a href="<?php echo site_url("dealer/ubah_password/".$username); ?>""><i class="fa fa-lock">
        						<?php } else if ($this->session->userdata('status') == 'supplier'){ ?>
        						<li><a href="<?php echo site_url("supplier/ubah_password/".$kode); ?>""><i class="fa fa-lock">
        							<?php } else {
                                   ?>
        							<li><a href="<?php echo site_url("pembeli/ubah_password/".$kode); ?>""><i class="fa fa-lock"><?php } ?>
        							</i>Ubah Password</a></li>
        							<li><a href="<?php echo site_url('login/logout'); ?>"><i class="fa fa-sign-out"></i>Keluar</a></li>
        						</ul>
        					</li>

        				</ul>
        			</div><!-- /.navbar-collapse -->
        			<div class="clearfix">

        			</div>

        			<?php 
        			$this->load->view('Templates/Navigation');
        			?>
        		</nav>
        		<div id="page-wrapper" class="gray-bg dashbard-1">
        			<div class="content-main">
