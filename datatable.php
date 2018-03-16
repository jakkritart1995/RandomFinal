<?php

session_start();

$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("randomfinal");


$strSQL = "SELECT * FROM Teacher ";
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection =    'utf8',character_set_database = 'utf8', character_set_server = 'utf8'", $objConnect);
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th> <div align="center">ลำดับที่ </div></th>
                <th> <div align="center">รหัสอาจารย์ </div></th>
                <th> <div align="center">ชื่อ-สกุล </div></th>

                <th> <div align="center">ฝ่าย </div></th>
                <th> <div align="center">อื่นๆ </div></th>
                <th> <div align="center">แก้ไข </div></th>
            </tr>
        </thead>
        <tbody>

        	<?php while($objResult = mysql_fetch_array($objQuery)) { ?>

	            <tr>
	                <td><div align="center"><?php echo $objResult["tno"];?></div></td>
	                <td><div align="center"><?php echo $objResult["username"];?></div></td>
	                <td><div align="center"><?php echo $objResult["tname"];?></div></td>
	                <td><div align="center"><?php echo $objResult["section"];?></div></td>
	                <td><div align="Left"><?php echo $objResult["detail"];?></div></td>

	                <td>
	                    <div align="center">
	                        <button type="button" class="btn btn-warning">
	                            <span class="glyphicon glyphicon-pencil"></span>
	                            <a href="includes/Teacher.Edit.php?tno=<?php echo $objResult["tno"];?>" >Edit</a>
	                        </button>

	                        <a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='includes/Teacher.Del.php?tno=<?php echo $objResult["tno"];?>';}">
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