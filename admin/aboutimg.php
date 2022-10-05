<?php include("side.php");  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>about image</title>
    <link rel="stylesheet" href="../css/button_style.css">
    <style>
        .aboutimg{
            margin-top: 100px;
            width: 80%;
            float:right;

        }
        .aboutimg table td{
            width: 100%;
        }
        th{
            font-size:30px;
            color:indigo;
            text-align: center;
        }
        .link{
            font-size: 30px;
            text-decoration:none;
            background:black;
            color:white;
            border-radius:10px;
            
        }
        .link:hover{
            color:white;
            background:blue;
        }

    </style>

</head>
<body>
    <div class="aboutimg">
        

<?php

if(!isset($_SESSION['name']))
    header("location:index.php");
$id=$_REQUEST['a'];
$con=mysqli_connect("localhost","root","","shree");
$r=mysqli_query($con,"select*from add_places where id='$id'");

echo "<table border=0 cellpadding=10 cellspacing=10 >";
if($r)
while($row=mysqli_fetch_array($r))
{ 
    echo "<tr><th>$row[1]</th></tr>
    <tr><td> <img src='../image/$row[2]' ></td></tr>
    <tr><td >$row[3]</td></tr>
    <tr><td align='center'><a href='edit.php? id=$row[0]' class='link'>Update Info</a></td></tr>";

}
echo "</table>";
?>

<div class="buttons">
    <a class="button"href="pictures.php">Back</a>
    <!-- <a class="button two" href="index.php">Home</a> -->
  </div>

    </div>
   <div><?php   include("footer.php");   ?></div>
</body>
</html>