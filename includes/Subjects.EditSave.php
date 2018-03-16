
<?php
session_start();
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("randomfinal");
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection =    'utf8',character_set_database = 'utf8', character_set_server = 'utf8'", $objConnect);
$strSQL = "UPDATE subject SET ";
$strSQL .="sids = '".$_POST["sids"]."' ";
$strSQL .=",sname = '".$_POST["sname"]."' ";
$strSQL .=",times = '".$_POST["times"]."' ";
$strSQL .=",stype = '".$_POST["stype"]."' ";
$strSQL .="WHERE Sno = '".$_GET["Sno"]."' ";
$objQuery = mysql_query($strSQL);
if($objQuery)
{?>
  <script>
 	alert('แก้ไขข้อมูลเรียบร้อย');
	</script>
  <meta http-equiv='refresh' content='0;URL=../Subjects.php'>

<?php
}
else
{
	echo "Error Save [".$strSQL."]";
	echo "<meta http-equiv='refresh' content='1;URL=../Subjects.php'>";
}
mysql_close($objConnect);
?>
