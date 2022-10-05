<?php

session_start();
        if(!isset($_SESSION['dlogins']))
        header("location:driverlogin.php");

    if(isset($_SESSION['driverid']))
    {
            $id=$_SESSION['driverid'];
    }
$con=mysqli_connect("localhost","root","","shree");
$r=mysqli_query($con, "select contactno from add_driver where id='$id'");
$row=mysqli_fetch_array($r);
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Requests</title>

    <link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<link href="../css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>


    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#userTable').DataTable();
});
</script>

    <style>
     body{
            background:linear-gradient(lightgray,lightblue)
        }
        #dh{
            height:150px;
            width:100%;
            background:linear-gradient(purple,lightgreen);
            border-radius:70px 10px 70px 10px;
        }
        #dh h1{
            color:lightyellow;
            padding-top:25px;
            text-align: center;
            font-size:60px;
            text-shadow: 5px 5px 5px pink;
                    }
           .i{
            float:left;
            height:150px;
            width: 150px;
            border-radius: 50%;
        }
        #menu{
            text-align: center;
        }
        #menu a{
            text-decoration: none;
            font-size: 25px;
            font-weight: bold;
            color:white;

        }
        #menu a:hover{
            color:green;
        }
      
    .bt1{
                width:100%;
                margin-top:30px;
                border-radius:25px;
            }
        .bt1 th{
            background:linear-gradient(yellow,red);
            border-radius:25px;
            font-size:20px;
        }
        .bt1 td{
            background:linear-gradient(white,blue);
            border-radius:25px;
            text-align:center;
 
        }
        .bt1 td:hover{
            background:lightblue;
        }
        .bt1 td a{
            text-decoration:none;
            font-weight:bold;
            color:white;
            font-size:20px;

        }
        .bt1 td a:hover{
            color:green;
        }
    </style>
</head>
<body>

<div id='dh'><img src="../image/logo.png" class='i' alt=""><h1>Shree tours and travels</h1>
        </div>

            <div id='menu'>
                <hr>
            <span id='profile'><a href="index.php">Profile</a> </span>
           &nbsp &nbsp <span id='request'><a href="requestofuser.php">Requests</a></span>
                <hr>
            </div>

          <div class="table-responsive">

          <table class='bt1' id="userTable">
            <thead>
            <tr>
            <th>Transport Name</th>
            <th>Vehicle Type</th>
            <th>Vehicle No</th>
            <th>Vehicle Rent</th>
            <th>Pick-up Time</th>
            <th>Pick-up Place</th>
            <th>Booker Name</th>
            <th>Booker Contact</th>
            <th>Booker Address</th>
            <th>Driver Name</th>
            <th>Driver Contact</th>
            <th>Invoice No</th>
            <th>Accept</th>
            <th>Deny</th>

            

            </tr>
            
            </thead>
<?php   $r1=mysqli_query($con,"select * from bookings where drivercontact='$row[0]' and (status='1' or status='3') and cancel='no'");
  while($row1=mysqli_fetch_array($r1))
  {
      ?>
            <tbody>
            
            <tr>
                    
                    <td><?php echo $row1[1]; ?></td>
                    <td><?php echo $row1[2]; ?></td>
                    <td><?php echo $row1[3]; ?></td>
                    <td><?php echo $row1[4]; ?></td>
                    <td><?php echo $row1[5]; ?></td>
                    <td><?php echo $row1[6]; ?></td>
                    <td><?php echo $row1[7]; ?></td>
                    <td><?php echo $row1[8]; ?></td>
                    <td><?php echo $row1[9]; ?></td>
                    <td><?php echo $row1[10]; ?></td>
                    <td><?php echo $row1[11]; ?></td>
                    <td><?php echo $row1[14]; ?></td>
                    <td>
                    <?php 
                        if($row1[12]=='3')
                    {
                       echo" <a href='completeride.php?bookid=$row1[0]'>Complete</a></td>";
                    
                    }
                    if($row1[12]=='1'){
                        echo "<a href='acceptreq.php?bookid=$row1[0]'>Accept</a></td>";
                    }
                    if($row1[12]=='1'){
                       echo " <td><a href='denyreq.php?bookid=$row1[0]'>Deny</a></td>";
                    }
                    ?>
                    
                    
    
            </tr>
            </tbody>
            <?php  }?>

            
            
            </table>


          </div>
<div><?php  include("../footer.php");
?></div></body>
</html>