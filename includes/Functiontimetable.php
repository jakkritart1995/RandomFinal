<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            
<?php


function Connect()
	{
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "randomfinal";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			$conn->query("set names utf8");
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}
			return $conn;
	}


//////////////////////////////////////////////////////////////DateDiff/////////////////////////////////////////////////////////////////////
function DateDiff($dateprimstart,$dateprimend,&$examdate)
	{
		$date1=($dateprimstart);
		$date2=($dateprimend);
		$days=0; $i=0;
		while ($date1<=$date2) 
		{
			//echo "$date1";
			$DayOfWeek = date("w", strtotime($date1));
			if (($DayOfWeek !=0) AND ($DayOfWeek !=6)) 
			{
				/*if ($level == 0)
				{
					$examdateprim[$i++] = $date1;
					$days++;
				} else if($level == 1)
				{
					$examdatesec[$i++] = $date1;
					$days++;
				}*/
				$examdate[$i++] = $date1;
				$days++;
			}
			//$date1 = $date1 +1;
			$date1 = date('Y-m-d', strtotime($date1. ' + 1 days'));
			//echo "$days";
		}
		return $days;
	}


//////////////////////////////////////////////////////////////CreateLevel/////////////////////////////////////////////////////////////////////
function CreateLevel(&$level,$conn)
	{
		
		$sql = "SELECT levelno, majorno,count(rno) AS countrno,min(rno) AS minrno,max(rno) AS maxrno  FROM room Group By levelno,majorno order by levelno,majorno";
		$result = $conn->query($sql);
		$level = array();

		if ($result->num_rows > 0) {
			$i = 0;
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	$j = 0;
		       // echo  "levelno: " . $row["levelno"]. " - majorno: " . $row["majorno"]. "countrno: " . $row["countrno"]. "minrno: " . $row["minrno"]." maxrno: " . $row["maxrno"]." <br>";
		        $level[$i][$j++] = $row["levelno"];
		        $level[$i][$j++] = $row["majorno"]; 
		        $level[$i][$j++] = $row["countrno"]; 
		        $level[$i][$j++] = $row["minrno"]; 
		        $level[$i][$j] = $row["maxrno"];
		        //echo "level[$i][$j] = ".$level[$i][$j];
		        $i++;
		    }
		} else {
			
		}
		return $level;
	}



//////////////////////////////////////////////////////////////CreateLevenum/////////////////////////////////////////////////////////////////////
function CreateLevelnum($conn)
	{
		
		$sql = "SELECT levelno,count(rno) AS countrno,min(rno) AS minrno,max(rno) AS maxrno  FROM room Group By levelno order by levelno";
		$result = $conn->query($sql);
		$levelnum = array();
		if ($result->num_rows > 0) {
			$r = 0;
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	$j = 0;
		        //echo  "levelno: " . $row["levelno"]. "countrno: " . $row["countrno"]. "minrno: " . $row["minrno"]." maxrno: " . $row["maxrno"]." <br>";
		        $levelnum[$r][$j++] = $row["levelno"];
		       // echo " levelnum[$r][$j] =".$levelnum[$r][$j++];
		        $levelnum[$r][$j++] = $row["countrno"];
		        //echo " levelnum[$r][$j] =".$levelnum[$r][$j++];
		        $levelnum[$r][$j++] = $row["minrno"];
		        //echo " levelnum[$r][$j] =".$levelnum[$r][$j++]; 
		        $levelnum[$r][$j] = $row["maxrno"];
		        //echo " levelnum[$r][$j] =".$levelnum[$r][$j];$r++;
		        $r++;
		    }
		} else {
			
		}
		return $levelnum;
	}

	function CreateSubject($maxlno, $conn ,&$Nsubj)
	{

				
				$subj = array();

				for ($i=0; $i <= $maxlno; $i++) 
					{
					for ($j=0; $j <3 ; $j++) 
						{ 
							
							//$s = "i";
							//$l = "j";
							//echo "$i , $j";
							$result = $conn->prepare('SELECT s.sno FROM subject s INNER JOIN learning l ON s.sno=l.sno WHERE lno = ? AND stype = ?');
							$temp = $result->bind_param('ii', $i, $j);
							//echo "$temp";
							$result->execute();
							$result->bind_result($sno);
							$result->store_result();
							$numRows = $result->num_rows;
							//echo "$j;";
							//$lno = $i;
							//$stype = $j;
								$k = 0;
							    while ($result->fetch()) {
       							 		//printf("%s \n", $sno);
    
							       	$subj[$i][$j][$k] = $sno;
							       //	echo "sno = $sno <br>";

							        //echo  "subj[$i][$j][$k] = ".$subj[$i][$j][$k]; 
							        $k++;
							    }
							    $Nsubj[$i][$j] = $k;
							    //echo "k2 = $k";

							    //echo "Nsubj[$i][$j] = ".$Nsubj[$i][$j];
							    $result->close();
								echo "<br>";
						}
								echo "<br>";

					}
						return $subj;
			}
	




function Findwar($conn, &$maxlno, &$maxlnoprim, &$maxsnoprim, &$maxlnosec)
{
		//หา maxlno 
		$sql = "SELECT MAX(lno) AS maxlno FROM learning_plan";
		$result = $conn->query($sql);
		$maxlno = 0;
		if ($result->num_rows > 0) {
			$i = 0;
		    
		    if($row = $result->fetch_assoc()) {
		    	$j = 0;
		        //echo  "maxlno: " . $row["maxlno"]. " <br>";
		        $maxlno = $row["maxlno"];
		    }
		} else {
			
		}
		//หา maxlnoprim

		$result = $conn->prepare("SELECT MAX(lno) AS lno FROM learning_plan WHERE levelno = ?");
		
		$temp = $result->bind_param('i', $i);
							$i = 5;
							//echo "$temp";
							$result->execute();
							$result->bind_result($lno);
							$result->store_result();
							$numRows = $result->num_rows;
		    if($result->fetch()) {
		        //echo  "maxlnoprim: " .$lno. " <br>";
		        $maxlnoprim = $lno;
		    }
			 else {
			
			}

		$result = $conn->prepare("SELECT MAX(sno) AS maxsnoprim FROM learning WHERE lno = ?");
		$temp = $result->bind_param('i', $maxlnoprim);
							//echo "$temp";
							$result->execute();
							$result->bind_result($maxsnoprim);
							$result->store_result();
							$numRows = $result->num_rows;
		    if($result->fetch()) {
		       // echo  "maxsnoprim: " . $maxsnoprim. " <br>";
		    }
			 else {
			
			}


			$result = $conn->prepare("SELECT MAX(lno) AS lno FROM learning_plan WHERE levelno = ?");
		
		$temp = $result->bind_param('i', $i);
							$i = 11;
							//echo "$temp";
							$result->execute();
							$result->bind_result($lno);
							$result->store_result();
							$numRows = $result->num_rows;
		    if($result->fetch()) {
		        //echo  "maxlnosec: " .$lno. " <br>";
		        $maxlnosec = $lno;
		    }
			 else {
			
			}
}



function FindNsubj($maxlnoprim, $Nsubj, $maxsnoprim, $maxlnosec, &$MaxNsubjprim, &$MaxNsubjsec)
{
	//echo "maxlnoprim = $maxlnoprim<br>";
	//echo "maxsnoprim = $maxsnoprim";
	//echo "<br>";

	$MaxNsubjprim = 0;
	$MaxNsubjsec = 0;

	for ($i=0; $i <=$maxlnoprim; $i++) 
		{	

			//echo "Nsubj[$i][0] = ".$Nsubj[$i][0]."<br>";
			$n = $Nsubj[$i][0]+$Nsubj[$i][1]+$Nsubj[$i][2];
			
			if ($n > $MaxNsubjprim) {
				$MaxNsubjprim = $n;
			}
		}
	for ($i=$maxlnoprim+1; $i <= $maxlnosec; $i++) { 
			$n = $Nsubj[$i][0]+$Nsubj[$i][1]+$Nsubj[$i][2];
			if ($n > $MaxNsubjsec) {
				$MaxNsubjsec = $n;
			}
		}
		//echo "$MaxNsubjprim<br>";
		//echo "$MaxNsubjsec";
}


////////////////////////////////////////////////////////////////////calNDay/////////////////////////////////////////////////////////////////////
function calNDay($MaxNsubjprim,$MaxNsubjsec,$conn,&$nDayprim,&$nDaysec,$timeprim,$timesec,&$educyear,&$sem,&$timetno)
	{
		$nDayprim1 = ceil($MaxNsubjprim/$timeprim);
		//echo "<b>ระดับประถม</b>";
		//echo "<br>";
		//echo "จำนวนวันท่ใช้สอบของระดับประถมอย่างน้อย $nDayprim1 วัน";
		//echo "<br>";
		$dateprimstart = $_POST["dateprimstart"];
		$dateprimend = $_POST["dateprimend"];
		$educyear = $_POST["educyear"];
		$sem = $_POST["sem"];

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




		$nDayprim2 = DateDiff($dateprimstart,$dateprimend,$examdateprim); //echo "$nDayprim2"; echo "$nDayprim1";
		//echo "จำนวนวันที่ใช้สอบ $nDayprim2 วัน";
		//echo "<br>";
		if ($nDayprim2 < $nDayprim1) {
			echo"<script language=\"JavaScript\">";
			echo"alert('จำนวนวันของชั้นประถมไม่พอ')";
			echo"</script>";
			echo "<meta http-equiv='refresh' content='0;URL=../Exambling.php'>";
		} else 
		{
				//echo "<br>";
				//echo "<br>";
				//echo "<b>ระดับมัธยม</b>";
				//echo "<br>";
				$nDaysec1 = ceil($MaxNsubjsec/$timesec);
				//echo "จำนวนวันท่ใช้สอบของระดับมธยมอย่างน้อย $nDaysec1 วัน";
				//echo "<br>";
				$datesecstart = $_POST["datesecstart"];
				$datesecend = $_POST["datesecend"];

				//echo "วันที่เริ่มต้นของประถม $datesecstart";
				//echo "<br>";
				//echo "วันที่สิ้นสุดของประถม $datesecend";
				//echo "<br>";


				$nDaysec2 = DateDiff($datesecstart,$datesecend,$examdatesec);
				//echo "จำนวนวันที่ใช้สอบ $nDaysec2 วัน";
				//echo "<br>";
				if ($nDaysec2 < $nDaysec1) {
					echo"<script language=\"JavaScript\">";
					echo"alert('จำนวนวันของชั้นมัธยมไม่พอ')";
					echo"</script>";
					echo "<meta http-equiv='refresh' content='0;URL=../Exambling.php'>";
				} else 
				{
					//echo "<br>";
					//echo "<br>";
					$nDayprim = $nDayprim2;
					//echo "$nDayprim";
					//echo "<br>";
					$nDaysec = $nDaysec2;
					//echo "$nDaysec";

					if ($nDayprim >= $nDayprim1 AND $nDaysec >= $nDaysec1)
					{
						$strSQL = "INSERT INTO timetable ";
						$strSQL .="(ttdate,educyear,sem) ";
						$strSQL .="VALUES ";
						$strSQL .="('".$_POST["ttdate"]."','".$_POST["educyear"]."','".$_POST["sem"]."') ";
						if ($conn->query($strSQL) === TRUE){
							 echo "New record created successfully 1";
						} else {
							    echo "Error: " . $sql . "<br>" . $conn->error;
							}


						$strSQL = "select max(timetno) AS timetno FROM timetable ";
						$result = $conn->query($strSQL);

						if ($result->num_rows > 0) {
						    while ($row = $result->fetch_assoc()) {
						    	$timetno = $row["timetno"];
						    	//echo "timetno: " .$row["timetno"];
						    	}

						    	/*$timet = mysql_fetch_array($result);
								mysql_free_result($result);
								$timetno = $timet[0];
								echo "$timetno";*/

								$strSQL = "INSERT INTO dateexam_prim ";
								$strSQL .="VALUES ";
								for ($i=0; $i < $nDayprim-1; $i++) { 
									$strSQL .= "('".$timetno."','".$examdateprim[$i]."'), "	;
								}
								$strSQL .= "('".$timetno."','".$examdateprim[$i]."'); ";					
								if ($conn->query($strSQL) === TRUE){
									 echo "New record created successfully 2";
								} else {
									    echo "Error: " . $sql . "<br>" . $conn->error;
									}

								$strSQL = "INSERT INTO dateexam_sec ";
								$strSQL .="VALUES ";
								for ($i=0; $i < $nDaysec-1; $i++) { 
									$strSQL .= "('".$timetno."','".$examdatesec[$i]."'), "	;
								}
								$strSQL .= "('".$timetno."','".$examdatesec[$i]."'); ";					
								if ($conn->query($strSQL) === TRUE){
									 echo "New record created successfully <br>";
								} else {
									    echo "Error: " . $sql . "<br>" . $conn->error;
									}

								//echo "strSQL";
								echo"<script language=\"JavaScript\">";
								echo"alert('บันทึกเรียบร้อย')";
								echo"</script>";
								
								echo "<meta http-equiv='refresh' content='0;URL=result.php'>";
						    
						}else{
							echo "0 results";
						}

						
					} else 
					{
						echo "กรอกข้อมูลใหม่";
						echo "<meta http-equiv='refresh' content='0;URL=../Exambling.php'>";
					}
				}

		}
	}



function FisherRandom($i, $j, $Nsubj){
	//echo "$Nsubj";
	$Fisher = array();
	for ($a=0; $a < $Nsubj; $a++) { 
		$s[$a][0] = $a;
		$s[$a][1] = 0;
	}
	$k = 0;

	srand( date("s") ); 
	for ($b = $Nsubj ; $b >= 0 ; $b--) { 
		$r = rand(0,$b);
		$e = 0;
		//echo "r = ".$r;

		for ($a=0; $a < $Nsubj; $a++) { 
			if ($s[$a][1] == 1) {
				
			}else{
				if ($e == $r) {
					$Fisher[$k] = $s[$a][0];
					$k = $k+1;
					$s[$a][1] = 1;
					break;
				}else{
					$e = $e+1;
				}

			}
		}
	}
	return $Fisher;
	
	



}


function SwitchSubj($maxlnoprim,$maxlnosec,$Nsubj,$subj,&$NewSubj_prim,&$NewSubj_sec){
	
	for ($i=0; $i <=$maxlnoprim; $i++) { 
		for ($j=0; $j <3 ; $j++) { 
			$Fisher = FisherRandom($i,$j,$Nsubj[$i][$j]);
			//echo "NewSubj_prim[$i][$j] =".$NewSubj_prim[$i][$j];

			for ($a=0; $a < $Nsubj[$i][$j]; $a++) { 
				$NewSubj_prim[$i][$j][$a] = $subj[$i][$j][$Fisher[$a]];
				//echo "NewSubj_prim[$i][$j][$a] =".$NewSubj_prim[$i][$j][$a] ."<br>";
				//echo "subj[$i][$j][$a] =".$subj[$i][$j][$a] ."<br>";

			}
		}
	}
	for ($i=$maxlnoprim+1; $i <= $maxlnosec ; $i++) { 
		for ($j=0; $j <3 ; $j++) { 
				$Fisher = FisherRandom($i,$j,$Nsubj[$i][$j]);

			for ($a=0; $a < $Nsubj[$i][$j]; $a++) { 
					$NewSubj_sec[$i][$j][$a] = $subj[$i][$j][$Fisher[$a]];
					//echo "NewSubj_sec[$i][$j][$a] =".$NewSubj_sec[$i][$j][$a] ."<br>";
				//echo "subj[$i][$j][$a] =".$subj[$i][$j][$a] ."<br>";

				
			}
		}
	}
	//echo "NewSubj_prim[0][0][0] =".$NewSubj_prim[0][0][0];
//echo "NewSubj_prim[0][2][0] =".$NewSubj_prim[0][2][0]."<br>";
	//echo "NewSubj_prim[5][1][0] =".$NewSubj_prim[5][1][0]."<br>";


	
}

function Stable($maxlnoprim,$maxlnosec,$level,$nDayprim,$nDaysec,$conn,$timeprim,$timesec,$itable_prim,&$stable_prim,$itable_sec,&$stable_sec,&$nroom,&$nroom2){


	$sql = "SELECT MAX(rno) AS maxrno FROM room";
		$result = $conn->query($sql);
		$maxrno = 0;
		if ($result->num_rows > 0) {
			$i = 0;
		    
		    if($row = $result->fetch_assoc()) {
		    	$j = 0;
		       // echo  "maxrno: " . $row["maxrno"]. " <br>";
		        $maxrno = $row["maxrno"];
		    }
		} else {
			
		} 

	$nroom = $maxrno;
	$nroom = $level[$maxlnoprim][4];
	$itable_prim = createitable_prim($nroom,$nDayprim);
	$stable_prim = createstable_prim($nroom,$timeprim,$nDayprim);

	$nroom2 = $level[$maxlnosec][4]-$nroom;
	$itable_sec = createitable_sec($nroom,$nDaysec);
	$stable_sec = createstable_sec($nroom,$timesec,$nDaysec);
	//echo "stable_prim[41][0][1]".$stable_prim[41][2][1]."<br>";
	//echo "stable_sec[1][0][0] =".$stable_sec[1][0][0]."<br>";
	//echo "stable_sec[49][0][0] =".$stable_sec[49][0][0]."<br>";
	
}

function createitable_prim($nroom,$nDayprim){

	$itable_prim = array();
	for ($i=0; $i < $nroom ; $i++) { 
		for ($j=0; $j < $nDayprim; $j++) {
			$itable_prim[$i][$j] = -1;
		}
	}
	return $itable_prim;

}

function createstable_prim($nroom,$timeprim,$nDayprim){

	$stable_prim = array();
	for ($i=0; $i < $nroom ; $i++) { 
		for ($j=0; $j < $timeprim; $j++) {
			for ($k=0; $k <$nDayprim ; $k++) { 
				$stable_prim[$i][$j][$k] = -1;
				//echo "sTable_prim[$i][$j][$k] =".$sTable_prim[$i][$j][$k] ;
			}
		}
	}
	return $stable_prim;

}

function createitable_sec($nroom,$nDaysec){

	$itable_sec = array();
	for ($i=0; $i < $nroom ; $i++) { 
		for ($j=0; $j < $nDaysec; $j++) {
			$itable_sec[$i][$j] = -1;
		}
	}
	return $itable_sec;
}

function createstable_sec($nroom,$timesec,$nDaysec){

	$stable_sec = array();
	for ($i=0; $i < $nroom ; $i++) { 
		for ($j=0; $j < $timesec; $j++) {
			for ($k=0; $k <$nDaysec; $k++) { 
				$stable_sec[$i][$j][$k] = -1;
			}
		}
	}
	return $stable_sec;
}

function AssignType0_prim($maxlnoprim,$nDayprim,$levelnum,$timeprim,$level,&$stable_prim,$NewSubj_prim,$Nsubj){

	$countclassprim = 0;
	for ($l=0; $l < $maxlnoprim; $l++) { 
		//echo "$l";
		$sno = 0;
		$type = 0;
		$nDay = $nDayprim;
		//echo "$nDay";

		for ($i=0; $i < $timeprim; $i++) { 
					//echo "$i";

			for ($j=0; $j < $nDay; $j++) { 
					//echo "$j";
				$levelno = $level[$l][0];
				$brno = $levelnum[$levelno][2];
				$erno = $levelnum[$levelno][3];
				//echo "$levelno $brno $erno <br>";

				//echo " $levelno ";

				for ($r=$brno; $r <=$erno; $r++) { 
					//echo "$r<br>";
					//echo "$i<br>";
					//echo "$sno<br>";
					$stable_prim[$r][$i][$j] = $NewSubj_prim[$l][$type][$sno];
					//echo "stable_prim[$r][$i][$j]".$stable_prim[$r][$i][$j]."<br>";
					//echo "NewSubj_prim[$l][$type][$sno] =".$NewSubj_prim[$l][$type][$sno];

					
					$countclassprim = $countclassprim+1;
					//echo "$r<br>";
					//echo "$erno<br>";
				}
				$sno++;
				//echo "stable_prim[$r][$i][$l] =".$stable_prim[$r][$i][$l];
				if ($sno == $Nsubj[$l][$type]) {
					break;
				}
			}

			if ($sno == $Nsubj[$l][$type]) {
				break;
			}
		}
	}
	//echo "stable_prim[1][1][0];".$stable_prim[1][1][0] ."<br>";
}

function AssignType2_prim ($maxlnoprim,$nDayprim,$timeprim,$level,&$stable_prim,$NewSubj_prim,$Nsubj){
	$countclassprim = 0;
	for ($l=0; $l < $maxlnoprim ; $l++) { 
		$sno = 0;
		$type = 2;
		$nDay = $nDayprim-1;
		//echo "$nDay<br>";
		if ($Nsubj[$l][$type] > 0)  {
		//echo "$nDay<br>";
			for ($j=$nDay; $j >= 0; $j--) { 
				for ($i=0; $i < $timeprim; $i++) { 
					$brno = $level[$l][3];
					$erno = $level[$l][4];
					//echo "$l $brno $i $j,";
					//echo "stable_prim[$brno][$i][$j] =".$stable_prim[0][0][0]."<br>";
					if (($stable_prim[$brno][$i][$j])==-1) {
						for ($r=$brno; $r <= $erno ; $r++) { 
							$stable_prim[$r][$i][$j] = $NewSubj_prim[$l][$type][$sno];
							//echo "stable_prim[$r][$i][$j]<br>".$stable_prim[$r][$i][$j];
							//echo "NewSubj_prim[$l][$type][$sno] =".$NewSubj_prim[$l][$type][$sno];
							$countclassprim = $countclassprim++;
						}
					}

					$sno++;
					if ($sro == $Nsubj[$l][$type]) {
						break;
					}
				}

					if ($sno == $Nsubj[$l][$type]) {
						break;
					}
			}


		//echo "จำนวนวัน l = $l ไม่พอ";

		}
	}
}

function AssignType1_prim($maxlnoprim,$nDayprim,$levelnum,$timeprim,$level,&$stable_prim,&$NewSubj_prim,$Nsubj){

	//for ($i=0; $i < $maxlnoprim ; $i++) { 
		//echo $levelnum[$i][3] ." <br>";
	//}

	$countclassprim = 0;
	for ($l=0; $l <= $maxlnoprim ; $l++) { 
		$sno = 0;
		$type = 1;
		$nDay = $nDayprim;
		//echo "$nDay";

		for ($j=0; $j <$nDay; $j++) { 
			for ($i=0; $i <$timeprim; $i++) { 
				$levelno = $level[$l][0];
				$brno = $levelnum[$levelno][2];
				$erno = $levelnum[$levelno][3];
				//echo "$levelno ,$brno, $erno <br> ";
				//echo "stable_prim[$brno][$i][$j]".$stable_prim[$brno][$i][$j]."<br>";
				if (($stable_prim[$brno][$i][$j])==-1){
					for ($r=$brno; $r <= $erno ; $r++) { 
						$stable_prim[$r][$i][$j] = $NewSubj_prim[$l][$type][$sno];
						//echo "stable_prim[$r][$i][$j]".$stable_prim[$r][$i][$j]."<br>";
						//echo "NewSubj_prim[$l][$type][$sno] =".$NewSubj_prim[$l][$type][$sno]."<br>";
						$countclassprim = $countclassprim++;
					}
					$sno++;
					//echo "stable_prim[$r][$i][$l] =".$stable_prim[$r][$i][$l];
					
				}
				if ($sno == $Nsubj[$l][$type]) {
					break;
					}
					
			}
			if ($sno == $Nsubj[$l][$type]) {
				break;
			}


		}

		//echo "จำนวนวัน l = $l ไม่พอ";
			
		
	}
		

}



function AssignType0_sec($maxlnoprim,$maxlnosec,$nDaysec,$levelnum,$timesec,$level,&$stable_sec,$NewSubj_sec,$Nsubj){
	//echo "stable_sec[0][0][0] =".$stable_sec[0][0][0]."<br>";
	$countclasssec = 0;
	$minrnosec = $levelnum[5][3]+1;
	//echo $minrnosec;
	for ($l=$maxlnoprim+1; $l <= $maxlnosec; $l++) {
		//echo "$maxlnosec";
		$sno = 0;
		$type = 0;
		$nDay = $nDaysec;
		//echo "$nDay";

		for ($i=0; $i < $timesec; $i++) { 
					//echo "$i";

			for ($j=0; $j < $nDay; $j++) { 
					//echo "$j";
				$levelno = $level[$l][0];
				$brno = $levelnum[$levelno][2];
				$erno = $levelnum[$levelno][3];
				//echo "$levelno $brno $erno <br>";

				//echo " $levelno ";

				for ($r=$brno; $r <= $erno; $r++) { 
					//echo "$r<br>";
					//echo "$erno<br>";
					//echo "$l<br>";
					$stable_sec[$r-$minrnosec][$i][$j] = $NewSubj_sec[$l][$type][$sno];
					
					//echo "stable_sec[$r-$minrnosec][$i][$j] =".$stable_sec[$r-$minrnosec][$i][$j]."<br>";
					//echo "NewSubj_sec[$l][$type][$sno] =".$NewSubj_sec[$l][$type][$sno]."<br>";
					

					
					$countclasssec = $countclasssec+1;
					//echo "$r<br>";
					//echo "$erno<br>";
				}
				$sno++;
				//echo "stable_prim[$r][$i][$l] =".$stable_prim[$r][$i][$l];
				if ($sno == $Nsubj[$l][$type]) {
					break;
				}
			}

			if ($sno == $Nsubj[$l][$type]) {
				break;
			}
		}
	}
	//echo "stable_sec[0][0][0] =".$stable_sec[0][0][0]."<br>";
}


function AssignType2_sec ($maxlnoprim,$maxlnosec,$nDaysec,$timesec,$levelnum,$level,&$stable_sec,&$NewSubj_sec,$Nsubj){
	//echo "stable_sec[6][0][0] =".$stable_sec[6][0][0]."<br>";
	$countclasssec = 0;
	$minrnosec = $levelnum[5][3]+1;
	for ($l=$maxlnoprim+1; $l < $maxlnosec ; $l++) { 
		$sno = 0;
		$type = 2;
		$nDay = $nDaysec-1;
		if ($Nsubj[$l][$type] > 0)  {
		//echo "$maxlnoprim<br>";
			for ($i=0; $i < $timesec; $i++) { 
				for ($j=0; $j <= $nDay; $j++) { 
				
					$brno = $level[$l][3];
					$erno = $level[$l][4];
					//echo "$l $brno $i $j,";
					//echo "stable_sec[$brno-$minrnosec][$i][$j] =".$stable_sec[$brno-$minrnosec][$i][$j]."<br>";
					if (($stable_sec[$brno-$minrnosec][$i][$j])==-1) {
						for ($r=$brno; $r <= $erno ; $r++) { 
							$stable_sec[$r-$minrnosec][$i][$j] = $NewSubj_sec[$l][$type][$sno];
							//echo "stable_sec[$r-$minrnosec][$i][$j]".$stable_sec[$r-$minrnosec][$i][$j]."<br>";
							//echo "NewSubj_sec[$l][$type][$sno] =".$NewSubj_sec[$l][$type][$sno];
							$countclasssec = $countclasssec++;
						}
					}

					$sno++;
					if ($sno == $Nsubj[$l][$type]) {
						break;
					}
				}

					if ($sno == $Nsubj[$l][$type]) {
						break;
					}
			}


		//echo "จำนวนวัน l = $l ไม่พอ";
		}
	}
}

function AssignType1_sec($maxlnoprim,$maxlnosec,$nDaysec,$levelnum,$timesec,$level,&$stable_sec,&$NewSubj_sec,$Nsubj){

	//for ($i=0; $i < $maxlnoprim ; $i++) { 
		//echo $levelnum[$i][3] ." <br>";
	//}
 	$minrnosec = $levelnum[5][3]+1;
	$countclasssec = 0;
	for ($l=$maxlnoprim+1; $l <= $maxlnosec ; $l++) { 
		$sno = 0;
		$type = 1;
		$nDay = $nDaysec;
		//echo "$nDay";

		for ($j=0; $j <$nDay; $j++) { 
			for ($i=0; $i <$timesec; $i++) { 
				$levelno = $level[$l][0];
				$brno = $levelnum[$levelno][2];
				$erno = $levelnum[$levelno][3];
				//echo "$levelno ,$brno, $erno <br> ";
				//echo "stable_sec[$brno][$i][$j]".$stable_sec[$brno][$i][$j]."<br>";
				if (($stable_sec[$brno-$minrnosec][$i][$j])==-1){
					for ($r=$brno; $r <= $erno ; $r++) { 
						$stable_sec[$r-$minrnosec][$i][$j] = $NewSubj_sec[$l][$type][$sno];
						//echo "stable_sec[$r-$minrnosec][$i][$j]".$stable_sec[$r-$minrnosec][$i][$j]."<br>";
						//echo "NewSubj_prim[$l][$type][$sno] =".$NewSubj_prim[$l][$type][$sno]."<br>";
						$countclasssec = $countclasssec++;
					}
					$sno++;
					//echo "stable_prim[$r][$i][$l] =".$stable_prim[$r][$i][$l];
					
				}
				if ($sno == $Nsubj[$l][$type]) {
					break;
					}
					
			}
			if ($sno == $Nsubj[$l][$type]) {
				break;
			}


		}

		//echo "จำนวนวัน l = $l ไม่พอ";
			
		
	}
		

}


function SaveTable_prim($educyear,$sem,$nDayprim,$timeprim,$nroomprim,&$stable_prim,$timetno,$conn){

	$strSQL = "INSERT INTO `savetable` (`educyear`, `sem`, `dno`, `tno`, `sno`, `timetno`, `rno`) VALUES ";
						
					
	//echo "stable_prim[0][0][0] =".$stable_prim[0][0][0];
	for ($i=0; $i < $nDayprim ; $i++) { 
		for ($j=0; $j < $timeprim ; $j++) { 
			for ($t=0; $t < $nroomprim; $t++) { 
					if (($i == $nDayprim-1) && ($j == $timeprim-1) && ($t == $nroomprim-1)) {
						$strSQL .= "('".$educyear."','".$sem."','".$i."','".$j."','".$stable_prim[$t][$j][$i]."','".$timetno."','".$t."') ; ";
					}else{
						$strSQL .= "('".$educyear."','".$sem."','".$i."','".$j."','".$stable_prim[$t][$j][$i]."','".$timetno."','".$t."') , ";
					}
			}
		}
	}
	//echo "$strSQL";

	if ($conn->query($strSQL) === TRUE){
							 echo "New record created successfully 1";
						} else {
							    echo "Error: " . $strSQL . "<br>" . $conn->error;
							}

}

function SaveTable_sec($educyear,$sem,$nDaysec,$timesec,$nroomsec,&$stable_sec,$timetno,$conn,$levelnum){

	$strSQL = "INSERT INTO `savetable` (`educyear`, `sem`, `dno`, `tno`, `sno`, `timetno`, `rno`) VALUES ";
						
	$minrnosec = $levelnum[5][3]+1;		
	//echo "stable_prim[0][0][0] =".$stable_prim[0][0][0];
	for ($i=0; $i < $nDaysec ; $i++) { 
		for ($j=0; $j < $timesec ; $j++) { 
			for ($t=0; $t < $nroomsec; $t++) { 
				$rnosec =  $minrnosec+$t;
					if (($i == $nDaysec-1) && ($j == $timesec-1) && ($t == $nroomsec-1)) {
						$strSQL .= "('".$educyear."','".$sem."','".$i."','".$j."','".$stable_sec[$t][$j][$i]."','".$timetno."','".$rnosec."') ; ";
					}else{
						$strSQL .= "('".$educyear."','".$sem."','".$i."','".$j."','".$stable_sec[$t][$j][$i]."','".$timetno."','".$rnosec."') , ";
					}
			}
		}
	}
	//echo "$strSQL";


	if ($conn->query($strSQL) === TRUE){
							 echo "New record created successfully 1";
						} else {
							    echo "Error: " . $strSQL . "<br>" . $conn->error;
							}

}





function ShowTable($conn,$levelnum){

		$minrnosec = $levelnum[5][3]+1;	
		$sql = "SELECT MAX(timetno) AS maxtimetno FROM savetable";
		$result = $conn->query($sql);
		$maxeno = 0;
		if ($result->num_rows > 0) {
			$i = 0;
		    
		    if($row = $result->fetch_assoc()) {
		    	$j = 0;
		        //echo  "maxlno: " . $row["maxlno"]. " <br>";
		        $maxtimetno = $row["maxtimetno"];
		    }
		} else {
			
		}
  	$result->close();

	$result = $conn->prepare("SELECT r.rname,st.dno,t.etime,s.sids FROM ((savetable st INNER JOIN time_prim t ON st.tno=t.tno) INNER JOIN subject s ON s.sno=st.sno) INNER JOIN room r ON st.rno=r.rno");

	//$result = $conn->prepare("SELECT r.rname,st.dno,t.etime,s.sids FROM ((savetable st INNER JOIN time_prim t ON st.tno=t.tno) INNER JOIN subject s ON s.sno=st.sno) INNER JOIN room r ON st.rno=r.rno WHERE timetno = ? AND rno < ? ORDER BY st.rno,st.dno,t.tno");

							$temp = $result->bind_param('ii', $maxtimetno,$minrnosec);
							//echo "$temp";
							$result->execute();
							$result->bind_result($rname,$dno,$etime,$sid);
							$result->store_result();
							$numRows = $result->num_rows;
							//echo "$j;";
							//$lno = $i;
							//$stype = $j;


								?><br>
								 <div align="Center">
                                   <div class="btn-group">
                                    <a class="btn btn-default" href="..\admin2.php" role="button">หน้าหลัก</a>
                                    <a class="btn btn-default" href="..\Exambling.php" role="button">จัดตารางสอบ</a>
                                    <button type="button" class="btn btn-primary">ตารางสอบ</button>
                                    </div>
                                
                                <br><h3><b>ตารางสอบ</b></h3>
                                </div>
								
							<table id="example" class="display" cellspacing="0" width="100%">
						        <thead>
						            <tr>
						                <th> <div align="center">ระดับชั้น </div></th>
						                <th> <div align="center">วันที่สอบ </div></th>
						                <th> <div align="center">เวลาสอบ </div></th>
						                <th> <div align="center">วิชาที่สอบ </div></th>
						            </tr>
						        </thead>
						        <tbody>
									<?php while ($result->fetch()) { ?>

										     <tr>
							                    <td><div align="center"><?php echo $rname ?></div></td>
							                    <td><div align="center"><?php echo $dno ?></div></td>
							                    <td><div align="center"><?php echo $etime ?></div></td>
							                    <td><div align="center"><?php echo $sid ?></div></td>
							                 </tr>
								</tbody>


						  <?php } ?>
					<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
				    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
				    <script type="text/javascript">
				        $(document).ready(function() {
				            $('#example').DataTable();
				        } );
				    </script>




 
	<?php 
	//echo "$minrnosec";
	$result = $conn->prepare("SELECT r.rname,st.dno,t.etime,s.sids FROM ((savetable st INNER JOIN time_sec t ON st.tno=t.tno) INNER JOIN subject s ON s.sno=st.sno) INNER JOIN room r ON st.rno=r.rno WHERE timetno = ? AND rno >= ? ORDER BY st.rno,st.dno,t.tno");
							$temp = $result->bind_param('ii', $maxtimetno,$minrnosec);
							//echo "$temp";
							$result->execute();
							$result->bind_result($rname,$dno,$etime,$sid);
							$result->store_result();
							$numRows = $result->num_rows;

							?><br>
								 <div align="Center">
                                   <div class="btn-group">
                                    <a class="btn btn-default" href="..\admin2.php" role="button">หน้าหลัก</a>
                                    <a class="btn btn-default" href="..\Exambling.php" role="button">จัดตารางสอบ</a>
                                    <button type="button" class="btn btn-primary">ตารางสอบ</button>
                                    </div>
                                
                                <br><h3><b>ตารางสอบ</b></h3>
                                </div>
								
							<table id="example" class="display" cellspacing="0" width="100%">
						        <thead>
						            <tr>
						                <th> <div align="center">ระดับชั้น </div></th>
						                <th> <div align="center">วันที่สอบ </div></th>
						                <th> <div align="center">เวลาสอบ </div></th>
						                <th> <div align="center">วิชาที่สอบ </div></th>
						            </tr>
						        </thead>
						        <tbody>
									<?php while ($result->fetch()) { ?>

										     <tr>
							                    <td><div align="center"><?php echo $rname ?></div></td>
							                    <td><div align="center"><?php echo $dno ?></div></td>
							                    <td><div align="center"><?php echo $etime ?></div></td>
							                    <td><div align="center"><?php echo $sid ?></div></td>
							                 </tr>
								</tbody>


						  <?php } ?>
					<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
				    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
				    <script type="text/javascript">
				        $(document).ready(function() {
				            $('#example').DataTable();
				        } );
				    </script>



				    			<?php
							    $result->close();

	}


/*function ShowTablesec($conn){

		$sql = "SELECT MAX(timetno) AS maxtimetno FROM savetable";
		$result = $conn->query($sql);
		$maxeno = 0;
		if ($result->num_rows > 0) {
			$i = 0;
		    
		    if($row = $result->fetch_assoc()) {
		    	$j = 0;
		        //echo  "maxlno: " . $row["maxlno"]. " <br>";
		        $maxtimetno = $row["maxtimetno"];
		    }
		} else {
			
		}
  	$result->close();

  	//echo "$maxtimetno";
	$result = $conn->prepare("SELECT r.rname,st.dno,t.etime,s.sids FROM ((savetable st INNER JOIN time_sec t ON st.tno=t.tno) INNER JOIN subject s ON s.sno=st.sno) INNER JOIN room r ON st.rno=r.rno WHERE timetno = ? ORDER BY st.rno,st.dno,t.tno");
							$temp = $result->bind_param('i', $maxtimetno);
							//echo "$temp";
							$result->execute();
							$result->bind_result($rname,$dno,$etime,$sid);
							$result->store_result();
							$numRows = $result->num_rows;
							//echo "$j;";
							//$lno = $i;
							//$stype = $j;


								?><br>
								 <div align="Center">
                                   <div class="btn-group">
                                    <a class="btn btn-default" href="..\admin2.php" role="button">หน้าหลัก</a>
                                    <a class="btn btn-default" href="..\Exambling.php" role="button">จัดตารางสอบ</a>
                                    <button type="button" class="btn btn-primary">ตารางสอบ</button>
                                    </div>
                                
                                <br><h3><b>ตารางสอบ</b></h3>
                                </div>
								
							<table id="example" class="display" cellspacing="0" width="100%">
						        <thead>
						            <tr>
						                <th> <div align="center">ระดับชั้น </div></th>
						                <th> <div align="center">วันที่สอบ </div></th>
						                <th> <div align="center">เวลาสอบ </div></th>
						                <th> <div align="center">วิชาที่สอบ </div></th>
						            </tr>
						        </thead>
						        <tbody>
									<?php while ($result->fetch()) { ?>

										     <tr>
							                    <td><div align="center"><?php echo $rname ?></div></td>
							                    <td><div align="center"><?php echo $dno ?></div></td>
							                    <td><div align="center"><?php echo $etime ?></div></td>
							                    <td><div align="center"><?php echo $sid ?></div></td>
							                 </tr>
								</tbody>


						  <?php } ?>
					<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
				    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
				    <script type="text/javascript">
				        $(document).ready(function() {
				            $('#example').DataTable();
				        } );
				    </script>




 
							    <?php 

							    $result->close();

	}

*/

?>


