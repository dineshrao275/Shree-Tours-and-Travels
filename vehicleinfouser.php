
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>transports</title>
    <style>
           .main{
        height:70px;
        color:blue;
        background:fuchsia;
        border-radius:35px;
        text-align:center;    
    }
    h1{
    font-size:60px;
    }
    #del{
        color:red;
        font-size:25px;
        font-weight:bold;
        
    }
        img{
            height:250px;
            width:250px;
            border-radius:15px;
        }
        body{
            background:linear-gradient(white ,cyan);
        }
            a{
                font-family:tahoma;
                text-decoration:none;
                color:indigo;
        }
    </style>
</head>
<body>
<div class="main">
<h1>Transports</h1>

</div>
    
</body>
</html>
<?php

    $count=0;
    session_start();
    $con=mysqli_connect("localhost","root","","shree");
    $r=mysqli_query($con,"select*from add_vehicle where status='50'");
    echo "<table  cellpadding=10 cellspacing=100> <tr>";

    while($row=mysqli_fetch_array($r))
    { if(isset($_SESSION['del']))
        {
            echo "<p id=del>";
            echo $_SESSION['del'] ;
            echo"</p>";
        }

        echo "<td><a href='aboutvehuser.php?a=$row[0]'><h2>$row[1]</h2> <img src='image/$row[8]' ></a></td>";
        $count++;
        if($count == 3)
        {
            echo "</tr><tr>";
        $count=0;
        }
    }  
    echo "</table>";

echo $_SESSION['del']='';

?>