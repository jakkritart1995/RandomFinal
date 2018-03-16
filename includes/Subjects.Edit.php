     
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
            <div class="main-wrapper"><br>
            <div align="Center">
                                   <div class="btn-group">
                                    <a class="btn btn-default" href="..\admin1.php" role="button">หน้าหลัก</a>
                                    <a class="btn btn-default" href="..\Subjects.php" role="button">จัดการข้อมูลวิชา</a>
                                    <button type="button" class="btn btn-primary">แก้ไขข้อมูลวิชา</button>
                                    </div>


            </div>
                  <form action="Subjects.EditSave.php?Sno=<?php echo $_GET["sno"];?>" name="frmEdit" method="post">
                  <?php
                  $objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
                  $objDB = mysql_select_db("randomfinal");
                   mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection =    'utf8',character_set_database = 'utf8', character_set_server = 'utf8'", $objConnect);
                  $strSQL = "SELECT * FROM subject WHERE sno = '".$_GET["sno"]."' ";
                  $objQuery = mysql_query($strSQL);
                  $objResult = mysql_fetch_array($objQuery);
                  if(!$objResult)
                  {
                    echo "Not found Sno=".$_GET["sno"];
                  }
                  else
                  {
                  ?>
 <h3 align="center"><img src = "../Images/Subject.png" width='120' border="0"><br>แก้ไขข้อมูวิชาเรียน</td></h3><br>


                <div class="container" ng-app="myApp" ng-controller="customersController">
                <table align="center" width="100%">
                    <tr align="center">
                        <td align="center">
 <table align="100">
                                <tr>
                                    <td align="left">
                                       <form action="includes/Subjects.inc.php" name="frmAdd" method="POST">
                                            <label for="sel1">ลำดับที่</label>
                                            <input class="form-control" type="text" name="sno" placeholder="ลำดับที่" value="<?php echo $objResult["sno"];?>" disabled="disabled"><br>
                                            <label for="sel1">รหัสวิชา</label>
                                            <input class="form-control" type="text" name="sids" placeholder="รหัสวิชา" value="<?php echo $objResult["sids"];?>"><br>
                                            <label for="sel1">ชื่อวิชา</label>
                                            <input class="form-control" type="text" name="sname" placeholder="ชื่อวิชา" value="<?php echo $objResult["sname"];?>"><br>
                                            <div class="form-group">
                                            <label for="sel1">เวลาที่ใช้สอบ</label>

                                              <select class="form-control" name="times" value="<?php echo $objResult["times"];?>">
                                                <option value="60">60</option>
                                                <option value="90">90</option>
                                                <option value="120">120</option>
                                              </select>
                                            </div>
                                            <div class="form-group">
                                            <label for="sel1">ประเภทวิชา</label>
                                              <select class="form-control" name="stype" value="<?php echo $objResult["stype"];?>">
                                                <option value="0" selected="selected">วิชาพื้นฐาน</option>
                                                <option value="1"">วิชาทั่วไป</option>
                                                <option value="2"">วิชาเเพิ่มเติม</option>
                                              </select>
                                            </div><br><br>
                                            <button class="btn btn-success" ng-click="editUser('new')" type="submit" name="submit">
                                            <span class="glyphicon glyphicon-user"></span>แก้ไขข้อมูล</button>
                                            <button class="btn btn-danger" ng-click="editUser('new')" type="reset" name="Reset">
                                            <span class="glyphicon glyphicon-remove"></span>เคลียร์</button>
                                        </form>
                                        
                                    </td>
                                </tr>
                            </table>

  <?php
  }
  mysql_close($objConnect);
  ?>


