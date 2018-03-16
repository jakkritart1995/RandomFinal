<?php
session_start();
include("connect.php");
$username = $_POST['username'];
$passwords = ($_POST['passwords']);

if ($username == '') { ?>
	<script>
 	alert('กรุณากรอก username');
	</script>
	<?php
	echo "<meta http-equiv='refresh' content='0;URL=index.php'>"
	?>
	<?php
} else if ($passwords == '') { ?>
	<script>
 	alert('กรุณากรอก passwords');
	</script>
	<?php
	echo "<meta http-equiv='refresh' content='0;URL=index.php'>"
	?>
	<?php
} else {

	$sql = mysql_query("SELECT * FROM teacher WHERE username = '$username' AND passwords = '$passwords' ");

	$num = mysql_num_rows($sql);
	if ($num <= 0) { ?>
				<script>
			 	alert('passwords ไม่ถูกต้อง');
				</script>
				<?php
				echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
	} else {
		while ($user = mysql_fetch_array($sql)) {
			if ($user) {
				$_SESSION['ses_id'] = session_id();
				$_SESSION['username'] = $user['username'];
				$_SESSION['status'] = $user['status'];
				header( "location: admin". $user['status'] .".php" );
 				exit(0);
			} else { ?>
				<script>
			 	alert('ข้อมูลไม่ถูกค้อง');
				</script>
				<?php
				echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
			}

		}
	}
}
?>