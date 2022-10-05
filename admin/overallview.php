<?php include("side.php");  
    include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
    .mb{
        width:80%;
        float:right;
        margin-top:100px;
           
    }
    .mb div a{
        color:white;
    }
    .mb div a:hover{
        color:black;
        
    }
    .mb div:hover{
        
        -ms-transform: scale(1.2); /* IE 9 */
  -webkit-transform: scale(1.2); /* Safari 3-8 */
  transform: scale(1.2); 
  transition:0.6s;
  

    }
    .mb div hr{ 
                margin-left:70px;
                 width:100px;
                border:1px solid black;
    }
    
    .placesdiv{
        
        height:240px;
        width:240px;
        float:left;
        text-align:center;
        padding-top:100px;
        border-radius: 50%;
        background:linear-gradient(lightblue,green);
        font-size:25px;
    }
    .transportdiv{
        
        height:240px;
        width:240px;
        float:left;
        margin-left:20px;
        text-align:center;
        padding-top:80px;
        border-radius: 50%;
        background:linear-gradient(lightyellow,indigo);
        font-size:25px;
    }
    .bookingsdiv{
        
        height:240px;
        width:240px;
        float:left;
        margin-left:20px;
        text-align:center;
        padding-top:100px;
        border-radius: 50%;
        background:linear-gradient(lightcyan,black);
        font-size:25px;
    }
    .queriesdiv{
        
        height:240px;
        width:240px;
        float:left;
        margin-left:20px;
        text-align:center;
        padding-top:65px;
        border-radius: 50%;
        background:linear-gradient(lightpink,blue);
        font-size:25px;
    }
    .cancelledbookingdiv{
        
        height:240px;
        width:240px;
        float:left;
        margin-top:20px;
        text-align:center;
        padding-top:40px;
        border-radius: 50%;
        background:linear-gradient(lightgray,orange);
        font-size:25px;
    }
    
    </style>
</head>
<body>
    <div class="mb">
        
        
    <div class="placesdiv">
    <a href="pictures.php">NO. OF PLACES <br/><hr>
    <?php  $r=mysqli_query($con,"select count(id) from add_places");
    $row=mysqli_fetch_array($r);
      echo  "<span>$row[0]</span>";  ?>
        
        </a>
    </div>
   
    <div class="transportdiv"><a href="vehicleinfo.php"> NO. OF TRANSPORTS<br/><hr>
    <?php  $r=mysqli_query($con,"select count(id) from add_vehicle");
    $row=mysqli_fetch_array($r);
      echo  "<span>$row[0]</span>";  ?>
      </a>

    </div>

    <div class="bookingsdiv"> <a href="totalbookings.php"> NO. OF BOOKINGS<br/><hr>
    <?php  $r=mysqli_query($con,"select count(id) from bookings");
    $row=mysqli_fetch_array($r);
      echo  "<span>$row[0]</span>";  ?>
      </a>

    </div>

    <div class="queriesdiv"><a href="totalqueries.php"> NO. OF QUERIES RAISED <br/><hr>
    <?php  $r=mysqli_query($con,"select count(id) from queries");
    $row=mysqli_fetch_array($r);
      echo  "$row[0]";  ?>
        </a>
    </div>

    <div class="cancelledbookingdiv"><a href="cancelledbookings.php"> NO. OF CANCELLED BOOKINGS <br/> <hr>
    <?php  $r=mysqli_query($con,"select count(id) from bookings where cancel='yes' and status='4'");
    $row=mysqli_fetch_array($r);
      echo  "$row[0]";  ?>
        </a>
    </div>

    
    </div>
    <div class="footer"><?php  include("footer.php");  ?></div>
</body>
</html>