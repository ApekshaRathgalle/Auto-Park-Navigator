<?php
require 'config.php';

$cusName=$_POST["cName"];
$cusEmail=$_POST["cEmail"];
$cusMobileNo=$_POST["cMobileNo"];
$cusVehicleType=$_POST["cVehicleType"];
$cusVehicalnumber=$_POST["cVehiclenumber"];


$sql="INSERT INTO registration VALUES ('$cusName','$cusEmail','$cusMobileNo','$cusVehicleType','$cusVehiclenumber')";

if($con->query($sql))
{
    echo "Insert successful";
}else{
    echo "Error".$con->error;
}

$con->close();



?>