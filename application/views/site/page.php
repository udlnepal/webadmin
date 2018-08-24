	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
	<?php foreach($menu_setup as $mn_set): ?>		<span><?php echo $mn_set['page_title']; ?></span> <?php endforeach; ?>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- Courses section -->
	<section class="full-courses-section spad pt-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<?php foreach ($menu_setup as $mn_set):?>
						<?php echo $mn_set['page_content'] ?>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="text-center">
				<ul class="site-pageination">
					<li><a href="#" class="active">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
				</ul>
			</div>
		</div>
	</section>
	<!-- Courses section end-->