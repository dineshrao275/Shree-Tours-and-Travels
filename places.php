<!DOCTYPE html>
<html lang="en">
<head>
    <title>Places</title>
    <style>
        .i{
            height:150px;
            width:150px;
            border-radius:0 10px 0 15px;
        }
        
        .tab td{
            height:180px;
            width:180px;
        
        }
          .tab  a{
                color:  darkblue;
                font-size: 20px;
                text-decoration:none;
            
        }
        .gol{
            text-align:center;
            padding:30px;
        }
     .tab  tr td:hover{
            background:linear-gradient(lightseagreen,lightpink);
    cursor:pointer;
    border-radius: 50%;
    transition:.5s;
    
        }
    </style>
</head>
<body>
    <div class="pics">

    
<?php

 
    $count=0;
    $con=mysqli_connect("localhost","root","","shree");
    $r=mysqli_query($con,"select*from add_places");
    echo "<table  class='tab' cellpadding=10 cellspacing=80> <tr>";

    while($row=mysqli_fetch_array($r))
    {  $P=$row[2];
        echo "<td text-align='center' class='gol'><a href='aboutimg.php?a=$row[0]'> <img src='image/$P' class='i' ></a></td>";
        $count++;
        if($count == 3)
        break;
    
    }  
    echo "<td class='gol'><a href='pictures.php'>view all</a></td></tr></table>";



?>
    </div>
    
</body>
</html>