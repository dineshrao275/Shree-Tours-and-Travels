<!DOCTYPE html>
<html lang="en">
<head>
    <style>
     .popular_places_table td{
         width: 350px;
         text-align:center;
     }
     .popular_places_image{
         height:250px;
         width:250px;
         border-radius:10px 0px 10px 0px;
         transition:0.6s;
     }
     .popular_places_image:hover{

        -ms-transform: scale(1.2); /* IE 9 */
  -webkit-transform: scale(1.2); /* Safari 3-8 */
  transform: scale(1.2); 
  transition:0.6s;
  
}
     }
    </style>
</head>
<body>
    <div class="popular_places">

    
<?php

 
    $count=0;
    $con=mysqli_connect("localhost","root","","shree");
    $r=mysqli_query($con,"select status, id , photos, name , city from add_places order by status desc");

    echo "<table  class='popular_places_table' cellpadding=10 cellspacing=80> <tr>";
    $i=1;
    while($row=mysqli_fetch_array($r))
    {  $P=$row[2];
        echo "<td text-align='center' class='popular_places_td'><a href='aboutimg.php?a=$row[1]'> <img src='image/$P' class='popular_places_image' ></a><br><b>#$i</b><br>$row[3] , $row[4]</td>";
        $count++;
        $i++;
        if($count == 3)
        break;
    
    }  
    echo "</tr></table>";



?>
    </div>
</body>
</html>