<?php

require 'config.php';

$cusName=$_POST["cName"];
$cusEmail=$_POST["cEmail"];
$cusMobileNo=$_POST["cMobileNo"];
$cusVehicleType=$_POST["cVehicleType"];
$cusVehicalnumber=$_POST["cVehiclenumber"];

if(empty($cusName)||empty($cusEmail)||empty($$cusMobileNo)||empty($cusVehicleType)||empty($cusVehicalnumber))
{
    echo "All Required";
}
else
{
    $sql="UPDATE registration SET FullName='$cusName',Email='$cusEmail',MobileNo='$cusMobileNo',VehicleType='$cusVehicleType',Vehiclenumber='$cusVehicalnumber' WHERE FullName='$cusName'";

    if($con->query($sql))
    {
        echo "Updated";
    }
    else
    {
        echo "Not Updated";
    }
}

?>