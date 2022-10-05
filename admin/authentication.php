<?php
        session_start();
        $un=$_POST['un'];
        $pa=$_POST['pa'];
        $con=mysqli_connect("localhost","root","","shree");
        $r=mysqli_query($con,"select * from adminlogin where username='$un' and password='$pa' ");
        if($row=mysqli_fetch_array($r))
          if($un==$row[1] && $pa== $row[2]){
              $_SESSION['name']=$row[1];
              
             header("location:home.php?golin=0");
        }
            else
            { header("location:index.php"); 
                $_SESSION['err']="invalid username or password";
                
            }
        
        else{
            header("location:index.php"); 
            $_SESSION['err']="invalid username or password";  
            
        }
?>
