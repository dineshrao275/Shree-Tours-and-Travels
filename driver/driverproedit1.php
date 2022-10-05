<?php
    session_start();
    if(isset($_SESSION['driverid']))
    $id=$_SESSION['driverid'];
    if(!isset($_SESSION['dlogins']))
    header("location:driverlogin.php");
else{
    $name=$_POST['nm'];
    $exp=$_POST['exp'];
    $lic=$_POST['lic'];
    $vno=$_POST['vno'];
    $add=$_POST['add'];
    $cont=$_POST['con'];
    
    $con=mysqli_connect("localhost","root","","shree");
    $r="";
    if($_FILES['photo']['name']=="")
    {
        
    $r=mysqli_query($con,"update add_driver set drivername='$name',experience='$exp',license='$lic',vehicleno='$vno',address='$add',contactno='$cont' where id='$id'");

    }
    else
    {
    
        move_uploaded_file($_FILES['photo']['tmp_name'],"../image/".$_FILES['photo']['name']);
        $photo=$_FILES['photo']['name'];
        $r=mysqli_query($con,"update add_driver set drivername='$name' , experience='$exp' , license='$lic' , vehicleno='$vno' , address='$add' ,
        photo='$photo'
        , contactno='$cont' where id='$id'");
        
    }
    if($r)
    {
        $_SESSION['updr']="profile updated successfully!!!";
        header("location:index.php");
    }

}
?>