<?php

include("side.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Drivers</title>
    <link rel="stylesheet" href="../css/toastr.min.css">
    <style> 
   body{
        background-color:black;
        
    }
    form{
        margin-top:300px;
        COLOR:green;
        font-family:tahoma;
        font-size:30px;
        width: 1200px;
        height:600px;
        margin-left:400px;
            }
    input{
        text-transform: capitalize;
        background:transparent;
            color:white;
            border:none;
            border-bottom:2px solid blue;
            font-size:20px;
            border-radius:5px;
            outline:none;
   
    }
    h1{       
              font-size: 70px;
        font-family:cursive;
        color:lawngreen;
    }
    .btn{
        margin-top:30px;
        background:cyan;
        color:red;
        border-radius:25px;
        width:100px;
        height:50px;
        cursor:pointer;
       
    }
    .btn:hover{
        margin-top:30px;
        background:green;
        color:yellow;
        border-radius:25px;
        width:100px;
        height:50px;
        cursor:pointer;
       
    }


    #vehno{
            background:transparent;
            outline:none;
            border:none;
            border-bottom:2px solid blue;
            color:blue;
            border-radius:5px;
    }
    </style>
    
</head>
<body>


       <form action="adddriver1.php" method='post'  enctype="multipart/form-data">
       <table>
            <tr>
                 <h1>Add Driver Information</h1>
            </tr>
            <tr>
            <td>NAME : </td>
            <td>
                <input type="text" name='nm' value="" required>
            </td></tr>
            <tr>
            <td>EXPERIENCE : </td>
            <td>
                <input type="textarea" name='exp' value="" required>
            </td></tr>
            <tr>
            <td>LICENSE NO : </td>
            <td>
                <input type="text" name='lic' value="" required>
            </td></tr>
               <tr>
               
                            <td>Vehicle No :</td>
               <td>
                  <select id="vehno" name='vno' style="text-transform:uppercase;">
                      <option>Select Vehicle No</option>
                      <?php
                      include("db.php");
                      $res=mysqli_query($con,"select * from add_vehicle ");
                      while($row=mysqli_fetch_array($res)) 
                      {
                          ?>
                          <option value="<?php echo $row['vehicleno']; ?>"><?php echo $row['vehicleno']; ?></option>
                          <?php
                      }
                       ?>
                  </select>
            </td>
            </tr>
            <tr>
            <td>Address</td>
            <td>  <input type="text" name='add' value='' required>          </td>
 
                        
                        
               </tr>
               <tr>
               <td>IMAGE : </td>
            <td>
                <input type="file" name='photo' value="" required>
            </td></tr>

            <tr>
            <td>CONTACT NO. : </td>
            <td>
                <input type="text" name='cno' value="" required>
            </td></tr>
            
            <tr>
            <td>USERNAME : </td>
            <td>
                <input type="text" name='unm' value="" required>
            </td></tr>
            <tr>
            <td>PASSWORD : </td>
            <td>
                <input type="PASSWORD" name='pass' value="" required>
            </td></tr>
            <tr><td colspan='2' align="center">
            <input type="submit"  class="btn" value="Add" name="sub" >
            </td></tr>
       </table>

    </form>
<script src="../js/jquery.js"></script>
<script src="../js/toastr.min.js"></script>
<div id='foot'>
<?php
include("footer.php");
if(isset($_GET['ew']))
  echo "<script>toastr.success('Driver Added Successfully !!')</script>";
?>
</div>
</body>
</html>