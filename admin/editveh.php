<?php
    $id=$_REQUEST['id'];
    session_start();
    
    if(!isset($_SESSION['name']))
        header("location:index.php");

    include("db.php");

    

    $r=mysqli_query($con,"select * from add_vehicle where id='$id'");
    if($row=mysqli_fetch_array($r)){
    

?> 
<html >
<head>
    <title>edit info</title>
<link rel="stylesheet" href="../css/button_style.css">
<style>
body{
    background:linear-gradient(lightgray,lightblue);
    
}
.main{
        height:70px;
        color:red;
        background:darkorchid;
        border-radius:35px;
        text-align:center;    
    }
    h1{
    font-size:60px;
    }
    #main{ background:black;
        
        border-radius:25px;
        text-align:center;
        margin:auto;
        width: 950px;
        
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
    }
    .btn{
        margin-top:30px;
        border-radius:10px;
        background:green;
        color:white;
        font-weight:bold;

    }
</style>
<script src="../js/jquery-2.2.4.min.js"></script>
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

<div class="main">
<h1>UPDATE VEHICLE</h1>

</div>
    
<div id="main">

   
            <form action="editveh1.php" method="post" enctype="multipart/form-data">
        <div> <h1 align="center">Add vehicle</h1></div>

            <table>
            <td>ID: </td>
            <td>
                <input type="hidden" name='id' value="<?php echo $row[0]?>" placeholder='name of the place'>
            </td></tr>
   
            <tr>
                        <td>
                                Transport name = 
                        </td>

                        <td>
                             <input type="text" name='tname' value='<?php echo $row[1]?>' required>
                        </td>
                        <br/>
                </tr>
        
                <tr>
                        <td>
                                vehicle name = 
                        </td>

                        <td>
                             <input type="text" name='vname'  value='<?php echo $row[2]?>' required>
                        </td>
                        
               </tr>
                <tr>
                        <td>
                                vehicle no. = 
                        </td>

                        <td>
                             <input type="text" name='vno' value='<?php echo $row[3]?>'  required>
                        </td>
                </tr>
                <tr>
                        <td>
                                insuranceno = 
                        </td>

                        <td>
                             <input type="text" name='ino' value='<?php echo $row[4]?>'  required>
                        </td>
                </tr>
    
                <tr>
                        <td>
                                vehicle model = 
                        </td>

                        <td>
                             <input type="text" name='vmod' value='<?php echo $row[5]?>'  required>
                        </td>
                </tr>
                <tr>
                        <td>
                                vehicle registration = 
                        </td>

                        <td>
                             <input type="text" name='vreg' value='<?php echo $row[6]?>'  required>
                        </td>
                </tr>
                <tr>
                        <td>
                                vehicle seating capacity = 
                        </td>

                        <td>
                             <input type="text" name='vcaps' value='<?php echo $row[7]?>'  required>
                        </td>
                </tr>
                <tr>
                        <td>
                                vehicle images = 
                        </td>

           
            <td>
                <input type="file" name='picture' value="<?php echo $row[8]?>"placeholder='image' >
                <image src='../image/<?php echo $row[8] ?>' height=50 width=50>
                 </td></tr>
           
                </tr>
                
                <tr>
                        <td>
                                Rent = 
                        </td>

                        <td>
                             <input type="text" name='rent' value='<?php echo $row[9]?>'  required>
                        </td>
                        
               </tr>
               <tr>
                <tr>
                        <td>
                                Contact = 
                        </td>

                        <td>
                             <input type="text" name='cont' value='<?php echo $row[12]?>'  required>
                        </td>
                        
               </tr>
               <tr>
                        <td>
                                Address = 
                        </td>

                        <td>
                             <input type="text" name='address' value='<?php echo $row[14]?>'  required>
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
                          <option value="<?php echo $row{'StCode'}?>"><?php echo $row{"StateName"}; ?></option>
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

                      <tr>
                        <td>
                                Vehicle Type =
                        </td>
                        <td><select name="vtype" id="city">
                                <option value="bus">BUS</option>
                                <option value="car">CAR</option>
                        </select></td>
                      </tr>

                <tr>
                         <td colspan='2' align="center" >
                             <input type="submit" name='sub'  class="btn"value="UPDATE INFO" >
                        </td>
                </tr>
                
                
                         

                                 
                
                </table>
        </form> 
</div>

<div class="buttons">
    <a class="button"href="vehicleinfo.php">Back</a>
    <a class="button two" href="index.php">Home</a> 
  </div>
</body>
</html>
<?php
    }
    else 
    echo mysqli_error($con);
    ?>