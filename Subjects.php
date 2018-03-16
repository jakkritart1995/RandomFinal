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
                                    <a class="btn btn-default" href="admin2.php" role="button">หน้าหลัก</a>
                                    <button type="button" class="btn btn-primary">จัดตารางสอบ</button>
                                    </div>
 
            </div>
                <?php
                if (isset($_SESSION['username'])) {
                    ?>

                    <h3 align="center"><img src = "Images/Subject.png" width='120' border="0"><br>จัดการข้อมูลวิชา</td></h3><br>


                <div class="container" ng-app="myApp" ng-controller="customersController">
                <table align="center" width="100%">
                    <tr align="center">
                        <td align="center">
                            <table align="100">
                                <tr>
                                    <td align="left">
                                        <form action="includes/Subjects.inc.php" name="frmAdd" method="POST">
                                            <label for="sel1">ลำดับที่</label>
                                            <input class="form-control" type="text" name="sno" placeholder="ตัวเลขเท่านั้น" maxlength="3" onkeypress="check_key_number();" ><br>
                                            <label for="sel1">รหัสวิชา</label>
                                            <input class="form-control" type="text" name="sids" placeholder="รหัสวิชา" maxlength="6" ><br>
                                            <label for="sel1">ชื่อวิชา</label>
                                            <input class="form-control" type="text" name="sname" placeholder="ชื่อวิชา" maxlength="20"><br>
                                            <label for="sel1">เวลาที่ใช้สอบ</label>
                                              <select class="form-control" name="times">
                                                <option value="60" selected="selected">60</option>
                                                <option value="90">90</option>
                                                <option value="120">120</option>
                                              </select><br>
                                            <label for="sel1">ประเภทวิชา</label>
                                              <select class="form-control" name="stype">
                                                <option value="0" selected="selected">วิชาพื้นฐาน</option>
                                                <option value="1">วิชาทั่วไป</option>
                                                <option value="2">วิชาเเพิ่มเติม</option>
                                              </select>
                                            <br><br>
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
             $strSQL = "SELECT * FROM subject ";
             mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection =    'utf8',character_set_database = 'utf8', character_set_server = 'utf8'", $objConnect);
            $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
            ?>

          

    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th> <div align="center">ลำดับที่ </div></th>
                <th> <div align="center">รหัสวิชา </div></th>
                <th> <div align="center">ชื่อวิชา </div></th>

                <th> <div align="center">เวลา </div></th>
                <th> <div align="center">อื่นๆ </div></th>
                <th> <div align="center">แก้ไข </div></th>
            </tr>
        </thead>
        <tbody>

            <?php while($objResult = mysql_fetch_array($objQuery)) { ?>

                <tr>
                    <td><div align="center"><?php echo $objResult["sno"];?></div></td>
                    <td><div align="center"><?php echo $objResult["sids"];?></div></td>
                    <td><div align="center"><?php echo $objResult["sname"];?></div></td>
                    <td><div align="center"><?php echo $objResult["times"];?></div></td>
                    <td><div align="center"><?php echo $objResult["stype"];?></div></td>

                    <td>
                        <div align="center">
                          
                                <a href="includes/Subjects.Edit.php?sno=<?php echo $objResult["sno"];?>" >  
                                <button type="button" class="btn btn-warning">
                                <span class="glyphicon glyphicon-pencil"></span>แก้ไข</button></a>
                           

                            <a href="JavaScript:if(confirm('ต้องการลบข้อมูลนี้หรือไม่ ?') == true){window.location='includes/Subjects.Del.php?sno=<?php echo $objResult["sno"];?>';}">
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
                    <p align="center">("กรุณาล็อกอินเข้าสู่ระบบ")</p> 
                    <?php
                    }
                    ?>
            </div>
        </section>
<?php
    include_once 'footer.php';
?>