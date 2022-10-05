<?php
session_start();
if(!isset($_SESSION['name']))
header("location:index.php");

unset($_SESSION['name']);
header("location:index.php");
?>
