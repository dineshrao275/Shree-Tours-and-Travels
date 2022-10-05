<?php
include("header.php");
include("head.php");

//session_start();

if(!isset($_SESSION['nameuser']))
header("location:login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>about vehicle</title>
    <link rel="stylesheet" href="css/button_style.css">
    <style>
        body{
            background:white; 
        }
       #bot table{
            margin:auto;
            margin-top:30px;
        
            border:none;
            width:1000px;
        
        }
   #bot td{
        font-size:30px;
        color:black;
        text-align: center;
        box-shadow: 3px 3px 5px;
    }
   #bot .link{
        text-decoration:none;
        background:lightblue;
        border-radius:10px;
        color:darkgreen;
    }
    #foot{
        padding-top: 30px;
    }
    #bot table td img{
        height: 400px;
        width:400px;
    }
    </style>
</head>
<body >
    <div id='bot'>

            

<?php
    $id=$_REQUEST['a'];
    $con=mysqli_connect("localhost","root","","shree");
    $r=mysqli_query($con,"select * from add_vehicle where id='$id'");
    echo "<table border=1 cellpadding=10 cellspacing=8><tr class='i'><td colspan='2' align='center'>";
    if($r)
    while($row=mysqli_fetch_array($r))
    {
        echo " <img src='image/$row[8]' ></td></tr>
        <tr><td>Transport name :- </td>
        <td><b>$row[1]</b></td></tr>
        <tr><td>Vehicle name :-</td>
        <td>$row[2]</td></tr>
        <tr><td>Vehicle no. :-</td>
        <td>$row[3]</td></tr>
        <tr><td>Vehicle model :-</td>
        <td>$row[5]</td></tr>
        <tr><td>Vehicle seating capacity  :-</td>
        <td>$row[7]</td></tr>
        <tr><td>rent :-</td>
        <td>$row[9]</td></tr>
        <tr><td>contact  :-</td>
        <td>$row[12]</td></tr>
        <tr><td>vehicle type:-</td>
        <td>$row[13]</td>
        </tr>
        <tr> <td colspan='2' align='center'><a href='bookveh.php?id=$row[0]' class='link'>Book Now...</a></td>
        </tr>
        
        
        
        
        ";
    }
    echo"</table>";


?>

    </div>
    <div class="buttons">
    <a class="button"href="resources.php">Back</a>
    <a class="button two" href="index.php">Home</a>
  </div>

    <div > <?php  include("footer.php"); ?></div>
</body>
</html>