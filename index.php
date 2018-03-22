<html>
<head>
<title> Successful Booking Details</title>
</script>
</head>
<body>

<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

ini_set("display_error","1");

$pnr=($_REQUEST['pnr']);

#$pnr=$argv[1];
#echo $tid;
        $dt=date("Y")."-".date("m")."-".date("d");
       #$dt=date("Y").":".date("m").":".date("d");
$hour="00";
$fdate=$dt." ".$hour.":00:00";
$db_host = 'localhost';
$db_user = 'booking_user';
$db_pwd = 'book@123';

$database = 'booking_db';
$table = 'booking_xml';

if (!mysqli_connect($db_host, $db_user, $db_pwd)) {
    die("Can't connect to database");

}
#echo "Connected successfully";
$con = mysqli_connect($db_host, $db_user, $db_pwd);
if (!mysqli_select_db($con,$database))

    die("Can't select database");


#$variable = $argv[1];

#$sql2="SELECT pnr,booking_status FROM `booking_db`.booking_queue WHERE pnr = '$pnr'"; 
#$sql2="SELECT * FROM `booking_db`.booking_queue WHERE pnr = '$pnr'";
$sql2="show tables";
#print $sql2;



if ($result2 = mysqli_query($con, $sql2, MYSQLI_USE_RESULT)) {

    //mysqli_free_result($result2);
}


#print $result2;
if (!$result2) {
 die("no records found".mysqli_connect_error());
}

#<?php
#$output = shell_exec("./getresponse.sh");
#echo $result;



/*
while($row = mysqli_fetch_array($result2))
{

echo json_encode($row); 
#        $hr[$var]=$row["hr"];
        $fail_Arr[$var][0]=$row["pnr"];
        $fail_Arr[$var][1]=$row["booking_status"];

## Getting booking status
} 

*/


$i=0;
$post = array();
while($articles_info = mysqli_fetch_array($result2)) {
 print $articles_info['0'];
for ($i=1;$i<=10;$i++)
{
 print $articles_info['$i'];
  //$json['streamitem_content'] = $articles_info['streamitem_content'];
 // $json['streamitem_timestamp'] = $articles_info['streamitem_timestamp'];
  // Don't do this!
  //mysqli_free_result($articles_data);
}
print $articles_info['pnr'];
}
// If you need to, free it outside the loop
#mysqli_free_result($result2);
mysqli_free_result($result2);
echo "\n";


echo "<table border='1' bordercolor=#e1e1e1 cellspacing=1 cellpadding=1 align=center>";
echo "<tr bgcolor=#f1f1f1>";
echo "<td bgcolor=#f1f1f1><font face=arial size=2 color=blue><b>S No.</b></td>";
echo "<td bgcolor=#f1f1f1><font face=arial size=2 color=blue><b>Time</b></td>";
echo "<td bgcolor=#f1f1f1><font face=arial size=2 color=blue><b>S PNR</b></td>";
echo "<td bgcolor=#f1f1f1><font face=arial size=2 color=blue><b>MO Status</b></td>";
echo "</tr>";

$var=1;
for($c=0;$c != count($fail_Arr);$c++)
{
                echo "<tr bgcolor=#f1f1f1>";
                echo "<td align=center><font face=arial size=2 color=black>".$var."</font></td>";
                echo "<td align=center><font face=arial size=2 color=black>&nbsp;".$fail_Arr[$c][0]."&nbsp;</font></td>";
              #  echo "<td align=center><font face=arial size=2 color=black>&nbsp;".$fail_Arr[$c][1]."&nbsp;</font></td>";
                #echo "<td align=center><font face=arial size=2 color=black>".$fail_Arr[$c][2]."</font></td>";
                echo "</tr>";
                $var++;
}
?>

</body></html>


