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
$('#helo').click(function() {
var fname=$('#fname').val();
//alert(fname);
$.ajax({
type: 'POST',
url: '<?php echo base_url('ajax_check/store_data'); ?>',
data: {fname: fname},
 //contentType: "application/json; charset=utf-8",
dataType: 'json',


complete: function(result) {
	console.log(result);
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

<input type="text" id="fname">
<input type="button" value="hello" id="helo"><br>
    <div id="result1"></div>
      
</div>

</body>
</html>