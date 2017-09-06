<?php
 
 
function Connect()
{
$servername = "localhost";
$username = "root";
$password = "";
$databaseName="neweventia";
 
 // Create connection
 $conn = new mysqli($servername, $username, $password, $databaseName) or die($conn->connect_error);
 
 return $conn;
}
 
?>