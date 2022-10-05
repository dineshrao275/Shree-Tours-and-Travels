<?php
        session_start();
        $un=$_POST['un'];
        $pa=$_POST['pa'];
        $con=mysqli_connect("localhost","root","","shree");
        $r=mysqli_query($con,"select * from registrationuser where username='$un' and password='$pa' ");
        if($row=mysqli_fetch_array($r))
          if($un==$row[8] && $pa== $row[9]){
              $_SESSION['nameuser']=$row[1];
              $_SESSION['idprofile']=$row[0];
              $_SESSION['image1']=$row[3];
              $_SESSION['forgetrate']=$row[5];
             header("location:index.php?s=1");
        }
            else
            {
                header("location:login.php");
                $_SESSION['err']="invalid username or password";
            }
        
        else{
            header("location:login.php");
            $_SESSION['err']="invalid username or password";
               }
?>
