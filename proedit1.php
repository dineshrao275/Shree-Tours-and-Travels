<?php
session_start();
if(!isset($_SESSION['nameuser']))
header("location:login.php");

$id=$_SESSION['idprofile'];
$firstname=$_POST["fname"];
$lastname=$_POST["lname"];
$Email=$_POST["email"];
$phone=$_POST["phone"];
$idproof=$_POST['idproof'];
$iddetails=$_POST['idproof1'];
$location=$_POST["location"];
include("db.php");
$r="";
if($_FILES['photo']['name']=="")
{
    $r=mysqli_query($con,"update registrationuser set firstname='$firstname',lastname='$lastname', email='$Email',phone='$phone',idproof='$idproof',iddetails ='$iddetails',location='$location' where id='$id'");
}
else
{
    move_uploaded_file($_FILES['photo']['tmp_name'],"image/".$_FILES['photo']['name']);
$photo=$_FILES['photo']['name'];
$r=mysqli_query($con,"update registrationuser set firstname='$firstname',lastname='$lastname',photo='$photo', email='$Email',phone='$phone',idproof='$idproof',iddetails ='$iddetails',location='$location' where id='$id'");
  
}
  if($r)
   { $_SESSION['upro']="Profile Updated Successfully!!!";
     header("location:profile.php");
   }
   ?>