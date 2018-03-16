<?php session_start(); ?>
<?php require_once (__DIR__.'/functions/check-login-status.php'); ?>
<?php

    include_once 'header.php';
?>
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    
            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

            <!-- Optional theme -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

            <!-- Latest compiled and minified JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

            <div class="main-wrapper"><br>
            <div align="Center">
           <div class="btn-group">
            <a class="btn btn-default" href="admin1.php" role="button">หน้าหลัก</a>
            <button type="button" class="btn btn-primary">จัดการข้อมูลนักเรียน</button>
            </div>
            </div>
                <?php
                if (isset($_SESSION['username'])) {
                    ?>
                    <h3 align="center"><img src = "Images/Student.png" width='120' border="0"><br>จัดการข้อมูลนักเรียน</td></h3><br>


                <div class="container" ng-app="myApp" ng-controller="customersController">
                <table align="center" width="100%">
                    <tr align="center">
                        <td align="center">
                            <table align="100">
                                <tr>
                                    <td align="ledt">
                                        <form action="includes/Student.inc.php" name="frmAdd" method="POST">
                                            <label for="sel1">ลำดับที่</label> 
                                                <input class="form-control" type="text" name="Sno" placeholder="ตัวเลขเท่านั้น" id="test_txt"onkeypress="check_key_number();"  maxlength="3"><br>
                                        	<label for="sel1">ชื่อ</label>
                                                <input class="form-control" type="text" name="sname" placeholder="ชื่อ"  maxlength="100"><br>
                                            <label for="sel1">นามสกุล</label>
                                                <input class="form-control" type="text" name="slname" placeholder="นามสกุล" maxlength="100"><br>
                                            <label for="sel1">เลขที่</label>
                                                 <input class="form-control" type="text" name="rno" placeholder="เลขที่" maxlength="3" id="rno" onblur="checknumber();">
                                           <label for="sel1">ปีการศึกษา</label>
                                                <select  class="form-control"  name="educyear" placeholder="ปีการศึกษา">
                                                      <option value="2558">2558</option>
                                                      <option value="2559">2559</option>
                                                      <option value="2560">2560</option>
                                                      <option value="2561" selected="selected">2561</option>
                                                      <option value="2562">2562</option>
                                                      <option value="2563">2563</option>
                                                </select><br><br>
                                            <button class="btn btn-success" ng-click="editUser('new')" type="submit" name="submit">
                                            <span class="glyphicon glyphicon-user"></span>เพิ่มข้อมูล</button>
                                            <button class="btn btn-danger" ng-click="editUser('new')" type="reset" name="Reset">
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

             $strSQL = "SELECT * FROM student ";
             mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection =    'utf8',character_set_database = 'utf8', character_set_server = 'utf8'", $objConnect);
            $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");


            ?>

          

    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th> <div align="center">ลำดับที่ </div></th>
                <th> <div align="center">ชื่อ </div></th>
                <th> <div align="center">สกุล </div></th>

                <th> <div align="center">เลขที่ </div></th>
                <th> <div align="center">ปีการศึกษา </div></th>
                <th> <div align="center">แก้ไข </div></th>
            </tr>
        </thead>
        <tbody>

            <?php while($objResult = mysql_fetch_array($objQuery)) { ?>

                <tr>
                    <td><div align="center"><?php echo $objResult["Sno"];?></div></td>
                    <td><div align="center"><?php echo $objResult["Sname"];?></div></td>
                    <td><div align="center"><?php echo $objResult["Slname"];?></div></td>
                    <td><div align="center"><?php echo $objResult["rno"];?></div></td>
                    <td><div align="center"><?php echo $objResult["Educyear"];?></div></td>

                    <td>
                        <div align="center">
                          
                                <a href="includes/Student.Edit.php?Sno=<?php echo $objResult["Sno"];?>" >  
                                <button type="button" class="btn btn-warning">
                                <span class="glyphicon glyphicon-pencil"></span>แก้ไข</button></a>
                           

                            <a href="JavaScript:if(confirm('ต้องการลบข้อมูลนี้หรือไม่ ?') == true){window.location='includes/Student.Del.php?Sno=<?php echo $objResult["Sno"];?>';}">
                                <button type="button" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-trash"></span>                                
                                       Delete
                                </button>
                            </a>
                        </div>
                    </td>
                </tr>

            <?php } ?>

        </tbody>
    </table>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>

</body>
</html>

<?php mysql_close($objConnect); ?>
                    <?php
                }else{
                    ?>
                    <br><br>
                    <h1 align="center">ระบบจัดตารางสอบอัตโนมัติแบบสุ่มออนไลน์</h1><br>
                    <p align="center">("กรุณาล็อกอินเข้าสู่ระบบ")</p
                    <?php
                }
                ?>
            </div>
        </section>

<?php
    include_once 'footer.php';
?>
    
    
