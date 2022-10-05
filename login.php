<?php  echo "<div class='hel'>";
 include("header.php");
 echo "</div>"; 

  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>User Login Page</title>
    
    <link rel="stylesheet" href="css/toastr.min.css">
   <style>
   @import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
body{
  margin:0;
  padding:0;

  font-family: sans-serif;
  background:lightgray;
  background-size: cover;
}
hel{
  height:500px;
  width:100%;
}
  .log{
  
    height:700px;
    width:700px;

  }
.login-box{
  text-align:center;
  width: 280px;
  position: absolute;
  top: 100%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: black;
}
.login-box h1{
  float: left;
  font-size: 40px;
  border-bottom: 6px solid #4caf50;
  margin-bottom: 50px;
  padding: 13px 0;
}
.textbox{
  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px 0;
  margin: 8px 0;
  border-bottom: 1px solid #4caf50;
}
.textbox i{
  width: 26px;
  float: left;
  text-align: center;
}
.textbox input{
  border: none;
  outline: none;
  background: none;
  color: blue;
  font-size: 18px;
  width: 80%;
  float: left;
  margin: 0 10px;
}
.btn{
    margin-top:12px;
  width: 40%;
  outline: none;
  border-radius:15px;
  background: green;
  color: lawngreen;
  padding: 5px;
  font-size: 18px;
  cursor: pointer;
}
.btn:hover{
  background-color:lightgreen;
  color:blue;
}
.log a{
  width:5px;
  text-decoration:none;
  color:white;
  font-size:25px;
  background:darkblue;
  border-radius:15px;
}
.log a:hover{
  background-color:purple;
  color:white;
}
#err{
color:red;
}
.text{
  color:blue;
  text-decoration: underline;
}
   </style>
   
    <!-- <link rel="stylesheet" href="login.css"> -->
  </head>
  <body>
  
 
  
  <div class='log'>
             <form action="authentication.php" method="post"> 
                  <div class="login-box">
                       <h1> User Login</h1>
                          <div class="textbox">
                                <i class="fas fa-user"></i>
                 <input type="text" name="un" placeholder="Username" required>
  </div>

        <div class="textbox">
            <i class="fas fa-lock"></i>
    <input type="password" name="pa" id='pass' placeholder="Password" onmouseover="mouseoverPass();" onmouseout="mouseoutPass();" required>
  </div>
  <script>
  function mouseoverPass(obj) {
  var obj = document.getElementById('pass');
  obj.type = "text";
}
function mouseoutPass(obj) {
  var obj = document.getElementById('pass');
  obj.type = "password";
}
</script>
  <div id="err"><?php
  if(isset($_SESSION['err']))
  echo $_SESSION['err'];


?></div>
  <div id="btn">
  <input type="submit" class="btn" value="Sign in">
</div>or
    <br/><br/>
   <p class="text"> if you don't have any account ? </p>&nbsp<br/>
<a href="create.php">create new account</a>
</div>
</form>
</div>
<div id='foot'><?php  include("footer.php");   ?></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/toastr.min.js"></script>
<script>
  function success_toast()
  {
    toastr.success("Successfully Registered \n Now You Can Login");
  }
  function exist(){
    toastr.error("Already have an Account, please login");
  }
</script>
 


</body>


   
</html>
<?php

echo $_SESSION['err']="";
if(isset($_GET['n']))
echo"<script>success_toast()</script>";
if(isset($_GET['m']))
echo"<script>exist()</script>";
?>
