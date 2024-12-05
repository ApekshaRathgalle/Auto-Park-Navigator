
<?php
require 'config.php';

if (isset($_GET["ID"])) {
  $ID = $_GET["ID"];
} else {
  echo "Invalid request";
  exit;
}





// Update database
if (isset($_POST["uID"])) {
  $ID = $_POST["uID"];
  $Name = $_POST["uname"];
  $Phone_number = $_POST["uTP"];
  $Address = $_POST["uADD"];
  $Email = $_POST["uEmail"];
  $current_password = $_POST["Cp"];
  $new_password = $_POST["Np"];
  $confirm_password = $_POST["Cop"];

  if (empty($Name) || empty($Phone_number) || empty($Address) || empty($Email) || empty($current_password) ||empty($new_password) || empty($confirm_password) || empty($confirm_password)) {
    echo "All fields are required";
  } else {
    $sql = "UPDATE user_account set Name='$Name', Phone_number='$Phone_number', Address='$Address', Email='$Email' , ID='$ID',  current_password='$current_password', new_password='$new_password',  confirm_password='$confirm_password'WHERE Address='$ID'";
    if ($con->query($sql)) {
      echo "Updated successfully";
    } else {
      echo "Update failed";
    }
  }
}

$con->close();
?>

  