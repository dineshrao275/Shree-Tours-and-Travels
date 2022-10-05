<?php
session_start();

if(!isset($_SESSION['name']))
header("location:index.php");
move_uploaded_file($_FILES["picture"]["tmp_name"],"image/".$_FILES["picture"]["name"]);
$image=$_FILES["picture"]["name"];

$con=mysqli_connect("localhost","root","","image");

$r=mysqli_query($con,"insert into addimage(image)values('$image')");

if($r)
echo "Image Insert";
else
 echo mysqli_error($con);

?>