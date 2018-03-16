<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<?php
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("randomfinal");

$timeprim = 6;
$nDayprim1 = ceil(12/$timeprim);
//echo "<b>ระดับประถม</b>";
//echo "<br>";
//echo "จำนวนวันท่ใช้สอบของระดับประถมอย่างน้อย $nDayprim1 วัน";
//echo "<br>";
$dateprimstart = $_POST["dateprimstart"];
$dateprimend = $_POST["dateprimend"];

//echo "วันที่เริ่มต้นของประถม $dateprimstart";
//echo "<br>";
//echo "วันที่สิ้นสุดของประถม $dateprimend";
//echo "<br>";



/*function DateDiff($dateprimstart,$dateprimend)
	 {
					$dateprimstart=date_create($dateprimstart);
					$dateprimend=date_create($dateprimend);
					//echo "$date1";
					//echo "$date2";
					$diff=date_diff($dateprimstart,$dateprimend)+1;  // 1 day = 60*60*24
					return $diff->days;
	 }*/




$nDayprim2 = DateDiff($dateprimstart,$dateprimend,0); echo "$nDayprim2"; echo "$nDayprim1";
//echo "จำนวนวันที่ใช้สอบ $nDayprim2 วัน";
//echo "<br>";
if ($nDayprim2 < $nDayprim1) {
	echo"<script language=\"JavaScript\">";
	echo"alert('จำนวนวันของชั้นประถมไม่พอ')";
	echo"</script>";
	//echo "<meta http-equiv='refresh' content='1;URL=../Exambling.php'>";
} else {

//echo "<br>";
//echo "<br>";
//echo "<b>ระดับมัธยม</b>";
//echo "<br>";
$timesec = 4;
$nDaysec1 = ceil(15/$timesec);
//echo "จำนวนวันท่ใช้สอบของระดับมธยมอย่างน้อย $nDaysec1 วัน";
//echo "<br>";
$datesecstart = $_POST["datesecstart"];
$datesecend = $_POST["datesecend"];

//echo "วันที่เริ่มต้นของประถม $datesecstart";
//echo "<br>";
//echo "วันที่สิ้นสุดของประถม $datesecend";
//echo "<br>";


$nDaysec2 = DateDiff($datesecstart,$datesecend,1);
//echo "จำนวนวันที่ใช้สอบ $nDaysec2 วัน";
//echo "<br>";
if ($nDaysec2 < $nDaysec1) {
	echo"<script language=\"JavaScript\">";
	echo"alert('จำนวนวันของชั้นมัธยมไม่พอ')";
	echo"</script>";
	echo "<meta http-equiv='refresh' content='1;URL=../Exambling.php'>";
} else {

//echo "<br>";
//echo "<br>";
$nDayprim = $nDayprim2;
//echo "$nDayprim";
//echo "<br>";
$nDaysec = $nDaysec2;
//echo "$nDaysec";

if ($nDayprim >= $nDayprim1 AND $nDaysec >= $nDaysec1) {
	$strSQL = "INSERT INTO timetable ";
	$strSQL .="(ttdate,educyear,sem) ";
	$strSQL .="VALUES ";
	$strSQL .="('".$_POST["ttdate"]."','".$_POST["educyear"]."','".$_POST["sem"]."') ";
	$objQuery = mysql_query($strSQL);
	$strSQL = "select max(timetno) FROM timetable;";
	echo "strSQL";
	echo "บันทึกเรียบร้อย";
	//secho "<meta http-equiv='refresh' content='1;URL=../Exambling.php'>";
} else {
	echo "กรอกข้อมูลใหม่";
	//echo "<meta http-equiv='refresh' content='1;URL=../Exambling.php'";
}


	
}
}
?>
<?php
 

 $my_start_date  = '2017-05-01';
 $my_end_date  = '2017-05-15';
 $begin    = new DateTime( $my_start_date );
 $end    = new DateTime( $my_end_date );
 $date_range  = new DatePeriod($begin, new DateInterval('P1D'), $end->modify( '+1 day' ));
  $intTotalDay  = iterator_count($date_range);
  $publicHoliday = GetPublicHoliday($my_start_date, $my_end_date);
 $my_range_date = array();
 foreach($date_range as $dt){
  $my_range_date[] = $dt->format('Y-m-d');
 }
  $setDayOfWeek = function($date) {
  return date("w", strtotime($date));
 }
 $count_day   = array_count_values(array_map($setDayOfWeek, $my_range_date));
 $sunday   = isset($count_day[0]) ? $count_day[0] : 0;
 $saturday  = isset($count_day[6]) ? $count_day[6] : 0;
 $holiday   = $sunday + $saturday;
 $public_holiday = count(array_intersect($my_range_date, $publicHoliday));
 $all_holiday = ($holiday + $public_holiday);
 $work_day   = $intTotalDay - $all_holiday;
 echo "<br>วันที่ = $my_start_date - $my_end_date";
 echo "<br>Total Day = $intTotalDay";
 echo "<br>Work Day = <font color=green>$work_day</font>";
 echo "<br>Holiday = <font color=orange>$holiday</font>";
 echo "<br>Public Holiday = <font color=red>$public_holiday</font>";
 echo "<br>All Holiday = <font color=magenta>".($all_holiday)."</font>";



 function DateDiff($dateprimstart,$dateprimend,$level)
	{
		$date1=($dateprimstart);
		$date2=($dateprimend);
		$days=0; $i=0;
		while ($date1<=$date2) 
		{
			echo "$date1";
			$DayOfWeek = date("w", strtotime($date1));
			if ($DayOfWeek != 0 AND $DayOfWeek !=6) 
			{
				if ($level == 0)
				{
					$examdateprim[$i++] = $date1;
					$days++;
				} else($level == 1)
				{
					$examdatesec[$i++] = $date1;
					$days++;
				}
			}
			//$date1 = $date1 +1;
			$date1 = date('Y-m-d', strtotime($date1. ' + 1 days'));
			echo "$days";
		}
		return $days;
	}

function connect_db(){
  try {
   return new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'tobedev', 'abcd.1234');
  } catch (PDOException $e) {
   print "Connection failed : " . $e->getMessage() . "<br/>";
  }
 }
 function GetPublicHoliday($start_date, $end_date)
 {
  $conn = connect_db();
  $strSQL = "SELECT PublicHoliday FROM public_holiday WHERE PublicHoliday BETWEEN '$start_date' AND '$end_date' ";
  $sth = $conn->prepare($strSQL);
  $sth->execute();
  return $sth->fetchAll(PDO::FETCH_COLUMN);
  $conn = null;
 }

mysql_close($objConnect);
?>


</body>
</html>

