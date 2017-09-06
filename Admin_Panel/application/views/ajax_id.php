<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Ajax checking</title>
		
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
 <script type="text/javascript">
$(document).ready(function() {
$(".pak").click(function() {
 var id = $(this).attr('id');
//data : {"id":id}
alert(id);
$.ajax({
type: 'POST',
url: '<?php echo base_url('ajax_check/store_div_data'); ?>',
 data : {"id":id},
 //contentType: "application/json; charset=utf-8",
dataType: 'json',


complete: function(result) {
	//console.log(result);
	if(result)
		{
			//alert (result);
    $('#result1').html(result.responseText);
}
else 
alert('fail');
}
});
});
});


</script>
</head>

<body> 

<div class="container">
<div id="helo" class="pak" style="color:#0000FF"> this is div</div>
<label>This is result div</label>
    <div id="result1"></div>
      
</div>

</body>
</html>