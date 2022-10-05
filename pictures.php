<?php 
include ("header.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>pictures</title>
    
    <style>
       body {
                background:linear-gradient(lightgreen,lightblue);
        }
        img{
            height:250px;
            width:250px;
            border-radius:50%;
        }
        
            a{
                font-family:tahoma;
                text-decoration:none;
                color:blue;
                font-size: 10px;
        }
        .tab{
        margin: auto;
        }
        .tab tr td{
            text-align: center;
            width:450px;
        }
        
      .tab tr td:hover{
            background:#342e2e;
    cursor:pointer;
    border-radius: 50%;
    transition: 0.5s;
    color:white;
    
        }
    
.btn{
    height:25px;
width:300px;
border-radius:15px;
background:transparent;
outline:none;
color:white;

}
.btn:hover{
    border:1px solid blue;

}
.w{
       border:1px solid blue; 
   }

    </style>
    
</head>
<body>

    
<?php

    $count=0;
    $con=mysqli_connect("localhost","root","","shree");
    $r=mysqli_query($con,"select*from add_places");
    echo "<table  class='tab' cellpadding=10 cellspacing=100> <tr>";

    while($row=mysqli_fetch_array($r))
    {  $_SESSION['idplaces']=$row[0];
        $n=$row[1];
        $P=$row[2];
        echo "<td><a href='aboutimg.php?a=$row[0]'><h1>$n</h1> <img src='image/$P' ></a></td>";
        $count++;
        if($count == 3)
        {
            echo "</tr><tr>";
        $count=0;
        }
    }  
    echo "</table>";



?>
<?php 
include ("footer.php");
?>
</body>
</html>