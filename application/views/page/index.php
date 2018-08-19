<?php 

$seg1= $this->uri->segment(1);
?>

<?php echo $seg1=='about'?'class="active"':'';?>
<a href="<?php echo site_url('page/about'); ?>">Click</a>