<?php

$servername = "LocalHost";
$username = "Username";
$password = "Password";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
	die("Connection Failed: " . $conn->connect_error);
}

echo "Connected Successfully";

?>