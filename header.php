<!DOCTYPE html>
<html lang="en">
<head>
    
<style>



#header{

background:linear-gradient(lightseagreen,violet);
color:black;
font-family:sans-serif;
text-align: center;
text-shadow: 5px 5px 5px rgba(247, 39, 2, 0.932) ;
border-radius: 190px;
font-size: 20px;
width:100%;
height:200px; 
}

#option{ 

    margin-right: 30px;
    float:right;
    padding-top:20px;
    height:20px;

    }

    .main12{
    height:300px;
    }

#option tr td{
    
    border-radius: 25px;
    width:140px;
    height:50px;
 
 text-align:center;

}
#option tr td:hover{
    background:blue;
    -ms-transform: scale(1.2); /* IE 9 */
                 -webkit-transform: scale(1.2); /* Safari 3-8 */
                  transform: scale(1.2); 
                  transition:1s;
    cursor:pointer;

}


#option a{
color:black;
text-decoration:none ;
font-size: 18px;
font-weight: bold;
font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  
}


#option a:hover{
    font-size: 17px;
color:white;
border-radius: 5px;

}

.v{
    text-transform: uppercase;
}


.logo{
    float:left;
     height: 200px;
     width: 200px;
     border-radius:50%;
    

}
.logo:hover{
    
    -ms-transform: scale(1.1); /* IE 9 */
  -webkit-transform: scale(1.1); /* Safari 3-8 */
  transform: scale(1.1); 
  transition:0.6s;
  
}

</style>

</head>

<body>
<div class="main12">
    
<div id="header"><a href="image/logo.png">
        <img src="image/logo.png"  class="logo" alt=""></a><br> <?php  include("animatedhead.php"); ?>
            
        </div>

        <div id="option">
            <table > 
                <tr>
                    <td class='z'><a href="index.php">HOME</a></td>

                    <td class='y'><a href="aboutus.php">ABOUT US</a></td>
                    
                    <td class='x'><a href="resources.php">RESOURCES</a></td>
                    
                    <td class='w'><a href="pictures.php">PICTURES</a></td>
                   
                   <?php 
                    session_start();
                    if(isset($_SESSION['nameuser'])){
                        ?>
                   <td class='v'><a href='profile.php'>hello <?php 
                   echo $_SESSION['nameuser'];echo" </a></td>";
                     }
                  else
                   {
                  echo "  <td class='v'><a href='login.php'>LOGIN</a></td>";
                       
                   }
                    ?>
                    <td class='u'><a href="contactus.php">CONTACT US</a></td>
                </tr>
            </table>
        </div>
        
</div> 
<div><hr></div>
       
</body>
</html>
