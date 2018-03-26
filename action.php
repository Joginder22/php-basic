<html>

<title>Coeffe Member details</title>
<?php 
include 'database.php';
ini_set('display_errors',1);
error_reporting(E_ALL);

echo "<table>";
    echo "<tr>";
        echo "<th>ID</th>
            <th>NAME</th>
            <th>CREATION DATE</th>
            <th>COEFEE TAG</th>
             </tr>";
$sql="SELECT * FROM `booking_db`.Linuxadmin;";
$cdresult = mysqli_query($conn, $sql, MYSQLI_USE_RESULT) or die('error of query');

#$glroom=$cdresult->fetch_assoc();
#print json_encode($glroom);
# print $glroom['id'];


    while ($cdrow=$cdresult->fetch_assoc()) {

     # print json_encode($cdrow);

        $ID=$cdrow["id"];
        $NAME=$cdrow["Name"];
        $Created_on=$cdrow["Created_on"];
        $Coeffee_check=$cdrow["Coeffee_check"];
       # echo "<tr>";
        echo "<tr><td>$ID</td>
                <td>$NAME</td>
                <td>$Created_on</td>
                <td>$Coeffee_check</td></tr>";
    }
#mysqli_close($conn);

echo "</table>";

?>


<?php

$NAME=$_REQUEST['Name'];
#echo "name is ". $NAME; 
$sql2="insert into `booking_db`.Linuxadmin (Name,Created_on) values('$NAME',Now());";
mysqli_query($conn, $sql2) or die('Error submitting details');
mysqli_close($conn);
?>
</html>

