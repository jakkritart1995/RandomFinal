
<?php
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("randomfinal");
$tno = $_GET["tno"];
$strSQL = "DELETE FROM teacher WHERE tno = $tno";
$objQuery = mysql_query($strSQL);
if($objQuery)
{?>
  <script>
 	alert('ลบข้อมูลเรียบร้อย');
	</script>
  <meta http-equiv='refresh' content='0;URL=../teacher.php'>

<?php
}
else
{
  echo "Error Delete [".$strSQL."]";
}
mysql_close($objConnect);


?>
