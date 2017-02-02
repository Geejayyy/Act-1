<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "jj";
$data = array();
//$i = 0;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$i=0;

$sql = "SELECT * from dbdata";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	
       	$data[$i] = $row["FirstName"];
		$data[$i] = $row["LastName"];
		$data[$i] = $row["Gender"];
		$data[$i] = $row["DateOfBirth"];
		
		$i++;
		
		}
} else {
    echo "0 results";
}
$conn->close();
?>

