<?php
       session_start();
      if(isset($_SESSION['forgetrate']))
      $number=$_SESSION['forgetrate'];
      include('db.php');

      $r=mysqli_query($con,"select photo , firstname, lastname from registrationuser where phone='$number'");
      $row=mysqli_fetch_array($r);
  


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rate Us Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <style>
      body{
        
        position:fixed;
         top:0;left:0;  
         width:100%;
            height:100vh;
            
            z-index: 999999;
          background:rgba(187,287,87,.5);
          }
      .container{

        width:40%;
      margin-left:35%;
      margin-top:10%;
      }
      .head{
        margin-left: 18%;
        text-decoration:underline;
        
      }
      .rateyo{
        margin-left:35%;
      margin-top:30%;
      }
     #review{
       margin-top: 10%;
       background:transparent;
     }
       
     .submit{
       color:red;
       font-weight: bold;
      margin-left: 90px;
      margin-top: 40px;
     }
        
    </style>
</head>

<body>
<div class="container">
    <div class="row">

<form action="" method="post" enctype="multipart/form-data">

    <div>
        <h3 class="head"><b>Rate Us !!</b> </h3>
    </div>

    <div>
         
        <input type="text" name="name"  value='<?php echo "$row[1] $row[2]";?>'
        style="display:none;">
    </div>
    <div>
      <input type="text" name='picture' value="<?php echo $row[0];?>" style="display:none;" >
    </div>

         <div class="rateyo" id= "rating"
         data-rateyo-rating="4"
         data-rateyo-num-stars="5"
         data-rateyo-score="3">
         </div>

    <!-- <span class='result'>0</span> -->
    <input type="hidden" name="rating">

    </div>
    <div>
      <textarea name="review" id="review" cols="30" rows="5" placeholder='Describe Your Experience...' required ></textarea>
    </div>

    <div><input type="submit" name="add" value="Submit" class="submit"> </div>

</form>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<script>


    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });

</script>
</body>

</html>
<?php
require 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["name"];
    $picture=$_POST["picture"];
    $rating = $_POST["rating"];
    $review = $_POST["review"];

    $sql = "INSERT INTO rating (name,photo,description,rating) VALUES ('$name','$picture','$review','$rating')";
    if (mysqli_query($con, $sql))
    {
      mysqli_query($con,"update bookings set status='6' where bookercontact='$number'");
        header("location:index.php?rated=1");
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    mysqli_close($con);
}
?>