
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
   <style>
   @import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: url("../image/home_bg.jpg") no-repeat;
  background-size: cover;
}
.login-box{
  text-align:center;
  width: 280px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: white;
}
.login-box h1{
    color:black;
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
  background: transparent;
  color: black;
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
a{
  text-decoration:none;
  color:black;
  font-size:25px;
  background-color:indigo;
  border-radius:15px;
}
a:hover{
  background-color:purple;
  color:white;
}
#err{
  color:red;
  text-align:center;
}

   </style>
   
    <!-- <link rel="stylesheet" href="login.css"> -->
  </head>
  <body>
    <form action="authentication.php" method="post"> 
<div class="login-box">
  <h1>Admin Login</h1>
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
  <div id="err">
  
  <?php
  session_start();
      if(isset($_SESSION['err'])){
       
        echo $_SESSION['err'];
        
    }
  ?> 
  </div>
  <div id="btn">
  <input type="submit" class="btn" value="Sign in">
</div>
</div>
</form>
  </body>
 <?php
                $_SESSION['err']="";

                ?>

</html>
