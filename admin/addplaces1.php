    <?php
session_start();

if(!isset($_SESSION['name']))
header("location:index.php");
$name=$_POST['nm'];
$about=$_POST['about'];
$state=$_POST['state'];
$city=$_POST['city'];
move_uploaded_file($_FILES["picture"]["tmp_name"],"../image/".$_FILES["picture"]["name"]);
$image=$_FILES["picture"]["name"];

$con=mysqli_connect("localhost","root","","shree");

$rn=mysqli_query($con,"insert into add_places(name,photos,about,state,city)values('$name','$image','$about','$state','$city')");

if($rn){
header("location:home.php?aba=0");

}
else
 echo mysqli_error($con);

?>