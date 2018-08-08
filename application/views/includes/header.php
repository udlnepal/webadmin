<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>
<?php foreach ($header_title_setup as $ht_item): ?>
		<?php echo $ht_item['site_title']; ?>
			<?php endforeach; ?>
		</title>

	<meta charset="UTF-8">
	<meta name="description" content="Purbanchal University">
	<meta name="keywords" content="event, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="<?php echo base_url(); ?>assets/img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/themify-icons.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css"/>
	  <script src="<?php echo base_url();?>assets/libs/jquery/dist/jquery.min.js"></script>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>