<?php

require 'config.php';

$custName=$_POST["bName"];
$custVehicleType=$_POST["bVehicleType"];
$custContact=$_POST["bContact"];
$custEmail=$_POST["bEmail"];
$custDate=$_POST["bDate"];
$custCheckin=$_POST["bCheckin"];
$custCheckout=$_POST["bCheckout"];

if(empty($custName)||empty($custVehicleType)||empty($custContact)||empty($custEmail)||empty($custDate)||empty($custCheckin)||empty($custCheckout))
{
    echo "All Required";
}
else
{
    $sql="UPDATE bookpspace SET Name='$custName', VehicalType ='$custVehicleType',Contact='$custContact',Email='$custEmail', Date='$custDate',Checkin='$custCheckin',Checkout='$custCheckout' WHERE Name='$custName'";

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