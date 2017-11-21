<?php $this->load->view('templates/header');?>
<body >

	<div class="gallery">
		<div class="blank-page" style="padding-right:40px; padding-left:40px;">
			<h1 align="center">Selamat Datang <?php echo $this->session->userdata('nama') ?></h1>
		</div>
		<br>
		<div class="content-mid">
			<div class="middle-content">
				<h3>Latest Images :</h3>
				<!-- start content_slider -->
				<div id="owl-demo" class="owl-carousel text-center">
					<div class="item">
						<img class="<?php echo base_url('assets/') ?>lazyOwl img-responsive" img src="<?php echo base_url('assets/') ?>images/1.png" alt="name">
					</div>
					<div class="item">
						<img class="<?php echo base_url('assets/') ?>lazyOwl img-responsive" img src="<?php echo base_url('assets/') ?>images/2.png" alt="name">
					</div>
					<div class="item">
						<img class="<?php echo base_url('assets/') ?>lazyOwl img-responsive" img src="<?php echo base_url('assets/') ?>images/3.png" alt="name">
					</div>
					<div class="item">
						<img class="<?php echo base_url('assets/') ?>lazyOwl img-responsive" img src="<?php echo base_url('assets/') ?>images/4.png" alt="name">
					</div>
					<div class="item">
						<img class="<?php echo base_url('assets/') ?>lazyOwl img-responsive" img src="<?php echo base_url('assets/') ?>images/5.png" alt="name">
					</div>
					<div class="item">
						<img class="<?php echo base_url('assets/') ?>lazyOwl img-responsive" img src="<?php echo base_url('assets/') ?>images/6.png" alt="name">
					</div>
					<div class="item">
						<img class="<?php echo base_url('assets/') ?>lazyOwl img-responsive" img src="<?php echo base_url('assets/') ?>images/7.png" alt="name">
					</div>

				</div>
			</div>
			<!--//sreen-gallery-cursual---->
			<!-- requried-jsfiles-for owl -->
			<link href="<?php echo base_url('assets/') ?>css/owl.carousel.css" rel="stylesheet">
			<script src="<?php echo base_url('assets/') ?>js/owl.carousel.js"></script>
			<script>
				$(document).ready(function() {
					$("#owl-demo").owlCarousel({
						items : 4,
						lazyLoad : true,
						autoPlay : true,
						pagination : true,
						nav:true,
					});
				});
			</script>
			<!-- //requried-jsfiles-for owl -->
		</div>
	</div>
</body> 	
		<?php $this->load->view('templates/footer'); ?><s></s>
