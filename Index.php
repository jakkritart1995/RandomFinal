<?php require_once (__DIR__.'/layouts/header.php'); ?>
			
	<header>
		<nav>
			<div class="main-wrapper">
				
				<ul>
					<li><h3>ระบบออนไลน์จัดตารางสอบแบบสุ่มฟิชเชอร์ - เยตส์</h3></li>
				</ul>
				<div class="nav-login">

					<?php if (isset($_SESSION['username'])): ?>

						<form action="index.php" method="POST">[ชื่อผู้ใช้งาน] 
							<button type="submit" name="submit">LogOut</button>
						</form>;
							
					<?php else: ?>

						<form action="checklogin.php" method="POST"><img src = "Images/Lock-icon.png" width='30' border="0">
							<input type="text" name="username" placeholder="username">
							<input type="password" name="passwords" placeholder="password">
							<button class="btn btn-success" type="submit" name="submit">LogIn</button>&nbsp;&nbsp;&nbsp;

					<?php endif; ?>

				</div>

			</div>
		</nav>
	</header>
						
	<br><br><br><br><br>
	<h1 align="center">
		<img src = "Images/nameLogo.png" width='120' border="0">
		<br><br><br>
		ระบบจัดตารางสอบอัตโนมัติแบบสุ่มออนไลน์
	</h1>
	<br>
	<p align="center">("กรุณาล็อกอินเข้าสู่ระบบ")</p>

<?php include_once 'footer.php'; ?>

</body>
</html>