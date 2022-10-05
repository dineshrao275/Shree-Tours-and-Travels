
<?php
include("header.php");
//session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/toastr.min.css">

    	<style>
        body{
            background:lavender;
        }
        
        .u{
       border:1px solid blue; 
   }
        
        #main2{
                    width:100%;
                    
                }
                #main2 h1{
                    text-align:center;
                    font-size:50px;
                    text-decoration:underline;
                    color:green;
                }
                #add{
                    margin-top:100px;
                }
                #left{
                    float:left;

                }
                #left img{

                    width:800px;
                }
                #right{
                    margin:auto;
                    margin-left:840px;
                    background:whitesmoke;
                    text-align:center;
                    padding-top:20px;
                    border-radius:25px;
                }
                #right span{
                    font-weight:bold;
                    font-size:25px;

                }
                #right input{
                    background:transparent;
                    outline:none;
                    border:none;
                    border-bottom:2px solid black;
                    border-radius:25px;
                    font-size:20px;
                }

                #submit{
                        margin-left:100px;
                        background:blue;
                        color:blue;
                        font-weight:bold;
                        font-family:tahoma;
                        cursor:pointer;
                }
                #submit:hover{
                        margin-left:100px;
                        background:blue;
                        color:yellow;
                        font-weight:bold;
                        font-family:tahoma;
                        cursor:pointer;
                }
                #foot{
                    padding-top:60px;
                }
                #right textarea{
                    background:transparent;
                }
                #mes{
                    color:red;
                    font-weight:bold;
                }
                .text{
                font-size:25px;
                }
               </style>
</head>
<body>
    <div id='main2'><h1>Contact Us</h1></div>

    
    
    
    </p><p class="text">		<span class="bold">We're located at:</span>
				</br>
				3rd floor, manglam fun square , udaipur-313001, Rajasthan , India
			
		</p></div>
<div id='left'><a href="https://g.page/Manglam-Fun-Square?share"><img src="image/map.PNG" alt="" ></a> </div>
<form action="contactus1.php" method='post' enctype='multipart/form-data'>
<div id='right'>
<span>Full Name :-</span>
<span>

<input type="text" maxlength='30' required  value='' name='nm' placeholder='your full name '></span>
<br><br><br>
<span>Email :-</span>
<span>
<span>

<input type="email" maxlength='40' required  value='' name='email' placeholder='your email '></span>
<br><br><br>
<span>Queries :-</span>
<span>
<span>
                <textarea name="query" id="que" cols="30" rows="10" required></textarea>
</span>
<br><br><br>
<span id=''><input type="submit" value='send' name='sub' id='submit'  ></span>

</div>
</form>
<div id='foot'>
<?php

include("footer.php");
?>

</div>
<script src="js/jquery.js"></script>
<script src="js/toastr.min.js"></script>

</body>
</html>
<?php
    if(isset($_GET["qs"])){
    echo "<script>toastr.success('Query Sent Successfully.. ') ;</script>";
    }?>