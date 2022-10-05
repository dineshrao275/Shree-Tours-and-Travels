<?php
session_start();
        if(!isset($_SESSION['dlogins']))
        header("location:driverlogin.php");
unset($_SESSION['dlogins']);
header("location:index.php");
?>