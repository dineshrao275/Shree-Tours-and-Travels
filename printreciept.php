<?php
ob_start();
session_start();
    
    if(!isset($_SESSION['nameuser']))
    header("location:login.php");
if(isset($_SESSION['binvoice1']))
    $invoice=$_SESSION['binvoice1'];
    include("db.php");
    $r=mysqli_query($con,"select * from bookings where invoiceno='$invoice'");
    $row=mysqli_fetch_array($r);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Print Reciept</title>
    <link rel="stylesheet" href="css/button_style.css">
    <link rel="stylesheet" href="css/toastr.min.css">
   <style>
         body{
        background:lavender;
       background-attachment:fixed;
        }
        #heading{
            float:left;
        }
        #book{
        
                        width:100%;
        }
        .img1{
            float:right;
            height: 100px;
            width: 100px;
            border-radius:50%;
            margin-left:800px;
        }
        table th{
            margin:auto;
            border-top:2px solid grey;
            border-bottom:2px solid black;
            width:100%;
        }
        .a{
            float:left;
            font-size:20px;
            font-family:tahoma;

        }
        .b{
            float:right;
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
        .s{
            background: transparent;
            cursor:pointer;
            width:60px;
        }
        
   </style>
</head>
<body>
	<div id='book'>
    
    <table cellspacing=0 cellpadding=10  ><tr>
    
    <th><h1 id="heading"><u>Rider Receipt</u>  <img src="image/logo.png" class="img1" alt="logo"></th></tr><tr>
    
    <th><p >Generated:&nbsp<?php
   echo date('d/m/y');echo"&nbsp&nbsp&nbsp&nbsp"; echo date('h:m:s');?></p></th>
    </tr>
    
    <tr><td colspan='2'><h2>Booking Information</h2></td></tr>
    <tr><td class='a'>Invoice no :-</td><td class='b'><?php echo $row[14]; ?></td></tr>
    
    <tr><td class='a'>Transport name:-</td><td class='b'><?php echo $row[1]; ?></td></tr>
    
    <tr><td class='a'>Vehicle Type:-</td><td class='b'><?php echo $row[2]; ?></td></tr>
    
    <tr><td class='a'>Vehicle no. :-</td><td class='b'><?php echo $row[3]; ?></td></tr>
    
    <tr><td class='a'>Vehicle Rent (per place):-</td><td class='b'><?php echo $row[4]; ?></td></tr>
    
    
    <tr><td class='a'>Pick-Up date:-</td><td class='b'><?php  echo $row[5];?></td></tr>

    <tr><td class='a'>Pick-Up Time:-</td><td class='b'><?php  echo $row[15];?></td></tr>
    
    <tr><td class='a'>Pick-Up Place:-</td><td class='b'><?php echo $row[6] ;?></td></tr>
    
    
    <tr>
        <td colspan='2' align='center'>
        <h2>Booked By</h2>
        </td>
    </tr>
    <tr><td class='a'>Name :-</td><td class='b'><?php echo $row[7] ;?></td></tr> 
    
    <tr>
        <td class='a'>contact :-  </td>
        <td class='b'><?php echo $row[8] ;?></td>
    </tr>
     
     
    <tr>
        <td class='a'>Address :-  </td>
        <td class='b'><?php echo $row[9] ;?></td>
    </tr>

    <tr><td><h2>Driver Details</h2></td></tr>
    
    
    <tr>
        <td class='a'>Driver Name:</td><td class='b'><?php echo $row[10] ;?></td>    
    </tr>
    
    <tr>
        <td class='a'>contact :-  </td>
        <td class='b'><?php echo $row[11] ;?></td>
    </tr>
    <tr><td><h2>Transport Address Details</h2></td></tr>
    <?php  
            include("db.php");
            $r1=mysqli_query($con,"select * from add_vehicle where vehicleno='$row[3]'");

            $row1=mysqli_fetch_array($r1);
    
    ?>
    <tr>
        <td class='a'>Address :-  </td>
        <td class='b'><?php echo "$row1[14],$row1[11] <br>$row1[12]";?></td>
    </tr>

    <tr><th colspan='2'><button  value="" onclick='window.print()' class='s'  name='printreceipt'>Print and Confirm</button></th></tr>
   
    <tr>
        <td>
        <h2>Important Information</h2>
        </td>
    </tr>
        <tr>
            <td>
                <p>

1. A printed copy of this receipt must be presented to the driver at the <br/>time of pickup.</p>
<p>
2. You are advised to carry a Government recognised photo identification <br/>(ID) during your journey. This can include: Driving License, <br/>Passport, PAN Card, Voter ID Card or any other ID issued by the <br/>Government of India.

                
                </p>
        </td>
        </tr>
    </table>
    
    
    </div>

    <div class="buttons">
    <a class="button"href="vehicleinfouser.php">Back</a>
    <a class="button two" href="index.php">Home</a>
  </div>


    <script src="js/jquery.js"></script>
    <script src="js/toastr.min.js"></script>
    
    
</body>
</html>
<?php   if(isset($_GET["n"])){
          echo" <script>toastr.success('Booking Request Sent.... ');</script>";
}
?>  