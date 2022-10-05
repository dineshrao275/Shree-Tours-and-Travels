<?php     
        include("header.php");

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    .main{
        height:70px;
        color:blue;
        background:linear-gradient(violet,grey);
        border-radius:35px;
        text-align:center;    
    }
    h1{
    font-size:60px;
    }
    .x{
       border:1px solid blue; 
   }
    
</style>
</head>
<body>
<div class="main">
<h1>Resources</h1>

</div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Resources</title>
    <style>
    .rest{
       padding-top: 100px;
       margin:auto;
   }
   .rest th{
       color:red;
       font-size:30px;
       background:linear-gradient(white,black);
   }
        body{
            background-image:url("image/userDashboard_bg.jpg");
            background-attachment:fixed;        }
          .rest td a{
                font-family:tahoma;
                  text-decoration:none;
                color:indigo;
        }
        .rest td{
            border-radius: 50%;
            text-align: center;
       font-size:20px;
       background:linear-gradient(yellow,green);
        }
        .resd{
            padding-top:30px;
        }

    </style>
</head>
<body>
<div id='resd'>
            
<table   class='rest' cellpadding=10 cellspacing=2>
            <tr>
                <th>
                    Sno
                </th>
                <th>Transport</th>
                <th>Vehicle type</th>
                <th>Vehicle Name</th>
                <th>Vehicle Seats</th>
                <th>More</th>
            </tr>
    <?php
        include("db.php");
        $r=mysqli_query($con,"select*from add_vehicle");
       $Sno=0;
        while($row=mysqli_fetch_array($r))
        {    ?>
          <tr>  <td><?php echo ++$Sno; ?></td>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[13]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[7]; ?></td>
            <td><a href="aboutvehuser.php?a=<?php echo $row[0]; ?>">View More...</a></td>
            </tr>
<?php }?>
        </table>
       
</div>
<div><?php  include("footer.php");          ?></div>
</body>
</html>