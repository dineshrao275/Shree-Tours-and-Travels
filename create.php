<?php
include("header.php");
 ?>

<html>
<head><title>create account</title>
<style>
html {
    background:lightgray;
}

.main input{
    font-size:20px;
    outline:none;
    background:transparent;
    border:none;
    border-bottom:2px solid black;
    border-radius: 5px;
    color:black;
}
.main{
    
    margin-top:10%;
    margin-left: 30%;
    color:green;
    box-align:center;
    height:800px;
}
 .main h1{
    font-size: 50px;
    text-decoration: underline;
    font-family:tahoma  ;
    font-weight: bold;
    
}
.main div{
    margin-top: 20px;
     color:rgb(38, 0, 255);
    font-weight: bolder;
    font-family: cursive;
    font-size: 20px;
   
}
.button {
    margin-left: 170px;
    margin-top: 30px;
    
    
}
.button input{
    font-family: cursive;
    background-color: indigo;
    font-size: larger;
    font-weight: bolder;
    color:burlywood;
    border-radius: 50px;
    cursor: pointer;
}
.button input:hover{
    background-color: black;
    color:white;
}
#idcard{
    background:transparent;
    border:none;
    border-bottom: 2px solid black;
    border-radius:5px;
    outline:none;
    font-size:20px;
}

</style>
 <link rel="stylesheet" href="css/button_style.css"> 
</head>
<body>
    
<div class="main">
<form action="create1.php"  method="post" enctype="multipart/form-data" >
   <h1>--*--Create New Account--*--</h1>
    <div class="a">
                First Name :
                <input type="text" name="fname" maxlength="15" required
                style="text-transform:capitalize;"
                >
            </div>
            <div class="b">         
                Last Name :
                <input type="text" name="lname" maxlength="10" >
            </div>
            <div class="c"> 
                photo :
                <input type="file" name="photo" required>
            </div>
            
            <div class="c"> 
                E-mail :
                <input type="email" name="email" maxlength="30" required >
            </div>
            <div class="d">  
                phone :
                <input type="text" id='mob' name="phone" onkeyup="validate()" maxlength="10"required " >
                <label for="mob" id='lbl' style="visibility:hidden;">Invalid</label>
            </div>
            <div class="c">             
                idproof :
                  <select name="idproof" id="idcard" required>
                    <option value="Aadhar card"> Aadhar card</option>
                    <option value="voter id"> voter id</option>
                    <option value="Passport "> Passport </option>
                
                    </select>
                    </div>
                    <div>
                      id proof details:-<input type="text" value="" name="idproof1" maxlength="20" required>
            </div>
            
            <div class="e">
                Username :
                <input type="text" name="uname" maxlength="15" required>
            </div>
            <div class="f">
              Password :
                <input type="password" name="pass" maxlength="15" minlength="8" required >
            </div> 
            <div class="g">
              Location :
               <input type="text" name="location" maxlength="40"  required >
            </div> 
<div class="button">
    <input type="submit" onclick="validate()" value="Create" class="btn" name="create">
</div>



</form>
</div>

<div class="buttons">
    <a class="button"href="login.php">Back</a>
    <a class="button two" href="index.php">Home</a>
  </div>

<div><?php include("footer.php");
?> </div>

<script type="text/javascript">
       function validate()
       {    var no=document.getElementById("mob").value;
        var regx=/^[6-9]\d{9}$/;
           if(regx.test(no))
           {
                document.getElementById("lbl").innerHTML="Valid";
                document.getElementById("lbl").style.visibility="visible";
                document.getElementById("lbl").style.color="green";
           }
           else{
               
            document.getElementById("lbl").innerHTML="Invalid";
                document.getElementById("lbl").style.visibility="visible";
                document.getElementById("lbl").style.color="red";
           }
       }
    </script>

</body>
</html>
