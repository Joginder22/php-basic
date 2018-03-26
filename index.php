
<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

ini_set("display_error","1");

$pnr=(int)($_REQUEST['pnr']);


#echo $pnr.  'is the pnr';
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
{
  die("Can't select database");

}
$sql2="SELECT * FROM `booking_db`.booking_queue WHERE pnr = $pnr;";


if ($result2 = mysqli_query($con, $sql2, MYSQLI_USE_RESULT)) {

    //mysqli_free_result($result2);
}


#print $result2;
if (!$result2) {
 die("no records found".mysqli_connect_error());
}

#echo 123

$data = $result2->fetch_assoc();

#print  json_encode($data);

echo $data['booking_status'];


mysqli_free_result($result2);
echo "\n";


?>



