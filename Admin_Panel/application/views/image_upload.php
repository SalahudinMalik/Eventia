<html>
<<head>
	<meta charset="utf-8">
	<title> upload Image</title>
	 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?= base_url('org_assessts/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('org_assessts/css/material-kit.css');?>">
    <link rel="stylesheet" href="<?= base_url('org_assessts/css/jquery.dropdown.css');?>">
    <link rel="stylesheet" href="<?= base_url('org_assessts/css/styles.css');?>">
    <link rel="stylesheet" href="<?= base_url('org_assessts/css/jquery.custom-scrollbar.css');?>">
    <link rel="stylesheet" href="<?= base_url('org_assessts/css/styles.css.map');?>">

    <script src="https://use.fontawesome.com/04626764e6.js"></script>
</head>
<body>
  <div class="form-group">
                            <div class="input-group"><span class="input-group-addon"><i class="material-icons">add_a_photo</i></span>
                              
                               <?php echo form_upload(['name'=>'userfile','class'=>'form-control','placeholder'=>'Upload Image','onchange'=>'readURL(this)']);?><span class="material-icons form-control-feedback">clear</span>
                          
                            </div> 
                            </div>

 

 <!--<input type='file' onchange="readURL(this);" />-->
    <img id="blah" src="#" alt="your image" />

</body>
</html>