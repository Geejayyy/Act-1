<?php
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "jj";

	$FirstName = $_POST['First'];
	$LastName = $_POST['Last'];
	$Gender = $_POST['Gender'];
	$DateOfBirth = $_POST['Date'];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO dbdata VALUES('$FirstName','$LastName','$Gender','$DateOfBirth')";
	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>