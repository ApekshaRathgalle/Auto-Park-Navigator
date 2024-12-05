<!DOCTYPE html>
<html>
<head>
  
<link rel="stylesheet" href="tableA.css">


</head>
<body>
   <?php

require 'config.php';


$sql="SELECT  ID ,Name,Phone_number,Address,Email,current_password,new_password,confirm_password FROM user_account";



//All adata are store here -$result
$result = $con->query($sql);

//stsrt a table to dispaly the results
  
   echo "<center><table border='5'  >";
if($result->num_rows > 0){

   while($row = $result->fetch_assoc()){

    echo "<tr>";

    //fetch_assoc used to read row by row from all the results

      echo "<td>".$row["ID"]."</td>";
      echo "<td>".$row["Name"]."</td>";
      echo "<td>".$row["Phone_number"]."</td>";
      echo "<td>".$row["Address"]."</td>";
      echo  "<td>".$row["Email"]."</td>";
      echo "<td>".$row["current_password"]."</td>";
      echo "<td>".$row["new_password"]."</td>";
      echo "<td>".$row["confirm_password"]."</td>";

      //Add Update and Delete columns
      echo "<td><a href='indexUpdateA.php?ID=".$row["ID"]."'>Update</a></td>";
      echo "<td><a href='indexdeleteA.php?ID=".$row["ID"]."'>Delete</a></td>";
      
      echo "</tr>";
    

   }
   echo "</center>"."</table> ";
}
else{

    echo "No results";
}
   
    $con->close();

?>
</body>

</html>