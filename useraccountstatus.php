<?php
    include("header.php");
    if(!isset($_SESSION['nameuser']))
    header("location:login.php");

    include("db.php");
    if(isset($_SESSION['idprofile']))
        $id=$_SESSION['idprofile'];
    $r=mysqli_query($con,"select phone from registrationuser where id='$id'");
$row=mysqli_fetch_array($r);
$r1=mysqli_query($con,"select id from bookings where status='1' and status='2' and status='3' and cancel='no' and bookercontact='$row[0]'");

$cnt=0;
while($row1=mysqli_fetch_array($r1))
{
    $cnt++;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Account Status</title>
    <script>
function dua()
{
    var a=confirm("Do you want to Delete this Account");
    if(a)
    return true;
    else
    return false;
}
    </script>
    <style>
              body{
                  background:white;
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
        text-decoration:underline;
        transition:1s;
     }

  .acc h1{
      text-align: center;
    font-size:40px;
    text-decoration:underline;
    color:black;

    }
    .pass a{
        text-decoration: none;
        color:black;
    }
    .pass{
        float:left;
        height: 150px;
        width: 150px;
        border-radius:50%;
        background:lightgreen;
        text-align:center;
        cursor:pointer;
        
    }
    .pass:hover{
        height: 150px;
        width: 150px;
        border-radius:50%;
        background:lightblue;
        text-align:center;
    }
    .pass p{
        padding-top:25px;
        font-weight:bold;
        color:green;
        font-size:20px;
    }

    
    .del{
        float:right;
        margin-right:1000px;
        height: 150px;
        width: 150px;
        border-radius:50%;
        background:lightpink;
        text-align:center;
        cursor:pointer;
    }
    .del:hover{
        height: 150px;
        width: 150px;
        border-radius:50%;
        background:grey;
        text-align:center;
    }
    .del p{
        padding-top:25px;
        font-weight:bold;
        color:indigo;
        font-size:20px;
    }
    .del a{
        text-decoration: none;
        color:brown;
    }
    #book{
      
    }
    #book p{
        padding-top:100px;
        font-size:40px;

    }

        .feat{
            padding-top: 50px;
        }
    </style>
</head>

<body>

<div class='acc'><h1>Account Status</h1></div>
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
    

        <div class='feat'>
        <div class='pass'><p><a href='changepassword.php'>Change PassWord</a></p></div>
        <div class='del'><p><a href="deleteuseraccount.php" onclick="return dua()">Delete Account</a></p></div>
        <div id='book'><p>No. of Bookings = &nbsp <?php echo $cnt; ?></p></div>

        </div>
    <div><?php  include("footer.php"); ?></div>
</body>
</html>