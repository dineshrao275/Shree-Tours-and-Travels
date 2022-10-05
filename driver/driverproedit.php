<!--     DRIVER POFILE EDIT PAGE   -->
<?php
    $id=$_REQUEST['id'];
session_start();
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
    <title>Driver profile edit Page</title>
    <style>
        body{
            background:lightsalmon;
        }
        #dh{
            height:150px;
            width:100%;
            background:linear-gradient(red,blue);
            border-radius: 25px;
        }
        #dh h1{
            padding-top: 0px;
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
            background:linear-gradient(white,green);
            font-weight: bold;
            text-align: center;
            border-radius: 25px;
            font-size: 20px;
        }
        #pro td:hover{
            background:lightsalmon;
        }
        #pro input{
            background: transparent;
            outline:none;
            border:none;
            border-bottom: 2px solid black;
            text-transform: capitalize;
            border-radius: 25px;
        
        }
        .btn input{
        text-decoration: none;
        color:navy;
        font-size: 25px;
        font-weight: bold;
        cursor:pointer;
        border:none;
        
          }
          .btn input:hover{
              color:orangered;
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
            <div id='pro' >
                <form action="driverproedit1.php" method='post' enctype='multipart/form-data'>
                <table cellspacing='10' cellpadding='10';>
                    <tr>
                        <th colspan=2 align='center'><h1>Edit Information</h1></th>
                    </tr>
                    
                    <tr>
                        <td>Name :-</td><td><input type="text" name='nm' value='<?php echo $row[1]; ?>' required ></td>
                    </tr>
                    <tr>
                        <td>Experience :-</td><td><input type="text" name='exp' value='<?php echo $row[2]; ?>' required></td>
                    </tr>
                    <tr>
                        <td>license :-</td><td><input type="text" name='lic' value='<?php echo $row[3]; ?>' required ></td>
                    </tr>
                    <tr>
                        <td>vehicle no :-</td><td><input type="text" value='<?php echo $row[4]; ?>'  name='vno' required style="text-transform:uppercase;"></td>
                    </tr>
                    <tr>
                        <td>Address :-</td><td><input type="text" value='<?php echo $row[5]; ?>' name='add' required></td>
                    </tr>
                    
                    <tr>
                       <td>Image :-</td><td><input type="file" name='photo' value="<?php echo $row[6]?>"placeholder='image' > <?php echo "<image src='../image/$row[6]' height=50 width=50>";?> </td>
        </tr>
                    <tr>
                        <td>contact :-</td><td><input type="text" value='<?php echo $row[7]; ?>' name='con' required></td>
                    </tr>
                    <tr>
                        <td colspan='2'><p class='btn'><input type="submit" name='sub' value='update'></p> </td>
                    </tr>
                        
            </table>
            </form>
        <br><br><br></div>
        
</body>
</html>
<?php
         } }
         include("../footer.php");
        ?>