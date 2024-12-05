<?php

require 'config.php';


$cusName=$_POST["cName"];


$sql="DELETE FROM registration WHERE FullName ='$cusName'";


if($con->query($sql))
{
    echo"Deleted";
}
else
{
    echo"Not success";
}



?>