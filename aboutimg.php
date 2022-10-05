<?php include("header.php");
$id=$_REQUEST['a'];
$con=mysqli_connect("localhost","root","","shree");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>about place</title>
    <link rel="stylesheet" href="css/button_style.css">
    <style>
        body{
            background:lightgrey;
        }
        .para{
            color:blue;
            text-align:center;
        }
            #imag{
            height: 1000px;
            width:1000px;
           margin-left:150px;   
        }
        .main{
        height:70px;
        color:indigo;
        background:lawngreen;
        border-radius:35px;
        text-align:center;    
    }
    h1{
    font-size:60px;
    }

    .visitbutton{
        padding: 10px;
        border-radius:10px;
        background:teal;
    margin-left: 45%;
    margin-top: 50px;
            }
        .visitbutton a{
        text-decoration: none;    
        color:white;
        font-weight: bold;
        font-size: 20px;
        }

        .visitbutton:hover{
           opacity:.7;
        }
        .similarplaces{
        
            /* height:500px; */
            width:100%;
        }
        .SP{

            font-size:70px;
            text-align: center;
        }
        #i{
            margin-top: 40px;
            height:300px;
            width:300px;
            border-radius: 150px;
            text-align:center;
        }
        #i:hover{
            opacity:0.4;
            transition:0.5s;
        }
        .gol{
        
            margin-left: 100px;
            height:400px;
            width:500;
            
        }
        
        .foot{
            padding-top:50px;
        }
        
    </style>
    <script>
        function fun1(){
            <?php
            $pp=mysqli_query($con,"update add_places set status=status+1 where id='$id'" );
            ?>
        }
    </script>
 </head>
<body>
<div class="main">
<h1>About place</h1>

    
    </div>
<?php

    // session_start();
    
    
    $r=mysqli_query($con,"select*from add_places where id='$id'");
    $_SESSION['idplaces1']=$id;
    if($r)
$row=mysqli_fetch_array($r);    
       $n=$row[1];
        $P=$row[2];
        $a=$row[3];
        echo "<h2>$n<br/><p class='para'>City:-$row[5]</p></h2> <img src='image/$P'  id='imag'><p class='para'x>$a </p>";
       
        $r1=mysqli_query($con,"select count(id) from add_places where city='$row[5]'");
          
               echo"<button class='visitbutton' onclick='fun1()'><a href='vehavailable.php'>Visit Now</a></button><hr>";

                $row1=mysqli_fetch_array($r1);
    
    if($row1[0]>'1')
    {
echo "
    <div class='similarplaces'>

    <h1 class='SP'>Similar Places</h1>
 ";
 $r2=mysqli_query($con,"select * from add_places where city='$row[5]'");
 $count=0;

  while($row2=mysqli_fetch_array($r2))
   { if($row2[0]==$row[0])
    continue;
    
    else
   
     { $P=$row2[2];
    echo "<span text-align='center'class='gol'><a href='aboutimg.php?a=$row2[0]'> <img src='image/$P'  id='i'></a></span>";
    $count++;
    if($count == 3)
    break;
}

   }

    }
?></div>
</div>
    <div class="buttons">
    <a class="button"href="pictures.php">Back</a>
    <a class="button two" href="index.php">Home</a>
  </div>

  <div class="foot">  <?php
include("footer.php");
?>
</div>

</body>
</html>