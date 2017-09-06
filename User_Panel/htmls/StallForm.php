


<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend style="padding-left : 4cm;">Book Stall</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>
 
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="emailaddress">Email Address</label>  
  <div class="col-md-4">
  <input id="emailaddress" name="emailaddress" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">Phone Number</label>  
  <div class="col-md-4">
  <input id="phone" name="phone" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="tourselection">Event Name</label>
  <div class="col-md-4">
    <select id="tourselection" name="tourselection" class="form-control">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$databaseName="ifisolco_attendo_events";

// Create connection
$conn = new mysqli($servername, $username, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
$sql = "SELECT `event_name` FROM `event`";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo '<option value="'.$row['event_name'].'">'.$row['event_name'].'</option>';
    }

} else {
    echo "Error else";
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!-- Select Basic -->

      
    </select>
  </div>
</div>





</fieldset>
</form>