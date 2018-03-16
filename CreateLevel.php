<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "randomfinal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT rno, levelno, majorno FROM room";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "rno: " . $row["rno"]. "levelno: " . $row["levelno"]. " - majorno: " . $row["majorno"]. "<br>";

    }
} else {
	$result = count($row);
    //echo "0 results";
    //echo "$result";
}
$conn->close();
?>