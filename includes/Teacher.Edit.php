     
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
            <div class="main-wrapper"><br><br><br><br>
            <div align="Center">
                                   <div class="btn-group">
                                    <a class="btn btn-default" href="..\admin1.php" role="button">หน้าหลัก</a>
                                    <button type="button" class="btn btn-primary">แก้ไขข้อมูลอาจารย์</button>
                                    </div>


            </div>
                  <form action="Teacher.EditSave.php?tno=<?php echo $_GET["tno"];?>" name="frmEdit" method="post">
                  <?php
                  $objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
                  $objDB = mysql_select_db("randomfinal");
                   mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection =    'utf8',character_set_database = 'utf8', character_set_server = 'utf8'", $objConnect);
                  $strSQL = "SELECT * FROM teacher WHERE tno = '".$_GET["tno"]."' ";
                  $objQuery = mysql_query($strSQL);
                  $objResult = mysql_fetch_array($objQuery);
                  if(!$objResult)
                  {
                  	echo "Not found tno=".$_GET["tno"];
                  }
                  else
                  {
                  ?>
 <h3 align="center"><img src = "../Images/Teacher.png" width='120' border="0"><br>แก้ไขข้อมูอาจารย์</td></h3><br>


                <div class="container" ng-app="myApp" ng-controller="customersController">
                <table align="center" width="100%">
                    <tr align="center">
                        <td align="center">
 <table align="100">
                                <tr>
                                    <td align="left">
                                        <form action="includes/Teacher.inc.php" name="frmAdd" method="POST">
                                             <label for="sel1">ลำดับที่</label>
                                                 <input class="form-control" type="text" name="username" placeholder="ลำดับที่" value="<?php echo $objResult["tno"];?>" disabled="disabled"><br>
                                             <label for="sel1">รหัสอาจารย์</label> 
                                                  <input class="form-control" type="text" name="username" placeholder="รหัสอาจารย์" value="<?php echo $objResult["username"];?>"><br>
                                             <label for="sel1">รหัสผ่าน</label>
                                                  <input class="form-control" type="pssword" name="passwords" placeholder="รหัสผ่าน" value="<?php echo $objResult["passwords"];?>"><br>

                                            <label for="sel1">ฝ่าย</label>
                                                  <select class="form-control" name="section">
                                                    <option value="ฝ่ายวิชาการ" selected="selected">ฝ่ายวิชาการ</option>
                                                    <option value="ฝ่ายทะเบียน">ฝ่ายทะเบียน</option>
                                                    <option value="คุณครู">คุณครู</option>
                                                  </select><br>
                                             <label for="sel1">ชื่ออาจารย์</label> 
                                                  <input class="form-control" type="text" name="tname" placeholder="ชื่ออาจารย์" value="<?php echo $objResult["tname"];?>"><br>


                                             <label for="sel1">อื่นๆ</label>
                                                  <input class="form-control" type="text" name="detail" placeholder=" อื่นๆ" value="<?php echo $objResult["detail"];?>"><br>
                                              <label for="sel1">สถานะ</label>
                                                  <select class="form-control" name="status">
                                                    <option value="1" selected="selected">ฝ่ายวิชาการ</option>
                                                    <option value="2">ฝ่ายทะเบียน</option>
                                                    <option value="3">คุณครู</option>
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

