    <?php 
            session_start();
            
    if(!isset($_SESSION['name']))
    header("location:index.php");
            $transportname =$_POST["tname"];
            $vehiclename =$_POST["vname"];
            $vehicleno =$_POST["vno"];
            $insuranceno=$_POST["ino"];
            $vehiclemodel=$_POST["vmod"];
            $vehicleregistration=$_POST["vreg"];
            $vseat=$_POST["vcaps"];
            $rent=$_POST['rent'];
            $contact=$_POST['cont'];
            $state=$_POST['state'];
            $city=$_POST['city'];
            $vtype=$_POST['vtype'];
            $add=$_POST['address'];
            move_uploaded_file($_FILES["img"]["tmp_name"],"../image/"
            .$_FILES["img"]["name"]);
            
            $image=$_FILES["img"]["name"];
        
            $con=mysqli_connect("localhost","root","","shree");

$rn=mysqli_query($con,"insert into add_vehicle(transportname,
vehiclename,vehicleno,insuranceno,vehiclemodel,vehicleregistration,vseat,image,rent,state,city,contact,vehicletype,address)
values('$transportname',
'$vehiclename','$vehicleno','$insuranceno','$vehiclemodel','$vehicleregistration','$vseat','$image','$rent','$state','$city','$contact','$vtype','$add')");

if($rn){
    session_start();
$_SESSION['add']="vehicle added successfully!!";
header("location:home.php?rt=0");

}
else
 echo mysqli_error($con);

?>


    ?>