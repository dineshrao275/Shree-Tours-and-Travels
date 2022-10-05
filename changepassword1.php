<?php    
session_start();
if(!isset($_SESSION['nameuser']))
header("location:login.php");

if(!isset($_SESSION['idprofile']))
    header("location:userlogin.php");
    else
    {
        $id=$_SESSION['idprofile'];
        $cpass=$_POST['pass1'];
        $npass=$_POST['pass2'];
        include("db.php");
        $r=mysqli_query($con,"select password from registrationuser where id='$id'");
        $row=mysqli_fetch_array($r);
        if($cpass==$row[0])
        {
        $r1=mysqli_query($con,"update registrationuser set password='$npass' where id='$id'");
        if($r1 )
        {
            $_SESSION['cp']="password successfully changed";
            header("location:changepassword.php?cgs=0");
        }
         
    }
    else{
        $_SESSION['pw']="you entered a wrong password";
        header("location:changepassword.php");
    }
    }

      ?>