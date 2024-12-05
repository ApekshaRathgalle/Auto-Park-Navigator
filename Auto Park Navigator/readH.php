<?php
require 'config.php';
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <div class="registration">
            <center>
    <table border ="1" width="50" >
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>MobileNo</th>
        <th>VehicalType</th>
        <th>Vehiclenumber</th>

    </tr>


<?php

$sql="SELECT FullName,Email,MobileNo,VehicleType,Vehiclenumber FROM registration";


$result=$con->query($sql);

if($result->num_rows>0)
{
    
    while($row=$result->fetch_assoc())
    {
        echo"<tr><td>".$row["FullName"]."</td>";
        echo "<td>".$row["Email"]."</td>";
        echo "<td>".$row["MobileNo"]."</td>";
        echo "<td>".$row["VehicleType"]."</td>";
        echo "<td>".$row["Vehiclenumber"]."</td>";
        echo"<td>
        <a href = 'indexHupdate.html'>
        update</a></td>";

        echo"<td>
            <a href='indexHdelete.html'> delete</a></td>";
        echo"</tr>";

    }

}
else{
    echo "No Results";
}

$con->close();


?>

</table>
    </body>
</html>