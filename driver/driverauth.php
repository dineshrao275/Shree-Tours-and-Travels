    <?php
            session_start();
            $un=$_POST['nm'];
            $pass=$_POST['pass'];
            $con=mysqli_connect("localhost","root","","shree");
            $r=mysqli_query($con,"select * from add_driver where username='$un' and password='$pass'");
                      
            if($row=mysqli_fetch_array($r))
           { if($un==$row[8] && $pass==$row[9])
            {
                $_SESSION['dlogins']="login successfully";
                $_SESSION['driverid']=$row[0];
               header("location:index.php");
            }
            else{
                $_SESSION['dloginf']="invalid username or password";
               header("location:driverlogin.php");
            }
        }
        else{
            $_SESSION['dloginf']= "invalid username or password";
           header("location:driverlogin.php");
        }
    ?>