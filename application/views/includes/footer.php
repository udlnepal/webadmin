	<!-- Footer section -->
	<footer class="footer-section">
	<!-- 	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28518.469130446105!2d87.34371380241961!3d26.686601906984546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef68cc0bb8220b%3A0xa6d5c5bec3773ef4!2sPurbanchal+University+College+of+Medical+and+Allied+Science!5e0!3m2!1sen!2snp!4v1532858068951" width="1349" height="454" frameborder="0" style="border:0" allowfullscreen></iframe> -->
		<div class="container footer-top">
			<div class="row">
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<div class="about-widget">
						<div style="margin-top:10px;">
						<img src="<?php echo base_url(); ?>assets/img/logo.png" alt="purbanchal university" style="max-height:26px; background: #fff;float:left; border-radius: 50%;">
						<h6 class="pull-left" style="color:#fff; margin-left:10px;"><?php foreach ($header_title_setup as $ht_item): ?>
		<?php echo $ht_item['site_title']; ?>
			<?php endforeach; ?></h6>
						</div>
						<div class="clearfix"></div>
						<p>Lorem ipsum dolor sit amet, consecter adipiscing elite. Donec minos varius, viverra justo ut, aliquet nisl.</p>
						<div class="social pt-1">
							<a href=""><i class="fa fa-twitter-square"></i></a>
							<a href=""><i class="fa fa-facebook-square"></i></a>
							<a href=""><i class="fa fa-google-plus-square"></i></a>
							<a href=""><i class="fa fa-linkedin-square"></i></a>
							<a href=""><i class="fa fa-rss-square"></i></a>
						</div>
					</div>
				</div>
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<h6 class="fw-title">USEFUL LINK</h6>
					<div class="dobule-link">
						<ul>
									<?php foreach($menu_setup as $key=>$mn_st): ?>
					<li><a href="<?php 

					if ($mn_st['is_inner_page']=="yes"){
					echo base_url('site/page/');?><?php echo $mn_st['slug'];
					
					}
					elseif($mn_st['is_inner_page']=="no"){
						echo base_url();echo"#";echo $mn_st['slug'];
					}
					else{
						
						echo $mn_st['ext_url'];
					}

					?>"

					<?php 
						if($mn_st['is_inner_page']=="ext"){
							echo "target=\"_blank\"";
						}
					?>	
					><?php echo $mn_st['menu_name']; ?></a></li>
				<?php endforeach; ?>
						</ul>
						<ul>
							<li><a href="">Policy</a></li>
							<li><a href="">Term</a></li>
							<li><a href="">Help</a></li>
							<li><a href="">FAQs</a></li>
							<li><a href="">Site map</a></li>
						</ul>
					</div>
				</div>
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<h6 class="fw-title">RECENT POST</h6>
					<ul class="recent-post">
						<li>
							<p>Snackable study:How to break <br> up your master's degree</p>
							<span><i class="fa fa-clock-o"></i>24 Mar 2018</span>
						</li>
						<li>
							<p>Open University plans major <br> cuts to number of staff</p>
							<span><i class="fa fa-clock-o"></i>24 Mar 2018</span>
						</li>
					</ul>
				</div>
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<h6 class="fw-title">CONTACT</h6>
					<?php foreach($contact_setup as $key=>$csdata) ?>
					<ul class="contact">
						<li><p><i class="fa fa-map-marker"></i><?php echo $csdata['address'] ?></p></li>
						<li><p><i class="fa fa-phone"></i><?php echo $csdata['phone'] ?></p></li>
						<li><p><i class="fa fa-envelope"></i> <?php echo $csdata['email'] ?></p></li>
						<li><p><i class="fa fa-clock-o"></i> <?php echo $csdata['opening_hours'] ?></p></li>
					</ul>

				</div>
			</div>
		</div>
		<!-- copyright -->
		<div class="copyright">
			<div class="container">
				<p>&copy; Unique Developers Lab</p>
			</div>		
		</div>
	</footer>
	<!-- Footer section end-->



	<!--====== Javascripts & Jquery ======-->
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.countdown.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/masonry.pkgd.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/magnific-popup.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
	
</body>
</html>