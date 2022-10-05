<?php
        session_start();
        if(!isset($_SESSION['nameuser']))
        header("location:login.php");
            
            if(isset($_SESSION['idprofile']))
                    $id=$_SESSION['idprofile'];
                    include("db.php");
                    $r=mysqli_query($con,"delete from registrationuser where id='$id'");
                    if($r)
                    {
                        $_SESSION['delete']="your account deleted successfully !!!";
                        include("logout.php");
                       // header("location:index.php");
                    }

?>