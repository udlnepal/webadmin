
	<!-- header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<?php foreach ($header_title_setup as $ht_item): ?>
			
			<a href="index.html" class="site-logo"><img src="<?php echo base_url(); ?>assets/img/<?php echo $ht_item['logo_image_name']; ?>" alt="purbanchal university" class="pull-left"> 





				<h5 class="pull-left site-title" style="margin:5px 10px;"><?php echo $ht_item['site_title']; ?></h5>
				 <h5 class="site-title" style="margin-left:75px;">पूर्वाञ्चल विश्वविद्यालय</h5>
			</a>
<?php endforeach; ?>
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-info">
				<div class="hf-item">
					<i class="fa fa-clock-o pull-left"></i>
					<p class="pull-left" style="margin-top:10px;"><span><a href="#">eProcurement System</a></span></p>
				</div>
				<div class="hf-item">
					<i class="fa fa-envelope pull-left"></i>
					<p class="pull-left" style="margin-top:10px;"><span><a href="#">Check Mail</a></span></p>
				</div>
			</div>
		</div>
	</header>
	<!-- header section end-->


	<!-- Header section  -->
	<nav class="nav-section">
		<div class="container">
			<!-- <div class="nav-right">
				<a href=""><i class="fa fa-search"></i></a>
				<a href=""><i class="fa fa-shopping-cart"></i></a>
			</div> -->
			<ul class="main-menu">
				<li class="active"><a href="index.html">Home</a></li>
				<li><a href="#">About PU</a></li>
				<li><a href="#">Event</a></li>
				<li><a href="#">ACADEMIC PROGRAMS</a></li>
				<li><a href="#">COLLEGES</a></li>
				<li><a href="#">CONTACT</a></li>
				<li><a href="#">GALLERY</a></li>
				<li><a href="#">EXAM SECTION</a></li>
			</ul>
		</div>
	</nav>
	<!-- Header section end -->
