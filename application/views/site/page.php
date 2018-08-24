	
	<div class="site-breadcrumb">


		<div class="container">
			<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
	<span>

		<?php foreach($menu_setup as $mn): 
	if($mn['slug']==$this->uri->segment(3)){

	echo $mn['menu_name'];
}

endforeach;
	?></span> 
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- Courses section -->
	<section class="full-courses-section spad pt-0">
		<div class="container">
			<?php  foreach($menu_setup as $mn): 
	if($mn['slug']==$this->uri->segment(3)){ ?>
			<div class="row">
				<h3><?php echo $mn['page_title']; ?></h3>
				<div class="col-lg-12">
					
		
					<?php 	 echo $mn['page_content']; ?>
					
					
				</div>
			</div>
			<?php }
					endforeach; ?>
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