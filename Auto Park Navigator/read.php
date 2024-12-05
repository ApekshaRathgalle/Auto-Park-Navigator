<?php
require 'config.php';
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <div class="bookpspace">
            <center>
    <table border ="1" width="50" >
    <tr>
        <th>Name</th>
        <th>VehicleType</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Date</th>
        <th>Checkin</th>
        <th>Checkout</th>
        <th>Update</th>
        <th>Delete</th>

    </tr>
   

<?php
$sql="SELECT Name,VehicalType,Contact,Email,Date,Checkin,Checkout FROM bookpspace";


$result=$con->query($sql);

if($result->num_rows>0)
{
    
    while($row=$result->fetch_assoc())
    {
        echo"<tr><td>".$row["Name"]."</td>";
        echo "<td>".$row["VehicalType"]."</td>";
        echo "<td>".$row["Contact"]."</td>";
        echo "<td>".$row["Email"]."</td>";
        echo "<td>".$row["Date"]."</td>";
        echo "<td>".$row["Checkin"]."</td>";
        echo "<td>".$row["Checkout"]."</td>";
        echo"<td>
        <a href = 'indexupdate.html'>
        update</a></td>";

        echo"<td>
        <a href = 'indexdelete.html'>
        delete</a></td>";
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

