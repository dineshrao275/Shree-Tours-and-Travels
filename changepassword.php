<?php
    include("header.php");
    if(!isset($_SESSION['nameuser']))
    header("location:login.php");

    include("db.php");
    if(isset($_SESSION['idprofile']))
        $id=$_SESSION['idprofile'];
    $r=mysqli_query($con,"select phone from registrationuser where id='$id'");
$row=mysqli_fetch_array($r);
$r1=mysqli_query($con,"select id from bookings where status='1' and cancel='no' and bookercontact='$row[0]'");

$cnt=0;
while($row1=mysqli_fetch_array($r1))
{
    $cnt++;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Change Password</title>
    <link rel="stylesheet" href="css/toastr.min.css">
    <style>
              body{
                  background:linear-gradient(white,cyan);
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
        color:white;
        transition:1s;
     }
   .ch h1{
    font-size:60px;
    text-decoration:underline;
    color:blue;

    }
    .pass{
        float:left;
        height: 100px;
        width: 100px;
        border-radius:50%;
        background:lightyellow;
        text-align:center;
        cursor:pointer;
    }
    .pass:hover{
        height: 100px;
        width: 100px;
        border-radius:50%;
        background:lightblue;
        text-align:center;
    }
    .pass p{
        padding-top:10px;
        font-weight:bold;
        color:green;
        font-size:20px;
    }

    
    .del{
        float:right;
        margin-right:1100px;
        height: 100px;
        width: 100px;
        border-radius:50%;
        background:lightpink;
        text-align:center;
        cursor:pointer;
    }
    .del:hover{
        height: 100px;
        width: 100px;
        border-radius:50%;
        background:grey;
        text-align:center;
    }
    .del p{
        padding-top:10px;
        font-weight:bold;
        color:indigo;
        font-size:20px;
    }
    #book{
        padding-top:100px;
    }
    #book p{
        font-size:40px;

    }
    #chpas h2{

        margin:auto;
        margin-left: 40%;
    }
    #chpas span{

margin:auto;
margin-left: 35%;
font-size: 20px;
}
    #chpas{
        padding-top: 100px;
    }
    #chpas input{

        background: transparent;
        color:blue;
        border-radius: 25px;
        border:none;
        border-bottom: 2px solid black;
        outline:none;
        font-size: 20px;

    }
    #chpas .sub input{

margin:auto;
color:yellow;
font-family: tahoma;font-weight: bold;
margin-left: 10%;
font-size: 25px;
background: lightcoral;
border:none;
        border-bottom: 2px solid black;
        outline:none;

}
#chpas .sub input:hover{
    background:violet;
    color:black;
}

    </style>
</head>

<body>

<div class='ch'><h1>Account Status</h1></div>
        <div id="op">
            <table > 
                <tr>
                    <td><a href="profile.php">My Details</a></td>
                    
                    <td><a href="uservisitedplaces.php">Visited Places</a></td>
                    
                    <td><a href="cancelbookings.php">Cancel Booking</a></td>

                    <td class='active'><a href="useraccountstatus.php">Account Status</a></td>
                </tr>
            </table>
        </div>
            <div id="chpas">
            <form action="changepassword1.php" method="post" enctype='multipart/form-data'>

                    
                <h2>Change Password</h2>
                <br><br><br>
                <span>Current Password :-&nbsp&nbsp<input type="password" value='' name='pass1' placeholder="enter your current password" required></span>
                   <br>   <br>     
                   <span>New Password :-&nbsp&nbsp<input type="password" value='' name='pass2' placeholder="enter your new password" required></span>
                   <br>
                   <span id='mes'><?php if(isset($_SESSION['pw']))
                                            echo $_SESSION['pw'];
                                            ?></span>
                   <br>
                   <br>
                    <span class="sub"><input type="submit" value='Submit'  name='sub' ></span>
            </form>     
            </div>

    <div><?php  include("footer.php"); 
   echo $_SESSION['cp']="";
   echo $_SESSION['pw']="";
    ?></div>
    <script src="js/jquery.js"></script>
    <script src="js/toastr.min.js"></script>
  
</body>
</html>
<?php if(isset($_GET['cgs']))
    echo "<script>toastr.success('Password Changed Successfully')</script>"
?>