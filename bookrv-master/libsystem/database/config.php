<?php
	$conn = mysqli_connect('localhost', 'root', '', 'bookrv');

	// Check connection
	if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "CREATE DATABASE IF NOT EXISTS bookrv";

	if ($conn->query($sql) === FALSE)
	{
		return true;
	}
?>