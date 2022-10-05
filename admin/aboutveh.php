<?php
include("side.php");

if(!isset($_SESSION['name']))
header("location:index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>about vehicle</title>
    <link rel="stylesheet" href="../css/button_style.css">
    <style>
        body{
            background:lightyellow; 
        }
        .aboutveh{
            width:80%;
            float:right;
            margin-top:50px;
            border: 1px solid red;
        }
      .aboutveh  table{
            margin:auto;
            width: 100%;
        margin-top:50px;
            border-radius:15px;
        
        }
  .aboutveh  td{
        font-size:30px;
        text-align: center;
    }
    .heading h1{
        color:black;
        text-align: center;
        font-weight: bold;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
    }
    .link{
        text-decoration:none;
        background:lightblue;
        border-radius:10px;
        color:darkgreen;
    }
    </style>
</head>
<body>
    
<div class="aboutveh">
    <div class="heading"><h1>Transport Details</h1></div>
<?php

  //session_start();
    $id=$_REQUEST['a'];
    $con=mysqli_connect("localhost","root","","shree");
    $r=mysqli_query($con,"select*from add_vehicle where id='$id'");
    echo "<table border=1 cellpadding=10 cellspacing=8><tr class='i'><td colspan='2' align='center'>";

    while($row=mysqli_fetch_array($r))
    {
        echo " <img src='../image/$row[8]' ></td></tr>
        <tr><td>Transport name :- </td>
        <td><b>$row[1]</b></td></tr>
        <tr><td>Vehicle name :-</td>
        <td>$row[2]</td></tr>
        <tr><td>Vehicle no. :-</td>
        <td>$row[3]</td></tr>
        <tr><td>insurance no :-</td>
        <td>$row[4]</td></tr>
        
        <tr><td>Vehicle model :-</td>
        <td>$row[5]</td></tr>
        <tr><td>Vehicle registration :-</td>
        <td>$row[6]</td></tr>
        <tr><td>Vehicle seating capacity  :-</td>
        <td>$row[7]</td></tr>
        <tr><td>rent :-</td>
        <td>$row[9]</td></tr>
        <tr><td>state-</td>
        <td>$row[10]</td></tr>
        <tr><td>city  :-</td>
        <td>$row[11]</td></tr>
        <tr><td>contact  :-</td>
        <td>$row[12]</td></tr>
      <tr><td>vehicle type:-</td>
      <td>$row[13]</td>  <tr ><td colspan='2' align='center'><a href='editveh.php?id=$id' class='link'>EDIT INFO</a>&nbsp
        &nbsp&nbsp&nbsp&nbsp
        <a href='deleteveh.php?id=$id' class='link'>DELETE INFO</a></td></tr>
        
        
        
        ";
    }
echo"</table>";


?>
</div>
<div class="buttons">
    <a class="button"href="vehicleinfo.php">Back</a>
     <a class="button two" href="index.php">Home</a> 
  </div>
<div class="footer"><?php   include("footer.php");?></div>
</body>
</html>
