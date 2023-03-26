<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "biometricattendace";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}


?>