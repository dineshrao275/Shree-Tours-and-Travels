<?php
    include("header.php");
    if(!isset($_SESSION['nameuser']))
    header("location:login.php");

    
    if(isset($_SESSION['idprofile']))
      $id=$_SESSION['idprofile'];
    include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Visited places</title>
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
           background:white;
       }
     
   .visit h1{
       text-align: center;
    font-size:40px;
    text-decoration:underline;
    

    }

            .bt1{
                width:100%;
                margin-top:30px;
                border-radius:25px;
            }
        .bt1 th{
            background:linear-gradient(lightgray,lightblue);
            border-radius:25px;
            font-size:20px;
        }
        .bt1 td{
            background:linear-gradient(lightcyan,yellow);
            border-radius:25px;
            text-align:center;
 
        }
        .bt1 td:hover{
            background:lightsteelblue;
        }
        
        #op table{
        margin:auto;
    }    
    #op td{
            width:200px;
            font-size: 20px;
            font-weight: bold;
    }
    .active a{
        color:red;
    }
            
    #op a{
        text-decoration: none;
         }
    #op a:hover{
        color:green;
        transition:1s;
    }

 

</style>
</head>
<body>

<div class='visit' ><h1>Visited Places</h1></div>
        <div id="op">
            <table  > 
                <tr>
                    <td><a href="profile.php">My Details</a></td>
                    
                    <td class="active"><a href="uservisitedplaces.php">Visited Places</a></td>
                    
                    <td><a href="cancelbookings.php">Cancel Booking</a></td>

                    <td><a href="useraccountstatus.php">Account Status</a></td>
                </tr>
            </table>
        </div>
    

    

<p align=center><?php if(isset($_SESSION['canmes']))
    echo $_SESSION['canmes'];
?></p>
    <div class='di'>
    
       <table  class='bt1' id='userTable' cellspacing=2 cellpadding=10>
            <thead><tr>
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
            
            </tr></thead>
           <tbody> <?php  
        
        $r=mysqli_query($con,"select phone from registrationuser where id='$id'");
        $row=mysqli_fetch_array($r);
        
           $r1=mysqli_query($con,"select * from bookings where bookercontact='$row[0]' and status='5' and cancel='no'");
            while($row1=mysqli_fetch_array($r1))
            {
                ?>

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
                
                    </tr>
<?php }?></tbody>
             </table>
             </div>
             <div>
                 <?php  include("footer.php"); ?>
             </div>
 
</body>
</html>
