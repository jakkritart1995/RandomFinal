<?php
$con= mysqli_connect("localhost","root","","randomfinal") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' "); 
if ($con) {
	echo "ผ่าน";
}else {
	echo"บ่";
}
?>