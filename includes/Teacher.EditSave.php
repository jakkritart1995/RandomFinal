
<?php
session_start();
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("randomfinal");
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection =    'utf8',character_set_database = 'utf8', character_set_server = 'utf8'", $objConnect);
$strSQL = "UPDATE teacher SET ";
$strSQL .="username = '".$_POST["username"]."' ";
$strSQL .=",passwords = '".$_POST["passwords"]."' ";
$strSQL .=",tname = '".$_POST["tname"]."' ";
$strSQL .=",section = '".$_POST["section"]."' ";
$strSQL .=",detail = '".$_POST["detail"]."' ";
$strSQL .=",status = '".$_POST["status"]."' ";
$strSQL .="WHERE tno = '".$_GET["tno"]."' ";
$objQuery = mysql_query($strSQL);
if($objQuery)
{?>
  <script>
 	alert('แก้ไขข้อมูลเรียบร้อย');
	</script>
  <meta http-equiv='refresh' content='0;URL=../Teacher.php'>

<?php
}
else
{
	echo "Error Save [".$strSQL."]";
	echo "<meta http-equiv='refresh' content='1;URL=../Teacher.php'>";
}
mysql_close($objConnect);
?>
