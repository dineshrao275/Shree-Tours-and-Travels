<?php
  include('db.php');
    $array=array();
  $rr=mysqli_query($con,"select name from add_places");
  while($row=mysqli_fetch_array($rr))
  {
      $array[]= array('value'=>$row[0]);
  }
  echo $array;

  ?>