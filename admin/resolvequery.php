<?php
session_start();
if(!isset($_SESSION['name']))
{
    header("location:index.php");
}
include("db.php");
$nq=$_REQUEST['nq'];
mysqli_query($con,"update queries set status='102'where id='$nq'");
$_SESSION['resqmes']='query resolved';
header("location:newqueries.php??resolvequery=0");


?>