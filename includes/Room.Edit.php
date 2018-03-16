     
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
            <div class="main-wrapper"><br><br><br><br>
           <div align="Center">
                                   <div class="btn-group">
                                    <a class="btn btn-default" href="..\admin1.php" role="button">หน้าหลัก</a>
                                    <a class="btn btn-default" href="..\Room.php" role="button">จัดการข้อมูลแก้ไขข้อมูลชั้น / ห้อง</a>
                                    <button type="button" class="btn btn-primary">แก้ไขข้อมูลชั้น / ห้อง</button>
                                    </div>


            </div>
                  <form action="Room.EditSave.php?rno=<?php echo $_GET["rno"];?>" name="frmEdit" method="post">
                  <?php
                  $objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
                  $objDB = mysql_select_db("randomfinal");
                   mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection =    'utf8',character_set_database = 'utf8', character_set_server = 'utf8'", $objConnect);
                  $strSQL = "SELECT * FROM room WHERE rno = '".$_GET["rno"]."' ";
                  $objQuery = mysql_query($strSQL);
                  $objResult = mysql_fetch_array($objQuery);
                  if(!$objResult)
                  {
                    echo "Not found rno=".$_GET["rno"];
                  }
                  else
                  {
                  ?>
 <h3 align="center"><img src = "../Images/Room.png" width='120' border="0"><br>แก้ไขข้อมูลชั้น / ห้อง</td></h3><br>


                <div class="container" ng-app="myApp" ng-controller="customersController">
                <table align="center" width="100%">
                    <tr align="center">
                        <td align="center">
 <table align="100">
                                <tr>
                                    <td align="left">
                                        <form action="includes/Room.inc.php" name="frmAdd" method="POST">
                                           <label for="sel1">ลำดับที่</label>
                                                <input class="form-control" type="text" name="rno" placeholder="ลำดับที่" maxlength="3" value="<?php echo $objResult["rno"];?>" disabled="disabled"><br>
                                            <label for="sel1">ชื่อห้อง</label>
                                                <input class="form-control" type="text" name="rname" placeholder="ชื่อห้อง" maxlength="100" value="<?php echo $objResult["rname"];?>"><br>
                                            <label for="sel1">เลขที่แผนการเรียน</label> 
                                                  <select  class="form-control"  name="classno" placeholder="เลขที่แผนการเรียน" value="<?php echo $objResult["classno"];?>">">
                                                        <option value="1" selected="selected">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                  </select><br>
                                            <label for="sel1">ปีการศึกษา</label> 
                                                  <select  class="form-control"  name="Educyear" placeholder="ปีการศึกษา" value="<?php echo $objResult["Educyear"];?>">">
                                                        <option value="2558">2558</option>
                                                        <option value="2559">2559</option>
                                                        <option value="2560">2560</option>
                                                        <option value="2561" selected="selected">2561</option>
                                                        <option value="2562">2562</option>
                                                        <option value="2563">2563</option>
                                                  </select><br>
                                             <label for="sel1">เลขที่แผนการเรียน</label> 
                                                  <select  class="form-control"  name="levelno" placeholder="เลขที่แผนการเรียน" value="<?php echo $objResult["levelno"];?>">">
                                                        <option value="0" selected="selected">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                  </select><br>
                                             <label for="sel1">เลขที่</label> 
                                                  <input class="form-control" type="text" name="Majorno" placeholder="เลขที่แผนการเรียน" value="<?php echo $objResult["Majorno"];?>"><br>
                                             <label for="sel1">เลขที่ห้อง</label> 
                                                  <input class="form-control" type="text" name="Roomno" placeholder="เลขที่แผนการเรียน" value="<?php echo $objResult["Roomno"];?>"><br><br>
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
  </form>
