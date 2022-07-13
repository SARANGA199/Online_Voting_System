<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "online_voting_system";

$conn = new mysqli($serverName,$userName,$password,$dbName);

if ($conn->connect_error) {
 die("Connection failed: ".$conn->connect_error);
}else{
echo "<script>alert('Connected successfully');</script>";
}

?>