<html>
<<head>
	<meta charset="utf-8">
	<title> upload Image</title>
</head>
<body>
<div id="container">
 
<?php echo  form_open_multipart('upload_image/uploadImage')?>
 
<?php echo "<input type='file' name='userfile' size='20' />"; ?>
 <?php echo $p= $up['raw_name'].$up['file_ext'];?>
<p><input type="submit" name="submit" value="submit" /></p>
<div class="event-image"><img  class="img-responsive" alt="" src="<?=base_url()?>pictures/<?=$p?>"></div>
 
<?php echo form_close();?>
 
</div>
</body>
</html>