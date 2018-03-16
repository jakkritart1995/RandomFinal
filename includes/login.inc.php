<?php
session_start();
include("dbh.inc.php");
$username = $_POST['username'];
$passwords = ($_POST['passwords']);

if ($username == '') {
	echo "Check Username";
} else if ($passwords == '') {
	echo "Check Passwords";
} else {

	$sql = mysql_query("SELECT * FROM teacher WHERE username = '$username' AND passwords = '$passwords' ");

	$num = mysql_num_rows($sql);
	if ($num <= 0) {
		echo "<meta http-equiv='refresh' content='1;URL=index.php'>";
	} else {
		while ($user = mysql_fetch_array($sql)) {
			
			if ($user['status'] == 1 ) 
			{
				$_SESSION['ses_id'] = session_id();
				$_SESSION['username'] = $user['username'];
				$_SESSION['status'] = 1;
				echo "<meta http-equiv='refresh' content='1;URL=admin1.php'>";
			} else if ($user['status'] == 2 ) 
			{
				$_SESSION['ses_id'] = session_id();
				$_SESSION['username'] = $user['username'];
				$_SESSION['status'] = 2;
				echo "<meta http-equiv='refresh' content='1;URL=admin2.php'>";
			} else if ($user['status'] == 3 ) 
			{
				$_SESSION['ses_id'] = session_id();
				$_SESSION['username'] = $user['username'];
				$_SESSION['status'] = 3;
				echo "<meta http-equiv='refresh' content='1;URL=admin3.php'>";
			}

		}
	}
}
?>