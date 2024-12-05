<?php

require 'config.php';


$custName=$_POST["bName"];


$sql="DELETE FROM bookpspace WHERE Name ='$custName'";


if($con->query($sql))
{
    echo"Deleted";
}
else
{
    echo"Not success";
}



?>