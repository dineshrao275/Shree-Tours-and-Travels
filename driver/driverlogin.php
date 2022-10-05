<!DOCTYPE html>
<html lang="en">
<head>
    <title>Driver Login</title>
    <style>
        body{
            background-image: url("../image/login_bg.jpg");
            background-attachment: fixed;
            height:100%;
            width:98%;
        }
        #main3{
            margin-left: 400px;
            margin-top: 100px;
        }
        #bod h1{
            font-size: 70px;
            font-family:tahoma;
            text-decoration: underline;
            color:blueviolet;
        }
        #bod span{
            font-size:25px ;
            font-weight: bold;
            color:indigo;
        }

        #bod span input{
            background:transparent;
            font-size: 20px;
            border:none;
            border-bottom: 2px solid brown;
            border-radius: 25px;
            outline:none;

        }
            .sub{
                background:chartreuse;
                border-radius: 25px;
                margin-left: 150px;
            }
            .sub:hover{
                background:coral;
                border-radius: 25px;
                margin-left: 150px;
            
            }
            #foot{
                margin-top: 10%;
            }
            #log{
                color:red;
            }
    </style>
</head>
<body>
    <div id='main3'>
        <div id='bod'>
            <form action="driverauth.php" method='post' enctype='multipart/form-data'>
            <span id="h"><h1>Driver Login </h1></span>
            <br><br><br>
            <span>UserName:-</span>&nbsp &nbsp 
            <span><input type="text" name='nm' value='' required placeholder='Username '></span>
            <br><br>
            <span>Password :-</span>&nbsp &nbsp 
            <span><input type="password" name='pass' id='pass' value='' onmouseover="mouseoverPass();" onmouseout="mouseoutPass();" required placeholder='Password'></span>
          
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

            <br>
            <span id='log'> 
                <?php session_start();
                    if(isset($_SESSION['dloginf']))
                        {
                            echo $_SESSION['dloginf'];
                        }            
            ?></span>
            <br><br><br><br>
            <span class="sub"><input type="submit" name='sub'  value="Login">
            </span>
            </form>
        </div>

    </div>
   <div id='foot'> <?php include("../footer.php");
   echo $_SESSION['dloginf']='';
    ?></div>
</body>
</html>