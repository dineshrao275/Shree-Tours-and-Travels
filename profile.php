<?php
    
    include("header.php");
    if(!isset($_SESSION['nameuser']))
    header("location:login.php");
    
    $uid=$_SESSION['idprofile'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
    <style>
        #pink{
            background:white;
        }
            .main h1{
                text-align: center;
                font-size: 40px;
                color:magenta;
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


    .tab{
        
        
        margin:auto; 
        margin-top: 50px;
        padding-top: 50px;   
        width: 1000px;
        text-align: center;
    }

    .tab td{

        font-size: 20px;
    }

    .tab td:hover{
    
        
        transition:0.5s;
        cursor:arrow;
    }

    

    .i{
        height:90px;
        width:90px;
        border-radius: 50%;
    }

        #logoutbutton{
            padding: 20px;
            border-radius:10px;
            background:tomato;
            font-weight: bold;
            font-size: 15px;
        }
        #proeditbutton{
            padding: 15px;
            border-radius:10px;
            background:skyblue;
        }
        #logoutbutton:hover{
          
            background:red;
        }
        #proeditbutton:hover{
          
            background:blue;
        }
       .tab a{
           text-decoration:none;
           font-size: 20px;
           font-weight: bold;
           color:black;
       }
       
    </style>
</head>
<body id="pink">

<div class="main">
<h1>User Profile</h1>

</div>

        <div id="op">
            <table > 
                <tr>
                    <td class='active'><a href="profile.php">My Details</a></td>
                    
                    <td><a href="uservisitedplaces.php">Visited Places</a></td>
                    
                    <td><a href="cancelbookings.php">Cancel Booking</a></td>

                    <td><a href="useraccountstatus.php">Account Status</a></td>
                </tr>
            </table>
        </div>


    
<?php
$con=mysqli_connect("localhost","root","","shree");
$r=mysqli_query($con,"select*from registrationuser where id='$uid'");
echo "<table  class='tab'  cellpadding=10 cellspacing=8>";
if($r)
while($row=mysqli_fetch_array($r))
{
    echo "<tr><td colspan='2' align='center' ><a href='image/$row[3]'><img src='image/$row[3]' class='i'> </a></td></tr>
    <tr><td>NAME :- </td>
    <td>$row[1]&nbsp$row[2]</td></tr>
    <tr><td>Email :-</td>
    <td>$row[4]</td></tr>
    <tr><td>PHONE :-</td>
    <td>$row[5]</td></tr>
    <tr><td>idproof :-</td>
    <td>$row[6]</td></tr>
    <tr><td>iddetails :-</td>
    <td>$row[7]</td></tr>
    
    <tr><td>location :-</td>
    <td>$row[10]</td></tr>
    <tr><td colspan='2' align='center' ><button id='logoutbutton'><a href='logout.php' class='link'>Logout</a></button></td></tr>
    <tr><td colspan='2' align='center' ><button id='proeditbutton'><a href='proedit.php?a=$uid' class='link'>Edit</a></button></td></tr>";
}
echo "</table>";
if(isset($_SESSION['upro']))
{
    echo $_SESSION['upro'];
}
echo $_SESSION['upro']='';

?>
</body>
</html>


<?php  include("footer.php");?>
    