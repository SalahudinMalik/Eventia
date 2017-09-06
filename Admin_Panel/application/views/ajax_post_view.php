<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Ajax checking2</title>
	
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		  <script type="text/javascript">
      $(document).ready(function() {

			$("#save").click(function(event){
         event.preventDefault();

    var formData = new FormData($("#data")[0]);
     
    $.ajax({
        url: '<?php echo base_url('ajax_post_controller/user_data_submit'); ?>',
        type: 'POST',
        data: formData,
       // async: false,
         contentType: false,
        processData: false,
        success: function (msg) {
        
          if(msg)
            //  $('#result').html(result.responseText);
        alert(msg);

        },
       // cache: false,
       
    });

});
    });
		</script>
    </head>
    <body>
<form id="data" method="post" enctype="multipart/form-data">
    <input type="text" name="first" value="Bob" />
    <input type="text" name="middle" value="James" />
    <input type="text" name="last" value="Smith" />
     <input id="inputFile3" type="file" multiple="">
                               <?php echo form_upload(['name'=>'userfile','class'=>'form-control','placeholder'=>'Upload Image']);?>
    <div id="result"></div>
    <button id="save">Submit</button>
</form>
</body>
</html>