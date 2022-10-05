<?php
session_start();

if(!isset($_SESSION['name']))
header("location:index.php");
$name=$_POST['nm'];
$exp=$_POST['exp'];
$lic=$_POST['lic'];
$vehno=$_POST['vno'];
$address=$_POST['add'];
$cont=$_POST['cno'];
$un=$_POST['unm'];
$pass=$_POST['pass'];
move_uploaded_file($_FILES["photo"]["tmp_name"],"../image/".$_FILES["photo"]["name"]);
$image=$_FILES["photo"]["name"];
include("db.php");

$rn=mysqli_query($con,"insert into add_driver(drivername,experience,license,vehicleno,address,photo,contactno,username,password)values('$name','$exp','$lic','$vehno','$address','$image','$cont','$un','$pass')");

if($rn){
    
$_SESSION['add']="driver added successfully!!";
header("location:home.php?ew=0");

}
else
 echo mysqli_error($con);

?>