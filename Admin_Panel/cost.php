<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="mycss.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src = "JS/basic.js"></script>
<br/>
 <?php
 
 $servername = "localhost";
$username = "root";
$password = "";
$databaseName="neweventia";

// Create connection
$conn = new mysqli($servername, $username, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {

	//$sql = "SELECT * FROM `event` WHERE `event_location` = 'Lahore'";
   echo ' <div class="container">';
	echo '<div class="row">';
	echo '<form class="form-horizontal" action="#" method="post" >';
echo '<fieldset>';

echo '<!-- Form Name -->';
echo '<legend>Cost Prediction</legend>';


echo '<div class="form-group">';

 echo ' <label class="col-md-4 control-label" for="tourselection">Event Name</label>';
 echo ' <div class="col-md-4">';
 echo '   <select id="select_catalog" name="select_catalog" class="form-control">';
    $sql = "SELECT `event_name` FROM `event`";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo '<option value="'.$row['event_name'].'">'.$row['event_name'].'</option>';
    }
    }


      
    echo '</select> ';
  echo ' </div> ';
echo '</div> ';
echo '<!-- Text input-->';
echo '<div class="form-group">';
  echo '<label class="col-md-4 control-label" for="name">Number of Seats</label>';  
  echo '<div class="col-md-4">';
 echo ' <input id="seats" name="seats" type="number" placeholder="" class="form-control input-md" required="">';    
  echo '</div>';
echo '</div>';

echo '<div class="form-group">';

 echo ' <label class="col-md-4 control-label" for="tourselection">Event Name</label>';
 echo ' <div class="col-md-4">';
 echo '   <select id="select_city" name="select_catalog" class="form-control">';
   
    echo '<option value="Islamabad">Islamabad</option>';
  	echo '<option value="Karachi">Karachi</option>';
  	echo '<option value="Lahore">Lahore</option>';
  

      
    echo '</select> ';
  echo ' </div> ';
echo '</div> ';









echo '</form>';
echo '<button  style="float : right; margin-right: 10cm;" onclick="fun()" type="submit" class="btn btn-primary btn-primary">Submit</button>';
//echo '<a href="" style="float : right; margin-right: 10cm;" class="btn btn-primary btn-primary">Submit</a>';

	echo '</div>';
echo '</div>';
}
$conn->close();





?> 


  


		









<?php 
require 'dbConn.php';
$conn = Connect();
//$name    = $conn->real_escape_string($_POST['name']);
//$contact   = $conn->real_escape_string($_POST['pcontact']);
//$email    = $conn->real_escape_string($_POST['email']);
//$eventname = $conn->real_escape_string($_POST['select_catalog']);
if(isset($_POST['name']) &&isset($_POST['pcontact'])&& isset($_POST['email'])&& isset($_POST['select_catalog'])){
$name = $_POST["name"];
$contact = $_POST["pcontact"];
$email = $_POST["email"];
$eventname = $_POST["select_catalog"];
$query   = "INSERT into stallbook (sName,sPhone,sEmail,sEvent) VALUES('" . $name . "','" . $contact . "','" . $email . "','" . $eventname . "')";
$success = $conn->query($query);
if(!$success){
    die("Couldn't enter data " .$conn->error);
}
echo "<script> alert('Thanks you for your concern\.');  </script>";
$conn->close();
}
else{
   // echo 'Please Enter All Fields';
}
 ?>

