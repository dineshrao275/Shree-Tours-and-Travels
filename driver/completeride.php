<?php
          session_start();
        if(!isset($_SESSION['dlogins']))
        header("location:driverlogin.php");
          
        $id=$_REQUEST['bookid'];
        
        $con=mysqli_connect("localhost","root","","shree");
          
          $r=mysqli_query($con,"update bookings set status='5' where id='$id'");
          
          $r1=mysqli_query($con,"select vehicleno from bookings where id='$id'");
          
          $row1=mysqli_fetch_array($r1);
          
          mysqli_query($con,"update add_vehicle set status='50' where vehicleno='$row1[0]'");
          
          // $r2=mysqli_query($con,"select bookercontact from bookings where id='$id' ");

          //  $row2=mysqli_fetch_array($r2);

          if($r)
          {
            // $_SESSION['rate']=$row2[0];
              header("location:requestofuser.php");
          }
?>