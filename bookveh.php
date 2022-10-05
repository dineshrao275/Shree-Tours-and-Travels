<?php
session_start();

if(!isset($_SESSION['nameuser']))
header("location:login.php");
    if(!isset($_SESSION['idprofile']))
    header("location:login.php");
    else{
       $idp= $_SESSION['idprofile'];
    }
    $id=$_REQUEST['id'];
    include('db.php');
    $r=mysqli_query($con,"select * from add_vehicle where id='$id' ");
    $row=mysqli_fetch_array($r);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Book Vehicle</title>
    <link rel="stylesheet" href="css/button_style.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
   
   <style>
         body{
        background:lightgoldenrodyellow ;
       background-attachment:fixed;
        }
        
        #book{
            margin:auto;
        
                        width:100%;
        }
        #book table{
                margin-left: 300px;
        }
        .img1{
            float:right;
            height: 100px;
            width: 100px;
            border-radius:50%;
            margin-left:800px;
        }
        #book th{
            margin:auto;
            border-top:2px solid grey;
            border-bottom:2px solid black;
            width:100%;
        }
        .a{
           padding-left: 100px;
            font-size:20px;
            font-family:tahoma;

        }
        .b{
            margin-left: -120%;
            font-size:18px;
            font-family:sans-serif;
            color:indigo;
            outline:none;
            border:none;
            background:transparent;
        }
        .sub{
            font-size:30px;
            background:green;
            border-radius:25px;
        }
        .sub:hover{
            font-size:30px;
            background:lightgreen;
            color:yellow;
            border-radius:25px;
        }
        
   </style>
</head>
<body>

	<div id='book'>
    <form action="bookveh1.php" method='post' enctype='multipart/form-data'>
    
    <table cellspacing=0 cellpadding=10  ><tr>
    
    <td><h1 id="heading"><u>Rider Receipt</u>  <img src="image/logo.png" class="img1" alt="logo"></td></tr>
    <tr>
    
    <th><p >Generated:&nbsp<?php
   echo date('d/m/y');echo"&nbsp&nbsp&nbsp&nbsp"; echo date('h:m:s');?></p></th>
    </tr>
    
    <tr>
        <td colspan='2'><h2>Booking Information</h2></td>
    </tr>
        <tr>
            <td class='a'>Invoice no. :-</td>
            <td class='b'>
        <input type="text" value="<?php  $r=md5(microtime());  echo substr($r,0,6);?>" class='b' name="binvoice"  readonly></td>
    </tr>
    <tr>
        <td class='a'>Transport name:-</td>
        <td class='b'><input type="text" name='tname' value='<?php echo $row[1]; ?>' class='b' readonly ></td>
    </tr>
    
    <tr>
        <td class='a'>Vehicle Type:-</td>
        <td class='b'><input type="text" name='vtype' value='<?php echo $row[13]; ?>' class='b' readonly ></td>
    </tr>
    
    <tr>
        <td class='a'>Vehicle no. :-</td>
        <td class='b'><input type="text" name='vno' value='<?php echo $row[3]; ?>' class='b' readonly ></td></tr>
    
    <tr>
        <td class='a'>Vehicle Rent (per place):-</td>
    <td class='b'><input type="text" name='rent' value='<?php echo $row[9]; ?>' class='b' readonly></td>
    </tr>
    
    <tr>
        <td class='a'>Pick-Up Date:-</td>
        <td class='b'><input type="date" required name='pd' value='' class='b' id="mydate" ></td>
    </tr>

    <tr>
        <td class='a'>Pick-Up Time:-</td>
        <td class='b'><input type="time" required name='pt' value='' class='b' id="mydate" ></td>
    </tr>
   
    <tr>
        <td class='a'>Pick-Up Place:-</td>
        <td class='b'><input type="text" name='pp' value=''  required class='b' placeholder='write your pick-up point'></td>
    </tr>
    
    <?php  $r1=mysqli_query($con,"select * from registrationuser where id='$idp'");
    $row1=mysqli_fetch_array($r1);  ?>
    
    <tr>
        <td >
        <h2>Booked By</h2>
        </td>
    </tr>
    <tr>
        <td class='a'>Name :-</td>
        <td class='b'><input type="text" value='<?php echo" $row1[1] &nbsp $row1[2]";?>'name='cname' class='b' readonly ></td>
    </tr> 
    
    <tr>
        <td class='a'>contact :-  </td>
        <td class='b'><input type="text" value='<?php echo $row1[5];?>' name='contact' class='b' readonly></td>
    </tr>
     
     
    <tr>
        <td class='a'>Address :-  </td>
        <td class='b'><input type="text" value='<?php echo $row1[10];?>' name='address' class='b' readonly></td>
    </tr>

    <tr><td><h2>Driver Details</h2></td></tr>
    
    <?php
    $r2=mysqli_query($con,"select * from add_driver where vehicleno='$row[3]'");
    $row2=mysqli_fetch_array($r2);
    ?>
    
    <tr>
        <td class='a'>Driver Name:</td><td class='b'><input type="text" value='<?php echo $row2[1];?>' name='dname' class='b' readonly></td>    
    </tr>
    
    <tr>
        <td class='a'>contact :-  </td>
        <td class='b'><input type="text" value='<?php echo $row2[7];?>' name='dc' class='b' readonly></td>
    </tr>

    <tr><th><input type="submit" class='sub' value="BOOK" ></th></tr>
    
    <tr>
        <td>
        <h2>Important Information</h2>
        </td>
    </tr>
        <tr>
            <td>
                <p>
                
1. A printed copy of this receipt must be presented to the driver at the time of pickup.</p>
<p>
2. You are advised to carry a Government recognised photo identification (ID) during your journey. This can include: Driving License, Passport, PAN Card, Voter ID Card or any other ID issued by the Government of India.

                
                </p>
        </td>
        </tr>
    </table>
    
    </form>
    
    </div>
  
    <div class="buttons">
    <a class="button"href="vehavailable.php">Back</a>
    <a class="button two" href="index.php">Home</a>
  </div>

  
    <script src="js/jquery.js"></script>
    <script src="js/toastr.min.js"></script>
    <script>
$(document).ready(function()
{
    var today= new Date();
    var month= today.getMonth() + 1;
    var day = today.getDate();
    var year= today.getFullYear();
    
    if(month<10)
    month='0' + month.toString();

    if(day<10)
    day='0' + day.toString();

    var mindate=year + '-' + month + '-' + day;
    $("#mydate").attr('min',mindate);
    
}
)

    </script>
</body>
</html>