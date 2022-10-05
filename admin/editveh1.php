<?php session_start();

    if(!isset($_SESSION['name']))
        header("location:index.php");
            $id=$_POST['id'];
            $transportname =$_POST["tname"];
            $vehiclename =$_POST["vname"];
            $vehicleno =$_POST["vno"];
            $insuranceno=$_POST['ino'];
            $vehiclemodel=$_POST["vmod"];
            $vehicleregistration=$_POST["vreg"];
            $vseat=$_POST["vcaps"];
            $rent=$_POST['rent'];
            $contact=$_POST['cont'];
            $state=$_POST['state'];
            $city=$_POST['city'];
            $vtype=$_POST['vtype'];
            $add=$_POST['address'];
          $r='';
          include('db.php');
          if($_FILES['picture']['name']=="")
          {
            $rn=mysqli_query($con,"update add_vehicle set transportname='$transportname',
vehiclename='$vehiclename',vehicleno='$vehicleno', insuranceno='$insuranceno',vehiclemodel='$vehiclemodel',
vehicleregistration='$vehicleregistration',vseat='$vseat',rent='$rent',state='$state',city='$city',contact='$contact',vehicletype='$vtype' ,address='$add' where id='$id'");

          }
          
          else{
              move_uploaded_file($_FILES["picture"]["tmp_name"],"../image/"
            .$_FILES["picture"]["name"]);
            
            $image=$_FILES["picture"]["name"];
        
            include("db.php");

$rn=mysqli_query($con,"update add_vehicle set transportname='$transportname',
vehiclename='$vehiclename',vehicleno='$vehicleno', insuranceno='$insuranceno',vehiclemodel='$vehiclemodel',
vehicleregistration='$vehicleregistration',vseat='$vseat',image='$image',rent='$rent',state='$state',city='$city',contact='$contact',vehicletype='$vtype', address='$add' where id='$id'");
          }

if($rn){
  
$_SESSION['up']="vehicle updated successfully!!";
header("location:vehicleinfo.php?editveh=0");

}
else
 echo mysqli_error($con);

?>


