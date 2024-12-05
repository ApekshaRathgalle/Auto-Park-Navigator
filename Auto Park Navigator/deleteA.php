<?php
require 'config.php';

$ID = $_POST["uID"];
$Name = $_POST["uname"];
$Phone_number = $_POST["uTP"];
$Address = $_POST["uADD"];
$Email = $_POST["uEmail"];
$current_password = $_POST["Cp"];
$new_password = $_POST["Np"];
$confirm_password = $_POST["Cop"];

// Create a prepared statement
$stmt = $con->prepare("DELETE FROM user_account WHERE ID=? AND Name=? AND Phone_number=? AND Address=? AND Email=? AND current_password=? AND new_password=? AND confirm_password=?");
$stmt->bind_param("isssssss", $ID, $Name, $Phone_number, $Address, $Email, $current_password, $new_password, $confirm_password);

// Execute the prepared statement
if ($stmt->execute()) {
    echo "Deleted";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$con->close();
?>