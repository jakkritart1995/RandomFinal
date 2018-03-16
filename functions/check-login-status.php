<?php 

if( ! (
	isset($_SESSION['ses_id']) && 
	isset($_SESSION['username']) && 
	isset($_SESSION['status']) )
) {
	header( "location: index.php" );
	die();
} 

?>