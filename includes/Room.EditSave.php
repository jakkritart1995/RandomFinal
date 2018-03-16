
<?php
session_start();
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("randomfinal");
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection =    'utf8',character_set_database = 'utf8', character_set_server = 'utf8'", $objConnect);
$strSQL = "UPDATE room SET ";
$strSQL .="rname = '".$_POST["rname"]."' ";
$strSQL .=",classno = '".$_POST["classno"]."' ";
$strSQL .=",Educyear = '".$_POST["Educyear"]."' ";
$strSQL .=",levelno = '".$_POST["levelno"]."' ";
$strSQL .=",Majorno = '".$_POST["Majorno"]."' ";
$strSQL .=",Roomno = '".$_POST["Roomno"]."' ";
$strSQL .="WHERE rno = '".$_GET["rno"]."' ";
$objQuery = mysql_query($strSQL);
if($objQuery)
{?>
  <script>
 	alert('แก้ไขข้อมูลเรียบร้อย');
	</script>
  <meta http-equiv='refresh' content='0;URL=../Room.php'>

<?php
}
else
{
	echo "Error Save [".$strSQL."]";
	echo "<meta http-equiv='refresh' content='1;URL=../Room.php'>";
}
mysql_close($objConnect);
?>
