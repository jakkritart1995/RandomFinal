
<?php
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("randomfinal");
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection =    'utf8',character_set_database = 'utf8', character_set_server = 'utf8'", $objConnect);
$strSQL = "INSERT INTO room ";
$strSQL .="(rno,rname,classno,Educyear,levelno,Majorno,Roomno) ";
$strSQL .="VALUES ";
$strSQL .="('".$_POST["rno"]."','".$_POST["rname"]."','".$_POST["classno"]."','".$_POST["Educyear"]."','".$_POST["levelno"]."','".$_POST["Majorno"]."','".$_POST["Roomno"]."') ";
$objQuery = mysql_query($strSQL);
if($objQuery)
{?>
  <script>
 	alert('บันทึกข้อมูลเรียบร้อย');
	</script>
  <meta http-equiv='refresh' content='0;URL=../Room.php'>

<?php
}else
{?>
	<script>
 	alert('กรุณากรอกข้อมูล');
	</script>
<?php	
	echo "<meta http-equiv='refresh' content='0;URL=../Room.php'>";
}
mysql_close($objConnect);
?>