<?php

$con=new mysqli("localhost","root","","auto_park_navigator");

if($con->connect_error)
{
    die("connection failed".$con->connect_error);
}
?>

