     
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
            <div class="main-wrapper"><br><br>
            <div align="Center">
                                   <div class="btn-group">
                                    <a class="btn btn-default" href="..\admin1.php" role="button">หน้าหลัก</a>
                                    <a class="btn btn-default" href="..\Student.php" role="button">จัดการข้อมูลนักเรียน</a>
                                    <button type="button" class="btn btn-primary">แก้ไขข้อมูลนักเรียน</button>
                                    </div>


            </div>
                  <form action="Student.EditSave.php?Sno=<?php echo $_GET["Sno"];?>" name="frmEdit" method="post">
                  <?php
                  $objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
                  $objDB = mysql_select_db("randomfinal");
                   mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection =    'utf8',character_set_database = 'utf8', character_set_server = 'utf8'", $objConnect);
                  $strSQL = "SELECT * FROM student WHERE Sno = '".$_GET["Sno"]."' ";
                  $objQuery = mysql_query($strSQL);
                  $objResult = mysql_fetch_array($objQuery);
                  if(!$objResult)
                  {
                    echo "Not found Sno=".$_GET["Sno"];
                  }
                  else
                  {
                  ?>
 <h3 align="center"><img src = "../Images/Student.png" width='120' border="0"><br>แก้ไขข้อมูลนักเรียน</td></h3><br>


                <div class="container" ng-app="myApp" ng-controller="customersController">
                <table align="center" width="100%">
                    <tr align="center">
                        <td align="center">
 <table align="100">
                                <tr>
                                    <td align="left">
                                        <form action="includes/Student.inc.php" name="frmAdd" method="POST">
                                             <label for="sel1">ลำดับที่</label>
                                                 <input class="form-control" type="text" name="Sno" placeholder="ลำดับที่" value="<?php echo $objResult["Sno"];?>" disabled="disabled"><br>
                                             <label for="sel1">ชื่อ</label>
                                                 <input class="form-control" type="text" name="Sname" placeholder="ชื่อ" value="<?php echo $objResult["Sname"];?>"><br>
                                             <label for="sel1">สกุล</label>
                                                  <input class="form-control" type="text" name="Slname" placeholder="สกุล" value="<?php echo $objResult["Slname"];?>"><br>
                                            <label for="sel1">เลขที่</label> 
                                                  <input class="form-control" type="text" name="rno" placeholder="เลขที่" value="<?php echo $objResult["rno"];?>"><br>
                                            <label for="sel1">ปีการศึกษา</label> 
                                                  <select  class="form-control"  name="Educyear" placeholder="ปีการศึกษา" value="<?php echo $objResult["Educyear"];?>">">
                                                        <option value="2558">2558</option>
                                                        <option value="2559">2559</option>
                                                        <option value="2560">2560</option>
                                                        <option value="2561" selected="selected">2561</option>
                                                        <option value="2562">2562</option>
                                                        <option value="2563">2563</option>
                                                  </select><br><br>
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
