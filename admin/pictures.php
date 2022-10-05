<?php include("side.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pictures</title>
    <link rel="stylesheet" href="../css/toastr.min.css">    
    <style>
       body{
            background:linear-gradient(indigo,orange);
        }

        .pictures{
            margin-top:50px;
            width: 80%;
            float:right;
    
            
        
        }
       .pictures table{

           margin:auto;
           margin-top: 100px;
           width:100%;


       }
      .image2{
            height:250px;
            width:250px;
            border-radius:50%;
        }
        
        .image2:hover{
            opacity: .4;
        }
        
         .pictures td a{
                font-family:cursive;
                text-decoration:none;   
                color:violet;
        }
        
        .main22{
            
        
            color:lime;
        border-radius:35px;
        text-align:center;    
    }
    h2{
    font-size:60px;
    text-decoration: underline;
    }
    </style>
</head>
<body>
<div class="pictures">
<div class="main22">
<h2>--*About Pictures*--</h2>

</div>
    
<?php

    $count=0;
    $con=mysqli_connect("localhost","root","","shree");
    $r=mysqli_query($con,"select*from add_places");
    echo "<table  cellpadding=10 cellspacing=100> <tr>";

    while($row=mysqli_fetch_array($r))
    {  
        $n=$row[1];
        $P=$row[2];
        echo "<td><a href='aboutimg.php?a=$row[0]'><h1>$n</h1> <img src='../image/$P' class='image2' ></a></td>";
        $count++;
        if($count == 3)
        {
            echo "</tr><tr>";
        $count=0;
        }
    }  
    echo "</table>";

    
?>

</div>
<div class="footer"><?php include('footer.php'); ?></div>
<script src="../js/jquery.js"></script>
<script src="../js/toastr.min.js"></script>

</body>
</html>
<?php
 if(isset($_GET['se']))
{
    echo "<script>toastr.success('Information Updated Successfully..')</script>";
} 
?>