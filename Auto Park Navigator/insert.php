<?php
require 'config.php';

$custName=$_POST["bName"];
$custVehicleType=$_POST["bVehicleType"];
$custContact=$_POST["bContact"];
$custEmail=$_POST["bEmail"];
$custDate=$_POST["bDate"];
$custCheckin=$_POST["bcheckin"];
$custCheckout=$_POST["bcheckout"];



$sql="INSERT INTO bookpspace VALUES ('$custName','$custVehicleType','$custContact','$custEmail','$custDate','$custCheckin','$custCheckout')";

if($con->query($sql))
{
    echo "Insert successful";
}else{
    echo "Error".$con->error;
}

$con->close();



?>