
	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<?php foreach ($slider_setup as $sls): ?>

			<div class="hs-item set-bg" data-setbg="<?php echo base_url(); ?>assets/img/hero-slider/<?php echo $sls['slider_img_name']; ?>">
				<div class="hs-text">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<div class="hs-subtitle"><?php echo $sls['sec_slider_title']; ?></div>
								<h2 class="hs-title"><?php echo $sls['primary_slider_title']; ?></h2>
								<p class="hs-des"><?php echo $sls['slider_text']; ?></p>
								<a href="<?php echo $sls['slider_btn_link']; ?>" class="site-btn"><?php echo $sls['slider_btn_text']; ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach;?>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- Counter section  -->
<!-- 	<section class="counter-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-6">
					<div class="big-icon">
						<i class="fa fa-graduation-cap"></i>
					</div>
					<div class="counter-content">
						<h2>NEXT COUSRE: Sales & Marketing Alignment</h2>
						<p><i class="fa fa-calendar-o"></i>07:00 PM - 09:00 PM</p>
					</div>
				</div>
				<div class="col-lg-5 col-md-6">
					<div class="counter">
						<div class="counter-item"><h4>20</h4>Days</div>
						<div class="counter-item"><h4>08</h4>Hrs</div>
						<div class="counter-item"><h4>40</h4>Mins</div>
						<div class="counter-item"><h4>56</h4>secs</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Counter section end -->


	<!-- Services section -->
	<section class="service-section spad">
		<div class="container services">
			<div class="section-title text-center">
			<?php foreach($category_setup as $key=>$cs):?>	
				<?php if($cs['c_order']==1){ ?>
				<h3><?php echo $cs['c_title'];  ?></h3>
				<p><?php echo $cs['c_shortdesc']; }?></p>
			<?php endforeach; ?>
			</div>
			<div class="row">

				<?php foreach($home_content as $key=>$hc): ?>
					
				<?php if($hc['c_order']==1){ ?>
					<?php $count=0; ?>
				<div class="col-lg-4 col-sm-6 service-item">
					<div class="service-icon">
						<img src="<?php echo base_url(); ?>assets/img/services-icons/<?php echo $count+1; ?>.png" alt="1">
					</div>
					<div class="service-content">
						<h4><?php echo $hc['h_title'] ?></h4>
						<p><?php echo $hc['h_description'] ?></p>
					</div>
				</div>
			<?php $count++;}?>
				<?php endforeach; ?>



			<!-- <div class="col-lg-4 col-sm-6 service-item">
					<div class="service-icon">
						<img src="<?php echo base_url(); ?>assets/img/services-icons/1.png" alt="1">
					</div>
					<div class="service-content">
						<h4>Art Studio</h4>
						<p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 service-item">
					<div class="service-icon">
						<img src="<?php echo base_url(); ?>assets/img/services-icons/2.png" alt="1">
					</div>
					<div class="service-content">
						<h4>Great Facility</h4>
						<p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 service-item">
					<div class="service-icon">
						<img src="<?php echo base_url(); ?>assets/img/services-icons/3.png" alt="1">
					</div>
					<div class="service-content">
						<h4>Activity Hub</h4>
						<p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 service-item">
					<div class="service-icon">
						<img src="<?php echo base_url(); ?>assets/img/services-icons/4.png" alt="1">
					</div>
					<div class="service-content">
						<h4>Fully Qualified</h4>
						<p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 service-item">
					<div class="service-icon">
						<img src="<?php echo base_url(); ?>assets/img/services-icons/5.png" alt="1">
					</div>
					<div class="service-content">
						<h4>Flexible Schedule</h4>
						<p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 service-item">
					<div class="service-icon">
						<img src="<?php echo base_url(); ?>assets/img/services-icons/6.png" alt="1">
					</div>
					<div class="service-content">
						<h4>Chemistry Lab</h4>
						<p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
					</div>
				</div> -->
			</div>
		</div>
	</section>
	<!-- Services section end -->

	
	<!-- Enroll section -->
	<section class="enroll-section spad set-bg" data-setbg="<?php echo base_url(); ?>assets/img/enroll-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="section-title text-white">
							<?php foreach($category_setup as $key=>$cs):?>	
				<?php if($cs['c_order']==2){ ?>
				<h3><?php echo $cs['c_title'];  ?></h3>
				<p><?php echo $cs['c_shortdesc']; }?></p>
			<?php endforeach; ?>
					</div>
					<div class="enroll-list text-white">
						
				<?php foreach($home_content as $key=>$hc): ?>
					
				<?php if($hc['c_order']==2){ $count=0; ?>
						<div class="enroll-list-item">
							<span><?php echo $count; ?></span>
							<h5><?php echo $hc['h_title'] ?></h5>
							<p><?php  echo $hc['h_description']?></p>
						</div>
						<?php $count++;} endforeach; ?>

					
					</div>
				</div>
				<div class="col-lg-6 offset-lg-1 p-lg-0 p-4">
					<img src="<?php echo base_url(); ?>assets/img/encroll-img.jpg" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- Enroll section end -->


	<!-- Courses section -->
	<section class="courses-section spad">
		<div class="container">
			<div class="section-title text-center">
					<?php foreach($category_setup as $key=>$cs):?>	
				<?php if($cs['c_order']==3){ ?>
				<h3><?php echo $cs['c_title'];  ?></h3>
				<p><?php echo $cs['c_shortdesc']; }?></p>
			<?php endforeach; ?>
			</div>
			<div class="row">
				<!-- course item -->
				<?php foreach($home_content as $key=>$hc): ?>
					
				<?php if($hc['c_order']==3){ ?>

				<div class="col-lg-4 col-md-6 course-item">
					<div class="course-thumb">
						<img src="<?php echo base_url(); ?>assets/img/media/<?php echo $hc['cimage_name']; ?>" alt="<?php echo $hc['h_title'] ?>">
						<div class="course-cat">
							<span><?php echo $hc['h_title'] ?></span>
						</div>
					</div>
					<div class="course-info">
						<div class="date"><i class="fa fa-clock-o"></i> <?php $datehome=explode(" ",$hc['h_date']);

									echo $datehome[0];
								 ?></div>
						<h4><?php echo $hc['h_description'] ?></h4>
						<!-- <h4 class="cource-price">$100<span>/month</span></h4> -->
					</div>
				</div>
					<?php } endforeach; ?>

				<!-- course item -->
			
			</div>
		</div>
	</section>
	<!-- Courses section end-->


	<!-- Fact section -->
	<section class="fact-section spad set-bg" data-setbg="<?php echo base_url(); ?>assets/img/fact-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 fact">
					<div class="fact-icon">
						<i class="ti-crown"></i>
					</div>
					<div class="fact-text">
						<h2>50</h2>
						<p>YEARS</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 fact">
					<div class="fact-icon">
						<i class="ti-briefcase"></i>
					</div>
					<div class="fact-text">
						<h2>80</h2>
						<p>ACADEMIC PROGRAMS</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 fact">
					<div class="fact-icon">
						<i class="ti-user"></i>
					</div>
					<div class="fact-text">
						<h2>8000</h2>
						<p>STUDENTS</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 fact">
					<div class="fact-icon">
						<i class="ti-pencil-alt"></i>
					</div>
					<div class="fact-text">
						<h2>500+</h2>
						<p>COLLEGES</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Fact section end-->


	<!-- Event section -->
	<section class="event-section spad">
		<div class="container">
			<div class="section-title text-center">
					<?php foreach($category_setup as $key=>$cs):?>	
				<?php if($cs['c_order']==4){ ?>
				<h3><?php echo $cs['c_title'];  ?></h3>
				<p><?php echo $cs['c_shortdesc']; }?></p>
			<?php endforeach; ?>
			</div>
			<div class="row">
				
	<?php foreach($home_content as $key=>$hc): ?>
					
				<?php if($hc['c_order']==4){ ?>
				<div class="col-md-6 event-item">
					<div class="event-thumb">
						<img src="<?php echo base_url(); ?>assets/img/media/<?php echo $hc['cimage_name'] ?>" alt="<?php echo $hc['h_title'] ?>">
						<div class="event-date">
							<span><?php $datehome=explode(" ",$hc['h_date']);

									echo $datehome[0];
								 ?></span>
						</div>
					</div>
					<div class="event-info">
						<h4><?php echo $hc['h_title'] ?></h4>
						<p><i class="fa fa-calendar-o"></i> <?php $datehome=explode(" ",$hc['h_date']);

									echo $datehome[1];
								 ?><i class="fa fa-map-marker"></i> <?php echo $hc['h_location'] ?></p>
						<a href="" class="event-readmore">REGISTER <i class="fa fa-angle-double-right"></i></a>
					</div>
				</div>
<?php } endforeach; ?>

				<!-- <div class="col-md-6 event-item">
					<div class="event-thumb">
						<img src="<?php echo base_url(); ?>assets/img/event/2.jpg" alt="">
						<div class="event-date">
							<span>22 Mar 2018</span>
						</div>
					</div>
					<div class="event-info">
						<h4>University interview tips:<br>confidence won't make up for flannel</h4>
						<p><i class="fa fa-calendar-o"></i> 08:00 AM - 10:00 AM <i class="fa fa-map-marker"></i> Center Building, Block A</p>
						<a href="" class="event-readmore">REGISTER <i class="fa fa-angle-double-right"></i></a>
					</div>
				</div> -->
			</div>
		</div>
	</section>
	<!-- Event section end -->


<!-- 
0=gi-big
1=
2
3=gi-long
4=gi-big
5=gi-long
6=
7=
-->


	<!-- Gallery section -->
	<section class="gallery-section">
		<div class="section-title text-center">
					<?php foreach($category_setup as $key=>$cs):?>	
				<?php if($cs['c_order']==5){ ?>
				<h3><?php echo $cs['c_title'];  ?></h3>
				<p><?php echo $cs['c_shortdesc']; }?></p>
			<?php endforeach; ?>
			</div>
		<div class="gallery">
			<div class="grid-sizer"></div>
			
			<?php foreach($home_image_setup as $key=>$his): ?>
			<div class="gallery-item

<?php 

switch ($key) {
    case 0:
        echo "gi-big";
        break;
    case 3:
        echo "gi-long";
        break;
    case 4:
        echo "gi-big";
        break;
    case 5:
    	echo "gi-long";
    	break;
    default:
        
}



?>


			 set-bg" data-setbg="<?php echo base_url(); ?>assets/img/media/<?php echo $his['cimage_name'] ?>">
				<a class="img-popup" href="<?php echo base_url(); ?>assets/img/media/<?php echo $his['cimage_name'] ?>"><i class="ti-plus"></i></a>
			</div>
			<?php endforeach; ?>

			<!-- <div class="gallery-item set-bg" data-setbg="<?php echo base_url(); ?>assets/img/gallery/2.jpg">
				<a class="img-popup" href="<?php echo base_url(); ?>assets/img/gallery/2.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item set-bg" data-setbg="<?php echo base_url(); ?>assets/img/gallery/3.jpg">
				<a class="img-popup" href="<?php echo base_url(); ?>assets/img/gallery/3.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item gi-long set-bg" data-setbg="<?php echo base_url(); ?>assets/img/gallery/5.jpg">
				<a class="img-popup" href="<?php echo base_url(); ?>assets/img/gallery/5.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item gi-big set-bg" data-setbg="<?php echo base_url(); ?>assets/img/gallery/8.jpg">
				<a class="img-popup" href="<?php echo base_url(); ?>assets/img/gallery/8.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item gi-long set-bg" data-setbg="<?php echo base_url(); ?>assets/img/gallery/4.jpg">
				<a class="img-popup" href="<?php echo base_url(); ?>assets/img/gallery/4.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item set-bg" data-setbg="<?php echo base_url(); ?>assets/img/gallery/6.jpg">
				<a class="img-popup" href="<?php echo base_url(); ?>assets/img/gallery/6.jpg"><i class="ti-plus"></i></a>
			</div>
			<div class="gallery-item set-bg" data-setbg="<?php echo base_url(); ?>assets/img/gallery/7.jpg">
				<a class="img-popup" href="<?php echo base_url(); ?>assets/img/gallery/7.jpg"><i class="ti-plus"></i></a>
			</div> -->
		</div>
	</section>
	<!-- Gallery section -->


	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="section-title text-center">
					<?php foreach($category_setup as $key=>$cs):?>	
				<?php if($cs['c_order']==6){ ?>
				<h3><?php echo $cs['c_title'];  ?></h3>
				<p><?php echo $cs['c_shortdesc']; }?></p>
			<?php endforeach; ?>
			</div>
			<div class="row">
				<?php foreach($home_content as $key=>$hc): ?>
					<?php if($hc['c_order']==6){ ?>
				<div class="col-xl-6">
					<div class="blog-item">
						<?php if($hc['c_order']==6)?>
						<div class="blog-thumb set-bg" data-setbg="<?php echo base_url(); ?>assets/img/media/<?php echo $hc['cimage_name']; ?>"></div>
						<?php ?>
						<div class="blog-content">
							<h4><?php echo $hc['h_title'] ?></h4>
							<div class="blog-meta">
								<span><i class="fa fa-calendar-o"></i> <?php $datehome=explode(" ",$hc['h_date']);

									echo $datehome[0];
								 ?></span>
								<span><i class="fa fa-user"></i> <?php echo ucfirst($hc['h_author']); ?></span>
							</div>
							<p><?php echo $hc['h_description']; ?></p>
						</div>
					</div>
				</div>
			<?php }?>
			<?php endforeach; ?>
			<!-- 	<div class="col-xl-6">
					<div class="blog-item">
						<div class="blog-thumb set-bg" data-setbg="<?php echo base_url(); ?>assets/img/blog/2.jpg"></div>
						<div class="blog-content">
							<h4>Graduations could be delayed as external examiners</h4>
							<div class="blog-meta">
								<span><i class="fa fa-calendar-o"></i> 23 Mar 2018</span>
								<span><i class="fa fa-user"></i> Owen Wilson</span>
							</div>
							<p>Integer luctus diam ac scerisque consectetur. Vimus dot euismod neganeco lacus sit amet. Aenean interdus mid vitae sed accumsan...</p>
						</div>
					</div>
				</div> -->
				<!-- <div class="col-xl-6">
					<div class="blog-item">
						<div class="blog-thumb set-bg" data-setbg="<?php echo base_url(); ?>assets/img/blog/3.jpg"></div>
						<div class="blog-content">
							<h4>Private schools adopt a Ucas style application system</h4>
							<div class="blog-meta">
								<span><i class="fa fa-calendar-o"></i> 24 Mar 2018</span>
								<span><i class="fa fa-user"></i> Owen Wilson</span>
							</div>
							<p>Integer luctus diam ac scerisque consectetur. Vimus dot euismod neganeco lacus sit amet. Aenean interdus mid vitae sed accumsan...</p>
						</div>
					</div>
				</div> -->
				<!-- <div class="col-xl-6">
					<div class="blog-item">
						<div class="blog-thumb set-bg" data-setbg="<?php echo base_url(); ?>assets/img/blog/4.jpg"></div>
						<div class="blog-content">
							<h4>Cambridge digs in at the top of university league table</h4>
							<div class="blog-meta">
								<span><i class="fa fa-calendar-o"></i> 23 Mar 2018</span>
								<span><i class="fa fa-user"></i> Owen Wilson</span>
							</div>
							<p>Integer luctus diam ac scerisque consectetur. Vimus dot euismod neganeco lacus sit amet. Aenean interdus mid vitae sed accumsan...</p>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</section>
	<!-- Blog section -->


	<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-lg-7">
					<div class="section-title mb-md-0">
						<?php foreach($category_setup as $key=>$cs):?>	
				<?php if($cs['c_order']==7){ ?>
				<h3><?php echo $cs['c_title'];  ?></h3>
				<p><?php echo $cs['c_shortdesc']; }?></p>
			<?php endforeach; ?>
				</div>
				</div>
				<div class="col-md-7 col-lg-5">
					<form class="newsletter">
						<input type="text" placeholder="Enter your email">
						<button class="site-btn">SUBSCRIBE</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Newsletter section end -->	
