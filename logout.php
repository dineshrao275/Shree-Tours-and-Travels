<?php
session_start();
if(!isset($_SESSION['nameuser']))
header("location:login.php");

unset($_SESSION['nameuser']);
header("location:login.php");
?>