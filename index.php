
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="css/toastr.min.css">
    <script>
    function rate()
{
    var a=confirm("Do you want to rate this ride ?");
    if(a)
       {

  window.location.assign("rating.php");
       }
       
}
    </script>
    <style>

        body{

background:lavender;
background-repeat: no-repeat;
background-attachment:fixed;

}

  

    .h{
        color:black;
        text-decoration:underline;
        text-align:center;  
        font-family:tahoma;
        font-size: 30px;
    }
    .head{
        height:350px;
    }
    .slide{
            height:520px;
            
    }
    .place{
        height:400px;
    }


   .z{
       border:1px solid blue; 
   }

         </style>
</head>
<body >
  



  <?php

// header

echo"<div class='head'>";
    include("header.php");
   echo "</div>";



//     rating 
if(isset($_SESSION['forgetrate'])){
include("db.php");
$r2=mysqli_query($con,"select distinct bookercontact from bookings where status='5' ");

          while ($row2=mysqli_fetch_array($r2))
          {
            $number=$_SESSION['forgetrate'];
            
              if($row2[0]==$number){
              echo" <script>
              rate();
              </script>";
              }
          }
        }





        //slider

   echo"<div class='slide'>";
    include("slide.php");
   echo "</div>";
        echo "<br/>";
       
       //PLACES
       
        echo "<hr> <div class='place'>";     
        echo "<div ><h3 class='h'>~~&~~Places you want to visit~~&~~</h3></div>";  
    include("places.php");
       echo "</div>";
        echo"<br/> <hr/>";


        // vehicles


        echo "<div class='vehicle'>";
        echo "<div ><h3 class='h'>~~&~~Would You Like To Book A Ride ? ~~&~~</h3></div>";
        include("vehicles.php");
    echo "</div>";
    echo"<br/> <hr/>";   

    // POPULAR PLACES


    echo "<div class='popularplaces'>";
    echo "<div ><h3 class='h'>~~&~~Popular Places ~~&~~</h3></div>";
 include("popularplaces.php");
echo "</div>";

         //SHOW RATING
         echo"<br/> <hr/>"; 
         echo "<div class='showrating'>";
         echo "<div ><h3 class='h'>~~&~~   Reviews   ~~&~~</h3></div>";
     include("showrating.php");
     echo "</div>";
     


?>
<div>
    
    <?php
 //footer
 
 include("footer.php");

?>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/toastr.min.js"></script>
<script>
  function success_toast()
  {
    toastr.success("Login Successfully !!");
  }
</script>



</body>
</html>
<?php   if(isset($_GET["s"]))
  echo"<script>success_toast()</script>";
  
 ?>
