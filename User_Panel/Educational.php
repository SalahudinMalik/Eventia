<?php include_once('header.php');?>
<?php include_once('navigation.php');?>
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

	$sql = "SELECT * FROM `event` WHERE `event_type_id` = 4";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["event_id"]. " - event_name: " . $row["event_name"]. "  Location:" . $row["event_location"]. "<br>";
        echo '<section class="new-deal">';
		 echo'<div class="container">';
		   	
				//echo '<p>'.$row["photo"].'</p>';
				echo'<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 deal">';
					
				echo'<div class="item-slide">';
						echo'<div class="box-img">';
						
						echo'<img src="../Attendo/'.$row["photo"].'" class="img-responsive" alt="dasdas"/>';
							echo'<div class="text-wrap">';

					echo'<h4> '.$row["event_location"].' <span class="deal-data"><span class="glyphicon glyphicon-calendar"></span> '.$row["event_date"].' </span></h4>';
								echo'<div class="desc">';
								//echo '<input type="hidden" name="eventid" value='.$row["event_id"].' id="inputName">';
									echo'<span>Starting at '.$row["event_start_time"].'</span>';
									echo'<h4>'.$row["event_name"].'</h4>';
								echo'</div>';
								echo '<div class="book-now-c"> ';
								echo '<a href="#" >Detail </a>';
								echo '</div>';
							echo'</div>';
							
						echo'</div>';
						echo'<div class="slide-hover">';
						echo'<div class="text-wrap">';
						echo'<p>'.$row["event_description"].'</p>';
						//$row = $result->fetch_assoc();
						echo'<h4>'.$row["event_location"].'<span class="deal-data"><span class="glyphicon glyphicon-calendar"></span> '.$row["event_date"].'</span></h4>';
								echo'<div class="desc">';
									echo'<span>Starting at '.$row["event_start_time"].'</span>';
									echo'<h4>'.$row["event_name"].'</h4>';
								echo'</div>';
								echo'<div class="book-now-c">';
								echo'<a href="detail.php?eventid='.$row["event_id"].'"   type="submit"> Detail </ a>';
								echo'</div>';
							echo'</div>';
						echo'</div>';
				echo'</div>';
			echo'</div>';
			


				$row = $result->fetch_assoc();
				if($row != null){
				echo'<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 deal">';
				echo'<div class="item-slide">';
						echo'<div class="box-img">';
						echo'<img src="../Attendo/'.$row["photo"].'" class="img-responsive" alt="dasdas"/>';
						echo'<div class="text-wrap">';

						echo'<h4> '.$row["event_location"].' <span class="deal-data"><span class="glyphicon glyphicon-calendar"></span> '.$row["event_date"].'</span></h4>';
								echo'<div class="desc">';
								//echo '<input type="hidden" name="eventid" value='.$row["event_id"].' id="inputName">';
									echo'<span>Starting at '.$row["event_start_time"].'</span>';
									echo'<h4>'.$row["event_name"].'</h4>';
								echo'</div>';
								echo '<div class="book-now-c"> ';
									echo '<a href="#" >Detail </a>';
								echo '</div>';
							echo'</div>';
							
						echo'</div>';
						echo'<div class="slide-hover">';
						echo'<div class="text-wrap">';
						echo'<p>'.$row["event_description"].'</p>';
						echo'<h4>'.$row["event_location"].'<span class="deal-data"><span class="glyphicon glyphicon-calendar"></span> '.$row["event_date"].'</span></h4>';
								echo'<div class="desc">';
									echo'<span>Starting at '.$row["event_start_time"].'</span>';
									echo'<h4>'.$row["event_name"].'</h4>';
								echo'</div>';
								echo'<div class="book-now-c">';
								echo'<a href="detail.php?eventid='.$row["event_id"].'"   type="submit"> Detail </a>';
								echo'</div>';
							echo'</div>';
						echo'</div>';
				echo'</div>';
			echo'</div>';
			


		};
				$row = $result->fetch_assoc();
				if($row != null){
				echo'<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 deal">';
				echo'<div class="item-slide">';
						echo'<div class="box-img">';
						echo'<img src="../Attendo/'.$row["photo"].'" class="img-responsive" alt="dasdas"/>';
						echo'<div class="text-wrap">';

						echo'<h4> '.$row["event_location"].' <span class="deal-data"><span class="glyphicon glyphicon-calendar"></span> '.$row["event_date"].'</span></h4>';
								echo'<div class="desc">';
								//echo '<input type="hidden" name="eventid" value='.$row["event_id"].' id="inputName">';
									echo'<span>Starting at '.$row["event_start_time"].'</span>';
									echo'<h4>'.$row["event_name"].'</h4>';
								echo'</div>';
								echo '<div class="book-now-c"> ';
									echo '<a href="#" >Detail </a>';
								echo '</div>';
							echo'</div>';
							
						echo'</div>';
						echo'<div class="slide-hover">';
						echo'<div class="text-wrap">';
						echo'<p>'.$row["event_description"].'</p>';
						//$row = $result->fetch_assoc();
						echo'<h4>'.$row["event_location"].'<span class="deal-data"><span class="glyphicon glyphicon-calendar"></span> '.$row["event_date"].'</span></h4>';
								echo'<div class="desc">';
									echo'<span>Starting at '.$row["event_start_time"].'</span>';
									echo'<h4>'.$row["event_name"].'</h4>';
								echo'</div>';
								echo'<div class="book-now-c">';
							
								echo'<a href="detail.php?eventid='.$row["event_id"].'"   type="submit"> Detail </a>';
								echo'</div>';
							echo'</div>';
						echo'</div>';
				echo'</div>';
			echo'</div>';
				};
		echo' </div>';
		 echo'</section>';
    }
} else {
    echo "0 results";
}
$conn->close();
}




?> 


  


		






















