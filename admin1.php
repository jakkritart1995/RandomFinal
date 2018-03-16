<?php session_start(); ?>

<?php require_once (__DIR__.'/functions/check-login-status.php'); ?>

<?php 
    if ($_SESSION['status'] != '1') {
        header( "location: index.php" ); 
        die();
    }
?>

<?php include_once 'header.php'; ?>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<div class="main-wrapper"></div><br><br>
    <div align="Center"><br>
                                   <div class="btn-group">
                                    <button type="button" class="btn btn-default">ฝ่ายทะเบียน</button>
                                    </div>


            </div>
				
		<?php
			if (isset($_SESSION['username'])) {
		?>
            <table align="center" width="100%">
               	<tr>
               		<td>
                    	<table align="center" width="30%">
	                    	<tr>
    	                		<td>
        	           			<p align="center"><a href="Teacher.php" class="Link"><img src = "Images/Teacher.png" width='120' border="1px"><br>จัดการข้อมูลคุณครู</p>
                    			</td>

	                    		<td>
	                   			  <p align="center"><a href="Student.php" class="Link"><img src = "Images/Student.png" width='120' border="1px"><br>จัดการข้อมูลนักเรียน</p>
	                    		</td>

                    		
                    		</tr><br>
	                    	<tr>
	                    		<td>
	                   			  <p align="center"><a href="Room.php" class="Link"><img src = "Images/Room.png" width='120' border="1px"><br>จัดการข้อมูล ชั้น/ห้อง</p>
	                        	</td>
	                    		<td>
	                   			  <p align="center"><a href="#.php" class="Link"><img src = "Images/Input-7.png" width='120' border="1px"><br>พิมพ์รายงาน</p>
	                        	</td>
	                    	</tr>
                    	
                    	</table>
                	</td>
                </tr>   	
            </table>
            	
<?php
			}else{
?>
                <br><br><marquee bgcolor="#fff" direction="Right" scrollamount="15" width="90%">
                <h1 align="center"><img src = "Images/TT.Gif" width='120' border="0">ระบบจัดตารางสอบอัตโนมัติแบบสุ่มออนไลน์</h1><br></marquee>
                <p align="center">("กรุณาล็อกอินเข้าสู่ระบบ")</p>   
<?php
				}				
?>
				
<?php
	include_once 'footer.php';
?>
	
	
