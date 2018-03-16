
<?php
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("randomfinal");
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection =    'utf8',character_set_database = 'utf8', character_set_server = 'utf8'", $objConnect);
$strSQL = "INSERT INTO Student ";
$strSQL .="(Sno,sname,slname,rno,educyear) ";
$strSQL .="VALUES ";
$strSQL .="('".$_POST["Sno"]."','".$_POST["sname"]."','".$_POST["slname"]."','".$_POST["rno"]."','".$_POST["educyear"]."') ";
$objQuery = mysql_query($strSQL);
if($objQuery)
{?>
  <script>
 	alert('บันทึกข้อมูลเรียบร้อย');
	</script>
  <meta http-equiv='refresh' content='0;URL=../Student.php'>

<?php
}
else
{?>
	<script>
 	alert('กรุณากรอกข้อมูล');
	</script>
<?php	
	echo "<meta http-equiv='refresh' content='0;URL=../Student.php'>";
}
mysql_close($objConnect);
?>