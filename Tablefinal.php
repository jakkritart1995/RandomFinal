<?php session_start(); ?>

<?php require_once (__DIR__.'/functions/check-login-status.php'); ?>

<?php

	include_once 'header.php';
?>
        	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
			<div class="main-wrapper"><br>
            <div align="Center"><a href="admin2.php" class="Link">หน้าหลัก</a> > 
                                <b>จัดตารางสอบ</b></a> </div>


            </div>
                <?php
                if (isset($_SESSION['username'])) {
                    ?>

                      <h3 align="center"><img src = "Images/Input-1.png" width='120' border="0"><br>ตารางสอบ</td></h3><br><br>

                <div class="container" ng-app="myApp" ng-controller="customersController">
                <table align="left" width="100%">
                    <tr align="center">
                        <td align="center">
                            <table align="100%">
                                <tr>
                                    <td align="Right">

                                        <form action="includes/timetable.php" name="frmAdd" method="POST">
                                            <h3 align="left">ค้นหาตารางสอบ</h3>
                                           
                                                       <select>
                                                        <option value="volvo">ประถมศึกษาชั้นปีที่ 1/1</option>
                                                        <option value="saab">ประถมศึกษาชั้นปีที่ 1/2</option>
                                                        <option value="mercedes">ประถมศึกษาชั้นปีที่ 1/3</option>
                                                        <option value="audi">ประถมศึกษาชั้นปีที่ 1/4</option>
                                                      </select><br><br>
                                            <button class="btn btn-success"  ng-click="editUser('new')" type="submit" name="submit">
                                            <span class="glyphicon glyphicon-user"></span>ดูตารางสอบ</button>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            <br>


    




                    <?php
                }else{
                    ?>

                    <br><br>
                        <br><br><marquee bgcolor="#fff" direction="Right" scrollamount="15" width="90%">
                        <h1 align="center"><img src = "Images/TT.Gif" width='120' border="0">ระบบจัดตารางสอบอัตโนมัติแบบสุ่มออนไลน์</h1><br></marquee>
                        <p align="center">("กรุณาล็อกอินเข้าสู่ระบบ")</p>   

                    <?php




                }


                        

                ?>

            
                
            
            </div>
        </section>

<?php
    include_once 'footer.php';
?>
    
    
	
	
