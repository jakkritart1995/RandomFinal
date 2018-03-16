<?php session_start(); ?>

<?php require_once (__DIR__.'/functions/check-login-status.php'); ?>

<?php include_once 'header.php'; ?>

<?php 
    if ($_SESSION['status'] != '3') {
        header( "location: index.php" ); 
        die();
    }
?>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<div class="main-wrapper"></div><br><br>
    <div align="Center">ผู้อำนวยการ </div><br>
<?php
	if (isset($_SESSION['username'])) {
?>
        <table align="center" width="100%">
            <tr>
                <td>
                    <table align="center" width="50%">
                    	<tr>
                    		<td>
                   			 <p align="center"><a href="#.php" class="Link"><img src = "Images/Tablefinal.png" width='120' border="1px"><br>ดูรายงานตารางสอบ</p>
                    		</td>

                    		<td>
                   			  <p align="center"><a href="#.php" class="Link"><img src = "Images/Subject.png" width='120' border="1px"><br>ดูรายงานข้อมูลของรายวิชาแต่ละชั้นปี</p>
                    		</td>

                    		<td>
                   			  <p align="center"><a href="#.php" class="Link"><img src = "Images/teacher.png" width='120' border="1px"><br>ดูรายงานข้อมูลครู</p>
                        	</td>

                        	<td width="200">
                              <p align="center"><a href="#.php" class="Link"><img src = "Images/Room.png" width='120' border="1px"><br>ดูรายงานข้อมูล ชั้น/ห้อง </p>
                            </td>
                    	</tr>
                    	<tr>
                    		
                    		<td>
                   			  <p align="center"><a href="#.php" class="Link"><img src = "Images/LT.png" width='120' border="1px"><br>ดูรายงานรายวิชาในแต่ละหลักสูตร</p>
                        	</td>

                        	<td>
                   			  <p align="center"><a href="#.php" class="Link"><img src = "Images/Subject-1.png" width='120' border="1px"><br>ดูรายงานหลักสูตรระดับชั้นประถมศึกษาปีที่ 1 ถึง ชั้นมัธยมศึกษาปีที่ 6</p>
                        	</td>

                        	<td>
                   			  <p align="center"><a href="#.php" class="Link"><img src = "Images/User.png" width='120' border="1px"><br>ดูรายงานคุมสอบ</p>
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
	
	
