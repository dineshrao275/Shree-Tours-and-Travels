<?php

include("side.php");

// if(!isset($_SESSION['name']))
// header("location:index.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ADD VEHICLE</title>
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
        height:400px;
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

    #statedd{
            background:transparent;
            outline:none;
            border:none;
            border-bottom:2px solid blue;
            color:blue;
            border-radius:5px;
    }
    #city{
            background:transparent;
            outline:none;
            border:none;
            border-bottom:2px solid blue;
            color:blue;
            border-radius:5px;
    }
    #foot{
            padding-top:500px;
    }
    
    </style>
      <script src="../jsjquery-2.2.4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    function prefer(){
      var cities=document.form1.cities.value;
      var state=document.form1.stated.value;

      
    }
    </script>

<script type="text/javascript">
   function change_state()
   {
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.open("GET","3next.php?state="+document.getElementById("statedd").value,false);
    xmlhttp.send(null);
    document.getElementById("city").innerHTML=xmlhttp.responseText;
   }
</script>
</head>
<body>
    
        <form action="addvehicle1.php" method="post" enctype="multipart/form-data">
        <div> <h1>Add vehicle</h1></div>

            <table>
            <tr>
                        <td>
                                Transport name = 
                        </td>

                        <td>
                             <input type="text" name='tname' required>
                        </td>
                        <br/>
                </tr>
        
                <tr>
                        <td>
                                vehicle name = 
                        </td>

                        <td>
                             <input type="text" name='vname' required>
                        </td>
                        
               </tr>
                <tr>
                        <td>
                                vehicle no. = 
                        </td>

                        <td>
                             <input type="text" name='vno' style="text-transform:uppercase;"required>
                        </td>
                </tr>
    
                <tr>
                        <td>
                                insurance no. = 
                        </td>

                        <td>
                             <input type="text" name='ino' required>
                        </td>
                </tr>
                <tr>
                        <td>
                                vehicle model = 
                        </td>

                        <td>
                             <input type="text" name='vmod' required>
                        </td>
                </tr>
                <tr>
                        <td>
                                vehicle registration = 
                        </td>

                        <td>
                             <input type="text" name='vreg' required>
                        </td>
                </tr>
                <tr>
                        <td>
                                vehicle seating capacity = 
                        </td>

                        <td>
                             <input type="text" name='vcaps' required>
                        </td>
                </tr>
                <tr>
                        <td>
                                vehicle images = 
                        </td>

                        <td>
                             <input type="file" name='img'required >
                        </td>
                </tr>
                
                <tr>
                        <td>
                                Rent = 
                        </td>

                        <td>
                             <input type="text" name='rent' required>
                        </td>
                        
               </tr>
               <tr>
                <tr>
                        <td>
                                Contact = 
                        </td>

                        <td>
                             <input type="text" name='cont' required>
                        </td>
                        
               </tr>
               
               <tr>
                        <td>
                               Address  = 
                        </td>

                        <td>
                             <input type="text" name='address' required>
                        </td>
                        
               </tr>
               <tr>
               
                            <td>State =</td>
               <td>
                  <select id="statedd" onChange="change_state()" name='state'>
                      <option>State State</option>
                      <?php
                      include("db.php");
                      $res=mysqli_query($con,"select * from state");
                      while($row=mysqli_fetch_array($res)) 
                      {
                          ?>
                          <option value="<?php echo $row["StCode"]; ?>"><?php echo $row["StateName"]; ?></option>
                          <?php
                      }
                       ?>
                  </select>
            </td>
            </tr>
            <tr>
            <td>City =</td>
            <td>
                 <select id="city" name="city" onselect="prefer()">
                        <option>Select City</option>
                    </select>
                 </td>
 
                        </td>
                        
               </tr>
               <tr><td>Vehicle Type =</td> <td><select name="vtype" id="city">
               <option value="bus">BUS</option>
                      <option value="car">CAR</option>
               </select></td></tr>
                <tr>
                         <td colspan='2' align="center" >
                             <input type="submit" name='sub'  class="btn" value="Add" >
                        </td>
                </tr>
                
                
                         

                                 
                
                </table>
        </form>

        <script src="../js/jquery.js"></script>
        <script src="../js/toastr.min.js"></script>
<div id='foot'>
<?php
include("footer.php");

if(isset($_GET['rt']))
echo "<script>toastr.success('Vehicle Added Successfully !!')</script>";
?>      
</div>
</body>
</html>