<?php

if(!isset($_SESSION['name']))
header("location:index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    .main{
        height:70px;
        color:red;
        background:darkorchid;
        border-radius:35px;
        text-align:center;    
    }
    h1{
    font-size:60px;
    }
</style>
</head>
<body>
<div class="main">
<h1>About Transport</h1>

</div>
    
</body>
</html>