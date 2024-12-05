<?php
   
      require 'config.php';
     
      //validate user input
      
      $ID = $_POST["uID"];
      $Name = $_POST["uname"];
      $Phone_number = $_POST["uTP"];
      $Address= $_POST["uADD"];
      $Email=$_POST[ "uEmail"];
      $current_password = $_POST["Cp"];
      $new_password = $_POST["Np"];
      $confirm_password = $_POST["Cop"];

      // Check for empty fields
 if ( empty($ID) || empty($Name) || empty($Phone_number) || empty($Address) || empty($Email) || empty($current_password) ||empty($new_password) || empty($confirm_password) ) {
     echo "Please fill in all fields";
     exit;
 }

      $sql="INSERT INTO user_account VALUES('$ID ','$Name','$Phone_number','$Address','$Email','$current_password','$new_password','$confirm_password')";
   
       if($con->query($sql)){

            echo "Insert successful";
       }
       else{

            echo "Error".$con->error;
       }

       $con->close();

   ?>