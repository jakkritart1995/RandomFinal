
<?php
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("randomfinal");
$strSQL = "DELETE FROM room ";
$strSQL .="WHERE rno = '".$_GET["rno"]."' ";
$objQuery = mysql_query($strSQL);
if($objQuery)
{  ?>
  <script>
 	alert('ลบข้อมูลเรียบร้อย');
	</script>
  <meta http-equiv='refresh' content='0;URL=../Room.php'>

<?php
}
else
{
  echo "Error Delete [".$strSQL."]";
}
mysql_close($objConnect);
?>
