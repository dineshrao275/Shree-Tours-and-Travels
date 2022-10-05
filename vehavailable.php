    <?php
    //session_start();
include("header.php");
    
    if(!isset($_SESSION['nameuser']))
    header("location:login.php");
   if(isset($_SESSION['idplaces1']))
    $id=$_SESSION["idplaces1"];
    
    include("db.php");
    $r=mysqli_query($con,"select city from add_places where id='$id'");
    
    $city=mysqli_fetch_array($r);

 ?>
    <!DOCTYPE html>
<html lang="en">
<head>

    <title>available vehicles</title>
    <link rel="stylesheet" href="css/button_style.css">
    <style>
        body{
            background-image:url("image/userDashboard_bg.jpg");
        
        }

        .t1{
            margin:auto;
            background:black;
            opacity:0.5;
            width:100%;
            color:white;
            font-size:20px;
           text-align:center;
        }
        .t1 td{
            border-radius: 0;

        }
       .main0{
        height:70px;
        color:darkgreen;
        background:darkorchid;
        border-radius:35px;
        text-align:center;    
    }
   .main0 h1{
    font-size:60px;
        color:yellow;
    }
    
    .i{
        height: 70px;
        width: 70px;
    }

   #main2 th{
        color:red;
    }
    
   #main2 td a{
        text-decoration:none;
        color:cyan;
    }
    #main2{
        width:100%;
        height: 100%;
    }
    /* .footer{
        margin-top: 100px;
    } */
    </style>
</head>
<body>
<div class="main0">
<h1>Available Vehicles</h1>
<h2>Choose the vehicle  for your trip !!!!</h2>
</div>
        <br><br><br>
        <br><br><br>

<div id="main2">
    <table class='t1' cellspacing=2 cellpadding=10 border=1>
    <tr>
    <th>Sno</th>
    <th>Transport Name</th>
    <th>Vehicle Name</th><th>Vehicle NO</th><th>Vehicle Seats</th><th>Images</th><th>Rent</th><th>Contact</th><th>Book</th>
    <th>View</th>
</tr>

        <?php
            
            $con=mysqli_connect("localhost","root","","shree");
            $r=mysqli_query($con,"select * from add_vehicle where city='$city[0]' and vseat<7 and status='50' ");
            $Sno=0;
            if($r)
        while($row=mysqli_fetch_array($r))
        {
        
       ?>
       <tr>
    <td><?php echo ++$Sno; ?></td>
    <td><?php echo $row[1]; ?></td>
    <td><?php echo $row[2]; ?></td>
    <td><?php echo $row[3]; ?></td>
    <td><?php echo $row[7]; ?></td>
    <td><?php echo"<img class='i' src='image/$row[8]';>"; ?></td>
    <td><?php echo $row[9]; ?></td>
    <td><?php echo $row[12]; ?></td>
    <td><a href="bookveh.php?id=<?php  echo $row[0];?>">book</a></td>
    <td><a href="aboutvehuser.php?a=<?php echo $row[0];?>">view</a></td>
</tr>

<?php }
        else
         echo "<tr><td colspan='10' align='center'>no vehicle available</td></tr>";

        
?>


</table>
<div class="buttons">
    <a class="button"href="resources.php">Back</a>
    <a class="button two" href="index.php">Home</a>
  </div>
</div>
<div class="footer"><?php  include("footer.php"); ?></div>
</body>
</html>