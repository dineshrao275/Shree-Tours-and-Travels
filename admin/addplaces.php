<?php
include("side.php");
// if(!isset($_SESSION['name']))
//     header("location:index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add New Places</title>
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
        height:900px;
        margin-left:400px;

            }
    
    input{
        text-transform: capitalize ;
        background:transparent;
            color:white;
            border:none;
            border-bottom:2px solid blue;
            font-size:20px;
            border-radius:5px;
            outline:none;
   
    }
    h1{
        font-size:70px;
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
   form textarea{
       text-transform: capitalize ;
        background:transparent;
            color:white;
            border:none;
            border-bottom:2px solid blue;
            font-size:20px;
            border-radius:5px;
            outline:none;
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

    <form action="addplaces1.php" method='post'  enctype="multipart/form-data">
       <table>
            <tr>
                 <h1>Add New Places</h1>
            </tr>
            <tr>
            <td>NAME : </td>
            <td>
                <input type="text" name='nm' value="" required >
            </td></tr>
            <tr>
            <td>ABOUT : </td>
            <td><textarea name="about" id="ab" cols="50" rows="5"></textarea>
                <!-- <input type="text" name='about' value="" required> -->
            </td></tr>
            <tr>
            <td>IMAGE : </td>
            <td>
                <input type="file" name='picture' value=""  required>
            </td></tr>
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
            <tr><td colspan='2' align="center">
            <input type="submit"  class="btn" value="Add" name="sub" >
            </td></tr>
       </table>

    </form>
    </div>
    </div>
    <script src="../js/jquery.js"></script>
    <script src="../js/toastr.min.js"></script>
<div id='foot'>
<?php
include("footer.php");
if(isset($_GET['aba']))
  echo"<script>toastr.success('Place Added Successfully!!')</script>";

?>
</div>
</body>
</html>