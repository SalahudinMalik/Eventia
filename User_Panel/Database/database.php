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
	$sql = "SELECT * FROM `event` WHERE `event_category` = 'Public'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["event_id"]. " - event_name: " . $row["event_name"]. "  Location:" . $row["event_location"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
}
?> 