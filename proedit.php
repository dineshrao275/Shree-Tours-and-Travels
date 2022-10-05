<?php
session_start();
if(!isset($_SESSION['nameuser']))
header("location:login.php");

    $id=$_REQUEST['a'];
    include("db.php");


    $r=mysqli_query($con,"select * from registrationuser where id='$id'");
    if($row=mysqli_fetch_array($r)){
    

?> 
<html >
<head>
    <title>edit info</title>
<style>
body{
    background-image:url("image/bg2.png");
    
}
    #main{ background:black;
        
        border-radius:25px;
        text-align:center;
        width: 700px;
        height: 150%;
        margin:auto;
        
    }
    .main{
        color:blue;
    }
    th{
        text-align:center;
        font-size:3em;
        color:blue;
    }
    tr td{
        color:white;
        padding:15px;
        font-size:3em;
    }
    input{
        font-size:15px;
        border-radius: 15px;
        outline:none;
        border:none;
    }
    .btn{
        margin:auto;
        border-radius:10px;
        background:green;
        color:white;
        font-weight:bold;

    }
    </style>
</head>
 <body> 
      <form action="proedit1.php" method="post" enctype="multipart/form-data">
     
      <div id="main">
       <h1 class="main">--*--Edit Profile--*--</h1>
      <table><tr> <td >
                First Name :
               </td>
               <td> <input type="text" value="<?php echo $row[1] ?>" name="fname" maxlength="15" required  style="text-transform:capitalize;" 
                >
            </td>
            </tr>
            <tr>
            <td >         
                Last Name :
                </td>
                <td><input type="text"  value="<?php echo $row[2] ?>"name="lname" maxlength="10" >
            </td></tr>

            <tr><td> 
                photo :
                </td>
                <td> <input type="file" name='photo' value="<?php echo $row[3]?>"placeholder='image' >
                <image src='image/<?php echo $row[3] ?>' height=50 width=50>
            </td></tr>
            
            <tr><td > 
                E-mail :
                </td>
                <td><input type="email" value="<?php echo $row[4] ?>" name="email" maxlength="30" >
            </td></tr>
            <tr><td >  
                phone :
                </td>
                <td><input type="text" value="<?php echo $row[5] ?>" name="phone" maxlength="11" >
            </td></tr>
            <tr><td > 
                idproof :
                </td>
                  <td>  <select name="idproof" id="idcard" required>
                    <option value="Aadhar card"> Aadhar card</option>
                    <option value="voter id"> voter id</option>
                    <option value="passport "> passport </option>
                
                    </select>
                    </td></tr>
                    <tr><td>id proof details:</td>
                <td><input type="text" value="<?php echo $row[7] ?>" name="idproof1" maxlength="20" >
            </td></tr>
            <tr><td >
              Location :
               </td>
               <td><input type="text" value="<?php echo $row[10] ?>" name="location" maxlength="40"   >
            </td> </tr>
            <tr>
        <td colspan="2" align="center" >
    <input type="submit" value="Update" class="btn" name="create">
     </td>
     </tr> 
     </table>
     </div>
           </form>
     </body>
     </html>
     <?php
      }
      else 
      echo mysqli_error($con);
       ?>