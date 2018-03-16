<?php session_start(); ?>

<?php

	include_once 'header.php';
?>
        	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
			<div class="main-wrapper"><br>
            <div align="Center">
                                   <div class="btn-group">
                                    <a class="btn btn-default" href="admin2.php" role="button">หน้าหลัก</a>
                                    <button type="button" class="btn btn-primary">จัดตารางสอบ</button>
                                    <a class="btn btn-default" href="includes/result.php" role="button">ตารางสอบ</a>
                                    </div>


            </div>
                <?php
                if (isset($_SESSION['username'])) {
                    ?>

                    <h3 align="center"><img src = "Images/Input-1.png" width='120' border="0"><br>จัดตารางสอบ</td></h3><br><br>

                <div class="container" ng-app="myApp" ng-controller="customersController">
                <table align="left" width="100%">
                    <tr align="center">
                        <td align="center">
                            <table align="100%">
                                <tr>
                                    <td align="left">

                                        <form action="includes/timetable.php" name="frmAdd" method="POST">
                                             <label for="sel1">วันที่จัดตารางสอบ</label>
                                                    <input class="form-control"  type="text" name="ttdate" value="<?=date('Y-m-d')?>" />
                                             <label for="sel1">ปีการศึกษา</label>
                                                <select  class="form-control"  name="educyear" placeholder="ปีการศึกษา">
                                                      <option value="2558">2558</option>
                                                      <option value="2559">2559</option>
                                                      <option value="2560">2560</option>
                                                      <option value="2561" selected="selected">2561</option>
                                                      <option value="2562">2562</option>
                                                      <option value="2563">2563</option>
                                                </select>
                                            <label for="sel1">ภาคเรียนที่</label>
                                                <select  class="form-control"  name="sem" placeholder="รหัสอาจารย์">
                                                      <option value="1">1</option>
                                                      <option value="2" selected="selected">2</option>
                                                </select><br><br>
                                          

                                          <h3 align="center">ประถม</h3>
                                            <label for="sel1">จำนวนวันที่ใช้สอบของระดับประถมศึกษาอย่างน้อย</label> 
                                                  <input class="form-control" type="type" name="txtSubjectsID" disabled="disabled" placeholder="2 วัน"><br>
                                            <label for="sel1">วันที่เริ่มสอบ</label> 
                                                  <input class="form-control" type="date" name="dateprimstart" placeholder="dateprimstart"><br>
                                            <label for="sel1">วันที่สิ้นสุดการสอบ</label> 
                                                  <input class="form-control" type="date" name="dateprimend" placeholder="dateprimend"><br>

                                          <h3 align="center">มัธยม</h3>
                                            <label for="sel1">จำนวนวันที่ใช้สอบของระดับประถมศึกษาอย่างน้อย</label>
                                                  <input class="form-control" type="type" name="txtSubjectsID" disabled="disabled" placeholder="5 วัน"><br>
                                            <label for="sel1">วันที่เริ่มสอบ</label>
                                                  <input class="form-control" type="date" name="datesecstart" placeholder="datesecstart"><br>
                                            <label for="sel1">วันที่สิ้นสุดการสอบ</label> 
                                                  <input class="form-control" type="date" name="datesecend" placeholder="datesecend"><br><br>
                                                  
                                            <button class="btn btn-success" ng-click="editUser('new')" type="submit" name="submit">
                                            <span class="glyphicon glyphicon-user"></span>จัดตารางสอบ</button>
                                            <button class="btn btn-danger" ng-click="editUser('new')" type="submit" name="submit">
                                            <span class="glyphicon glyphicon-remove"></span>เคลียร์</button>
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
    
    
	
	
