	<?php
function dbConn(){
	$servername = "localhost";
	$username = "root";
	$password = "";
	//$db="mca";
	$db="sjcsdb";

	static $conn;
	$conn = mysqli_connect($servername, $username, $password,$db);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	  }
		return $conn;
	}
?>