<!DOCTYPE html>
<html lang="en">
<head>
<style>
.im{
    
    height:150px;
            width:150px;
            border-radius:0 10px 0 15px;
}
.tabl td{
    height: 300px;
    width: 300px;
    text-align:center;
}
 .tabl td:hover {
     background: linear-gradient(lightgray,lightblue);
border-radius: 50% ;
transition:.5s;

}
</style>
</head>
<body>
<?php

$count=0;
$con=mysqli_connect("localhost","root","","shree");
$r=mysqli_query($con,"select  * from add_vehicle where status='50'");
echo "<table  class='tabl' cellpadding=10 cellspacing=100> <tr>";

while($row=mysqli_fetch_array($r))
{ 
    

    echo "<td class='t'><a href='aboutvehuser.php?a=$row[0]'><h1>$row[1]</h1> <img src='image/$row[8]' class='im'></a></td>";
    $count++;
    if($count == 3)
    {
        break;
    }
}  
echo "<td ><a href='vehicleinfouser.php'style='color:darkblue;text-decoration:none;'>view all </a></td></tr>     </table>";
?>
</body>
</html>