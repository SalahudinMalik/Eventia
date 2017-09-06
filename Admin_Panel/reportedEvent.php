<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="bodycss.css">
<link rel="stylesheet" href="mycss.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src = "JS/basic.js"></script>

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
	echo'<div class="container">';
	echo'<div class="row">';
		echo'<h2>Reported Events</h2>';
		
		echo'<table class="points_table">';
			echo'<thead>';
				echo'<tr>';
					echo'<th class="col-xs-2">ID</th>';
					echo'<th class="col-xs-3">Event Name</th>';
					echo'<th class="col-xs-3">Description</th>';
					echo'<th class="col-xs-3">Type</th>';
				echo'</tr>';
			echo'</thead>';
		echo'<tbody class="points_table_scrollbar">';	
	$esql = "SELECT * FROM `report`";
	$rresult = $conn->query($esql);
	if($rresult->num_rows>0)
	{
		while ($rrow = $rresult->fetch_assoc()) {
			//echo '<p> '.$rrow["rEventID"].' </p>';
			$sql = "SELECT * FROM `event` WHERE event_id = ".$rrow["rEventID"]." ";
			$result = $conn->query($sql);
			if($row = $result->fetch_assoc())
			{
				echo'<tr class="odd">';
					echo'<td class="col-xs-2">'.$rrow["rID"].'</td>';
					echo'<td class="col-xs-3">'.$row["event_name"].'</td>';
					echo'<td class="col-xs-3">'.$rrow["rComment"].'</td>';
					echo'<td class="col-xs-3">'.$rrow["rType"].'</td>';
				echo'</tr>';
			}
			elseif($row = $result->fetch_assoc()){
			echo'<tr class="even">';
					echo'<td class="col-xs-2">'.$rrow["rID"].'</td>';
					echo'<td class="col-xs-3">'.$row["event_name"].'</td>';
					echo'<td class="col-xs-3">'.$rrow["rComment"].'</td>';
					echo'<td class="col-xs-3">'.$rrow["rType"].'</td>';
				echo'</tr>';
			}
		}
		

	}
	else{
		echo "0 result";
	}
	echo'</tbody>';
		echo'</table>';
	echo'</div>';
echo'</div>';

	
	//$eid = 

	//$result = $conn->query($sql);
	//if ($result->num_rows > 0) {
    // output data of each row
    //while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["event_id"]. " - event_name: " . $row["event_name"]. "  Location:" . $row["event_location"]. "<br>";
        

$conn->close();
}
?>