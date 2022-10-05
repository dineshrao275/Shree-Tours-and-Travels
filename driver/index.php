<!--     DRIVER HOME PAGE   -->
<?php
session_start();
        if(isset($_SESSION['driverid']))
        $id=$_SESSION['driverid'];
        if(!isset($_SESSION['dlogins']))
        header("location:driverlogin.php");
        else
        {
        $con=mysqli_connect("localhost","root","","shree");
        $r=mysqli_query($con,"select * from add_driver where id='$id'");
        while($row=mysqli_fetch_array($r))
        {
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Driver Home Page</title>
   <link rel="stylesheet" href="../css/button_style.css">
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
        #profile a{
            text-decoration: none;
            font-size: 25px;
            font-weight: bold;
            

        }
        #profile a:hover{
            color:green;
        }
        #request a{
            text-decoration: none;
            font-size: 25px;
            font-weight: bold;
            

        }
        #request a:hover{
            color:green;
        }
        #pro table{
            
            margin:auto;
            height:50%;
            width:60%;
            
        }
        #pro td{
            background:linear-gradient(white,black);
            font-weight: bold;
            text-align: center;
            border-radius: 25px;
        }
        #pro td:hover{
            background:lightsalmon;
        }
        .btn a{
        text-decoration: none;
        color:yellow;
        font-size: 25px;
          }
          .btn a:hover{
              color:blue;
          }
            .pp{
                width: 250px;
                height: 250px;
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
            <p id='mes'>
                <?php
                    
                  if(isset($_SESSION['updr']))
                {
                    echo $_SESSION['updr'];
                }
            ?>
            
            </p>
            <div id='pro' >
                <table cellpadding=10;>
                    <tr>
                        <th colspan=2 align='center'><h1>Details</h1></th>
                    </tr>
                    
                    <tr>
                        <td colspan='2'><?php echo "<img src='../image/$row[6]' class='pp'>"; ?> </td>
                    </tr>
                    <tr>
                        <td>Name :-</td><td><?php echo $row[1]; ?></td>
                    </tr>
                    <tr>
                        <td>Experience :-</td><td><?php echo $row[2]; ?></td>
                    </tr>
                    <tr>
                        <td>license :-</td><td><?php echo $row[3]; ?></td>
                    </tr>
                    <tr>
                        <td>vehicle no :-</td><td><?php echo $row[4]; ?></td>
                    </tr>
                    <tr>
                        <td>Address :-</td><td><?php echo $row[5]; ?></td>
                    </tr>
                    <tr>
                        <td>contact :-</td><td><?php echo $row[7]; ?></td>
                    </tr>
                        
            </table>
        <br><br><br></div>
        
  <div class="buttons">
    <a class="button"href="driverproedit.php?id=<?php echo $row[0] ; ?>">Edit</a>
    <a class="button two" href="logoutdriver.php">Logout</a>
  </div>
</body>
</html>
<?php
         } }
         include("../footer.php");
      echo  $_SESSION['updr']="";
        ?>