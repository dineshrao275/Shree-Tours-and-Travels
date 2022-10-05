<?php
//session_start();
include("side.php");
if(!isset($_SESSION['name']))
header("location:index.php");
    $cont=$_REQUEST['no'];
    include("db.php");
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bookings</title>


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
           background:lightgray;
       }
        .main{
            margin-top:200px;
            width:80%;
            float:right;
        color:green;
        background:transparent;
        border-radius:35px;
        text-align:center;    
    }
  .main  h1{
    font-size:60px;
    color:blue;
    text-decoration: underline;
    }

            .main table{
                margin-top:30px;
                border-radius:25px;
            }
       .main th{
            font-size:20px;
        }
        .main td{
            border-bottom: 1px solid blue;
            border-radius: 25px;
            color:black;
            background:lightgray;
        }
        .main td:hover{
            background:lightblue;
        }
        .main td a{
            text-decoration:none;
            font-weight:bold;
            color:red;

        }
        .main td a:hover{
            color:green;
        }
        
        </style>


</head>
<body>
<div class="main">
<h1>Bookings</h1>


        <div class='table-responsive'>

            <table  class='bt' id='userTable' cellspacing=2 cellpadding=10>
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
            <th>Confirm</th>
            
            </tr>
        </thead>
        <tbody>
            <?php  $r=mysqli_query($con,"select * from bookings where bookercontact='$cont' and status='2'and cancel='no'");
            while($row=mysqli_fetch_array($r))
            {
                ?>

                    <tr>
                    
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td><?php echo $row[3]; ?></td>
                <td><?php echo $row[4]; ?></td>
                <td><?php echo $row[5]; ?></td>
                <td><?php echo $row[6]; ?></td>
                <td><?php echo $row[7]; ?></td>
                <td><?php echo $row[8]; ?></td>
                <td><?php echo $row[9]; ?></td>
                <td><?php echo $row[10]; ?></td>
                <td><?php echo $row[11]; ?></td>
                <td><?php echo $row[14]; ?></td>
                <td><a href="confirmbooking.php?bookid=<?php echo $row[0]; ?>">Confirm</a></td>
                    </tr>
<?php }?>
</tbody>             
</table>
        
        </div>

        </div>
        <div><?php include("footer.php"); ?></div>
</body>
</html>