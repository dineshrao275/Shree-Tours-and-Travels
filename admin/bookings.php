

<?php
include("side.php");
// if(!isset($_SESSION['name']))
// header("location:index.php");




include("db.php");
$r=mysqli_query($con,"select distinct(bookercontact) from bookings where status='2'");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>BOOKINGS</title>
    <style>
        body{
            background:lightslategray;
        }

    #bo{ 
            margin-top:120px;
            width:80%; 
            height:600px;
            border:none;
            float:right;
            border-radius:25px;

    
    }
    #bo h1{
        font-size:60px;
        text-decoration: underline;

    }
    .boot{
        outline:none;
        width:100%;
    }
    .boot th{
        text-align: center;
        background:linear-gradient(black,purple);
        font-size:30px;
        color:orange;
        border-radius: 25px;

    }
    .boot td:hover{
        background:grey;
        border-radius:15px;
    }
    .boot td{
        background:linear-gradient(white,blue);
        text-align:center;
        border-radius:15px;
        font-size:25px;
    }
    .boot td a{
        color:red;
        text-decoration:none;
        font-weight:bold;
        font-family:cursive;
    }


    </style>
    <script>
        function confirmed(){

        }
    </script>


</head>


<body>
<div id='bo'>
    <h1>New Bookings</h1>
<table  class='boot' cellspacing='2' cellpadding='10' >
  <tr>
  <th>Sno </th>
  <th> Booker Name </th>      
   <th>View More</th> 
   
   
   </tr>

   <?php 
  
 $Sno=0;
    while($row=mysqli_fetch_array($r))
        {
            $r1=mysqli_query($con,"select bookername from bookings where bookercontact='$row[0]'");
             $row1=mysqli_fetch_array($r1);
        ?>


<tr>
    <td><?php echo ++$Sno; ?></td>
    <td><?php echo $row1[0]; ?></td>
    <td><a href="viewbookings.php?no=<?php echo $row[0]; ?>">View </a></td>
    

</tr>    
<?php
}
?>


    </table>

</div>
<br><br>
<div>
    <?php include("footer.php"); ?>  </div>
</body>
</html>


