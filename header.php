<?php

			$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
			$objDB = mysql_select_db("randomfinal");

            
?>

<!DOCTYPE html>
	<html>
		<head>
			<link rel="stylesheet" type="text/css" href="style.css">
			<title>Random Final</title>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />		
			<meta charset="UTF-8">

			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

			<!-- Optional theme -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

			<!-- Latest compiled and minified JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
			
			
		</head>
		<body>

			
		<header>
			<nav>
				<div class="main-wrapper">
					<ul>
						<li><h3>ระบบออนไลน์จัดตารางสอบแบบสุ่มฟิชเชอร์ – เยตส์</h3></li>
						<!--<li><a href="Header-Register.php">ฝ่ายทะเบียน</a>&nbsp;&nbsp;&nbsp;</li>
						<li><a href="Header-Academic.php">ฝ่ายวิชาการ</a>&nbsp;&nbsp;&nbsp;</li>
						<li><a href="Header-LT.php">ฝ่ายการเรียนการสอน</a>&nbsp;&nbsp;&nbsp;</li>
						<li><a href="Header-Couse.php">ฝ่ายหลักสูตร</a>&nbsp;&nbsp;&nbsp;</li>
						<li><a href="Header-Teacher.php">สำหรับคุณครู</a>&nbsp;&nbsp;&nbsp;</li>
						<li><a href="Header-Student.php">สำหรับนักเรียน</a>&nbsp;&nbsp;&nbsp;</li>-->

					</ul>
					<div class="nav-login">
						<?php if (isset($_SESSION['username'])): ?>

							<form action="logout.php" method="POST"><b>ผู้ใช้งาน : </b><?php echo $_SESSION['username'];?>&nbsp;&nbsp;
								<button type="submit" name="submit" class="btn btn-danger">LogOut</button>
							</form>;
								
						<?php else: ?>

							<form action="index.php" method="POST"><img src = "Images/Lock-icon.png" width='120' border="0">
								<input type="text" name="username" placeholder="username / email">
								<input type="password" name="passwords" placeholder="password">
								<button class="btn btn-primary" type="submit" name="submit">LogIn</button>&nbsp;&nbsp;&nbsp;
							</form>
							<a href="signup.php">Sign Up</a>;

						<?php endif; ?>
						
					</div>

				</div>
			</nav>
		</header>
	</body>


<script language="JavaScript" type="text/JavaScript">
function check_key_number() {
use_key=event.keyCode
if (use_key != 13 && (use_key < 48) || (use_key > 57)) {
event.returnValue = false;
}
}
</script>

<script type="text/javascript">
    function checkfontnumber()
    {
        var elem = document.getElementById('username').value;
        if(!elem.match(/^([a-z0-9\_])+$/i))
        {
            alert("กรอกได้เฉพาะ a-Z, A-Z, 0-9 และ _ (underscore)");
            document.getElementById('username').value = "";
        }
    }
</script>
<script type="text/javascript">
    function checkfont()
    {
        var elem = document.getElementById('username').value;
        if(!elem.match(/^([a-z\_])+$/i))
        {
            alert("กรอกได้เฉพาะ a-Z, A-Z)");
            document.getElementById('username').value = "";
        }
    }
</script>
<script type="text/javascript">
    function checknumber()
    {
        var elem = document.getElementById('rno').value;
        if(!elem.match(/^([0-9\_])+$/i))
        {
            alert("กรอกได้เฉพาะ 0-9)");
            document.getElementById('rno').value = "";
        }

    }
</script>

<script type="text/javascript">
    function checknumber2()
    {
        var elem = document.getElementById('Roomno').value;
        if(!elem.match(/^([0-9\_])+$/i))
        {
            alert("กรอกได้เฉพาะ 0-9)");
            document.getElementById('Roomno').value = "";
        }

    }
</script>

