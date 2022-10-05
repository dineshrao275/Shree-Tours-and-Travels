<?php 
include('db.php');

$r=mysqli_query($con,'SELECT * FROM `rating` ORDER BY `rating` DESC ');
$count=1;
while($row=mysqli_fetch_array($r))
{
  
if($count<=3){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/showrating.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
  <div class="wrapper">
    <div class="box">
      <i class="fas fa-quote-left quote"></i>
      <p><?php echo $row[3] ; ?></p>
      <div class="content">
        <div class="info">
          <div class="name"><?php echo $row[1] ; ?></div>
          <?php if($row[4] < 1 || ($row[4]>=1 && $row[4] < 2 ) ){
         ?> <div class="stars">
            <i class="fas fa-star" ></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <?php 
          } 
           
           else if($row[4]>=2 && $row[4] < 3){
         ?> <div class="stars">
            <i class="fas fa-star" ></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <?php 
          } 

          else if($row[4]>=3 && $row[4] < 4 ){
         ?> <div class="stars">
            <i class="fas fa-star" ></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <?php
           }

           else if($row[4]>=4 && $row[4] < 5 ){
         ?> <div class="stars">
            <i class="fas fa-star" ></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <?php 
          } 
          else
          {
         ?> <div class="stars">
            <i class="fas fa-star" ></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <?php } ?>
        </div>
        <div class="image">
        <?php  echo " <img src='image/$row[2]' alt=''>";      $count+=1; ?>
        </div>
      </div>
    </div>
    
  </div> 

</body>
</html>
<?php }
}
 ?>