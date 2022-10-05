<?php
$firstname=$_POST["fname"];
$lastname=$_POST["lname"];
$Email=$_POST["email"];
$phone=$_POST["phone"];
$idproof=$_POST['idproof'];
$iddetail=$_POST['idproof1'];
$uname=$_POST["uname"];
$pass=$_POST["pass"];
$location=$_POST["location"];

$con=mysqli_connect("localhost","root","","shree");

$r=mysqli_query($con,"select * from registrationuser where email='$Email' or phone='$phone' or username='$uname'");
if($row=mysqli_fetch_array($r))
{
  
   header("location:login.php?m=1");
} 
 else{
  move_uploaded_file($_FILES['photo']['tmp_name'],"age/".$_FILES['photo']['name']);
$photo=$_FILES['photo']['name'];

    $rn=mysqli_query($con,"insert into registrationuser  (firstname, lastname,photo, email, phone,idproof,iddetails, username, password, location) values('$firstname','$lastname','$photo','$Email','$phone','$idproof','$iddetail','$uname','$pass','$location')");
  
  if($rn){
  $_SESSION['successRegister']="";
 header("location:login.php?n=1");
  }
else
echo mysqli_error($con);
  }

?>