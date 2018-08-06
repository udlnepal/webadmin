<html>
<head>
<title>Upload Form</title>
</head>
<body>

<h3>Your file was successfully uploaded!</h3>


<?php 
echo $upload_data['file_name'];

?>

<p><?php echo anchor('upload', 'Upload Another File!'); ?></p>

</body>
</html>