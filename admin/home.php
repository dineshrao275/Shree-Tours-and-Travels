<?php
include("side.php");

// if(!isset($_SESSION['name']))
// header("location:index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/toastr.min.css">
        <style>
        body{
            background:black;
        }
        #right{
            background:linear-gradient(limegreen,indigo);
            margin-left:0px;
            margin-top:100px;
            width:80%;
            height:650px;
            border:1px solid indigo;
            float:right;
            border-radius:25px;

        }
        #hello{
            font-family:cursive;
            font-size:50px;
            text-align:center;
            margin:auto;
        }
        
        #foot{
            padding-top:1000px;
        }
       
            #user{
                padding-top: 50px;
                float:left;
                margin-left:30px;
                height:200px;
                width:250px;
                background:lightcoral;
                
                text-align:center;
                border-radius:0 20px 20px 20px;
            
            }
            
            .user{
                color:lightgrey;
                font-size:30px;
            
                text-decoration:none;
            }

            #user:hover{
                background:royalblue;
                color:black;
                cursor:pointer;
                -ms-transform: scale(1.2); /* IE 9 */
                 -webkit-transform: scale(1.2); /* Safari 3-8 */
                  transform: scale(1.2); 
                  transition:1s;
            }

            .user:hover{
                text-decoration: none;
                color:black;
                
            }
            
            
            /*              css for booking   */        
            
            
            #booking{
                padding-top: 50px;
                float:left;
                margin-left:10px;
                height:200px;
                width:250px;
                background:royalblue;
                
                text-align:center;
                border-radius:0 20px 20px 20px;
                
                color:lightgrey;
                font-size:30px;
            
                text-decoration:none;
               }
            #booking:hover{
                background:royalblue;
            
                cursor:pointer;
                
                text-decoration: none;
                color:black;
                
                -ms-transform: scale(1.2); /* IE 9 */
                 -webkit-transform: scale(1.2); /* Safari 3-8 */
                  transform: scale(1.2); 
                  transition:1s;

            }

             /*              css for cancel booking   */        
            
             #cbooking{
                padding-top: 50px;
                float:left;
                margin-left:10px;
                height:200px;
                width:250px;
                background:blue;
                
                text-align:center;
                border-radius:0 20px 20px 20px;
                
                color:lightgrey;
                font-size:30px;
            
                text-decoration:none;
               }
            #cbooking:hover{
                background:royalblue;
            
                cursor:pointer;
                
                text-decoration: none;
                color:black;
                
                -ms-transform: scale(1.2); /* IE 9 */
                 -webkit-transform: scale(1.2); /* Safari 3-8 */
                  transform: scale(1.2); 
                  transition:1s;
            }

            
            /*-------------------css for total queries---------------*/
            #query{
                padding-top: 50px;
                float:left;
                margin-left:10px;
                height:200px;
                width:250px;
                background:slateblue;
                
                text-align:center;
                border-radius:0 20px 20px 20px;
                
                color:lightgrey;
                font-size:30px;
            
                text-decoration:none;
               }
            #query:hover{
                background:royalblue;
            
                cursor:pointer;
                
                text-decoration: none;
                color:black;
                
                -ms-transform: scale(1.2); /* IE 9 */
                 -webkit-transform: scale(1.2); /* Safari 3-8 */
                  transform: scale(1.2); 
                  transition:1s;
            }
 
            
            </style>


</head>
<body onload="stop_Spinner()">
    <div id="load"><?php include("../preloader.php"); ?></div>
<div id='main'>

    <div id="right">
    <?php
            echo" <p id='hello'>hello ! ";
        echo $_SESSION['name'];
    echo "</p><br/><br/><br/>";
        
    
            
    ?>
    <div id='user'>
    <a href="showusers.php" class='user' >Users <br/>
    <?php include("db.php");
    $r=mysqli_query($con,'select id from registrationuser;');
    $cnt=0;
    while($row=mysqli_fetch_array($r)  ){
        $cnt++;
    } 
    echo $cnt;
    
    ?>
    </a>
    </div>
    
    <div id='booking'>
    No. of Bookings <br/>
    <?php include("db.php");
    $r=mysqli_query($con,'select id from bookings;');
    $cnt=0;
    while($row=mysqli_fetch_array($r)  ){
        $cnt++;
    } 
    echo $cnt;
    
    ?>
    
    </div>
    <div id='cbooking'>
    Canceled Bookings <br/>
    <?php include("db.php");
    $r=mysqli_query($con,"select id from bookings where status='4';");
    $cnt=0;
    while($row=mysqli_fetch_array($r)  ){
        $cnt++;
    } 
    echo $cnt;
    
    ?>
    
    </div>
    <div id='query'>
    Queries Raised<br/>
    <?php include("db.php");
    $r=mysqli_query($con,'select id from queries;');
    $cnt=0;
    while($row=mysqli_fetch_array($r)  ){
        $cnt++;
    } 
    echo $cnt;
    
    ?>
    </a>
    </div>
    
    
    </div>
    </div> 
    <div id="foot">
    <?php include("footer.php");?>
    </div>
    <script src="../js/jquery.js"></script>
    <script src="../js/toastr.min.js"></script>

    <Script>
    var loading=document.getElementById('load');
    function stop_Spinner()
    {
        loading.style.display='none';
    }
</Script>

</body>
</html>
<?php

  


  if(isset($_GET['golin']))
  echo "<script>toastr.success('Log-in Success !!')</script>";
?>