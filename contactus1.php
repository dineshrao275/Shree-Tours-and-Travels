<?php
session_start();
    $fn=$_POST['nm'];
    $email=$_POST['email'];
    $query=$_POST['query'];
    include("db.php");
    $r=mysqli_query($con,"insert into queries (fullname,email,query) values('$fn','$email','$query')");
    if($r)
    {
        $_SESSION["quemes"]="query sent successfully!!!";
        mysqli_query($con,"update queries set status='101' where email='$email'");
        header("location:contactus.php?qs=1");
    }
    else{
        echo mysqli_error($con);
    }

?>