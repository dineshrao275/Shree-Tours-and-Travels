<?php
    $invoice=$_POST['binvoice'];
    $tname=$_POST['tname'];
    $vtype=$_POST['vtype'];
    $vno=$_POST['vno'];
    $vrent=$_POST['rent'];
    $pud=$_POST['pd'];
    $put=$_POST['pt'];
    $pup=$_POST['pp'];
    $bn=$_POST['cname'];
    $bc=$_POST['contact'];
    $ba=$_POST['address'];
    $dn=$_POST['dname'];
    $dc=$_POST['dc'];


    include("db.php");
    $r=mysqli_query($con,"insert into bookings 
    (transportname,vehicletype,vehicleno,vehiclerent,pickupdate,pickupplace,bookername,bookercontact
    ,bookeraddress,drivername,drivercontact,cancel,invoiceno,pickuptime)
     values('$tname','$vtype','$vno','$vrent','$pud','$pup','$bn','$bc','$ba','$dn','$dc','no','$invoice','$put')");
    if($r)
    {
    session_start();
    $_SESSION['binvoice1']=$invoice;
        mysqli_query($con,"update bookings set status='1' where invoiceno='$invoice'");
        header("location:printreciept.php?n=1");
    }
?>