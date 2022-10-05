<?php  include("side.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>transports</title>
        <link rel="stylesheet" href="../css/toastr.min.css">


    <style>
        body{
            background:linear-gradient(white ,cyan);
        }
        .main{
        margin-top: 100px;
            width:80%;
            float:right;
        color:blue;
        background: transparent;
        border-radius:35px;
        text-align:center;    
    }
   .main h1{
    color:blue;
    font-size:60px;
    }
    .main a h1{
        color:black;
        font-size: 20px;
    }
    .main table{
        margin:auto;
        margin-top: 50px;
        width:100%;
    }



        .main img{
            height:250px;
            width:250px;
            border-radius:15px;
        }
        .main img:hover{
            opacity:.5;
            transition: .5s;
        }
        
           .main a{
                font-family:tahoma;
                text-decoration:none;
                color:indigo;
        }
    </style>
</head>
<body>
<div class="main">
<h1>Transports</h1>


<?php

    $count=0;

    if(!isset($_SESSION['name']))
        header("location:index.php");
    $con=mysqli_connect("localhost","root","","shree");
    $r=mysqli_query($con,"select*from add_vehicle");
    echo "<table  cellpadding=10 cellspacing=100> <tr>";

    while($row=mysqli_fetch_array($r))
    { 
        echo "<td><a href='aboutveh.php?a=$row[0]'><h1>$row[1]</h1> <img src='../image/$row[8]' ></a></td>";
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
    <div class="footer"><?php  include("footer.php"); ?></div>

            <script src="../js/jquery.js"></script>
          <script src="../js/toastr.min.js"></script>  
</body>
</html>
<?php if(isset($_GET['deleteveh']))
echo "<script>toastr.warning('vehicle deleted ....')</script>";
if(isset($_GET['editveh']))
echo "<script>toastr.success('vehicle updated ....')</script>";
?>