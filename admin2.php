<?php session_start(); ?>

<?php require_once (__DIR__.'/functions/check-login-status.php'); ?>

<?php include_once 'header.php'; ?>

<?php 
    if ($_SESSION['status'] != '2') {
        header( "location: index.php" ); 
        die();
    }
?>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<div class="main-wrapper"></div><br>
    <div align="Center"><br>
        <div class="btn-group">
        <button type="button" class="btn btn-default">ฝ่ายวิชาการ</button>
        </div><br><br>
    </div>

<?php
	if (isset($_SESSION['username'])) {
?>
        <table align="center" width="100%">
            <tr>
                <td>
                    <table align="center" width="50%">
                    	<tr>
                    		<td>
                   			 <p align="center"><a href="Subjects.php" class="Link"><img src = "Images/Subject.png" width='120' border="1px"><br>จัดการข้อมูลวิชา</p>
                    		</td>

                    		<td>
                   			  <p align="center"><a href="#.php" class="Link"><img src = "Images/Register.png" width='120' border="1px"><br>แก้ไขตารางสอบ</p>
                    		</td>

                    		<td>
                   			  <p align="center"><a href="#.php" class="Link"><img src = "Images/Input-7.png" width='120' border="1px"><br>พิมพ์รายงาน</p>
                        	</td>

                        	<td>
                   			  <p align="center"><a href="Exambling.php" class="Link"><img src = "Images/Tablefinal.png" width='120' border="1px"><br>จัดตารางสอบ</p>
                        	</td>
                    	</tr><br>
                    	<tr>
                    		
                    		<td>
                   			  <p align="center"><a href="#.php" class="Link"><img src = "Images/Report.png" width='120' border="1px"><br>รายงานจำนวนครั้งมี่คุมสอบ</p>
                        	</td>

                        	<td>
                   			  <p align="center"><a href="Tablefinal.php" class="Link"><img src = "Images/Couse.png" width='120' border="1px"><br>ตารางสอบ</p>
                        	</td>

                        	<td>
                   			  <p align="center"><a href="includes/result.php" class="Link"><img src = "Images/Academic.png" width='120' border="1px"><br>ผลการจัดตารางสอบ</p>
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
	
	
