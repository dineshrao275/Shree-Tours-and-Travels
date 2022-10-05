 <?php

 session_start();
    
 if(!isset($_SESSION['name']))
 header("location:index.php");
    $id=$_REQUEST['id'];

    include("db.php");


    $r=mysqli_query($con,"select * from add_places where id='$id'");
    if($row=mysqli_fetch_array($r)){
    

?> 
<html >
<head>
    <title>edit info</title>
    <link rel="stylesheet" href="../css/button_style.css">
<style>
body{
    background:linear-gradient(red,blue);
    
}
    #main{ background:black;
        
        border-radius:25px;
        text-align:center;
        width: 700px;
        height: 700px;
        margin-left:20%;
        margin-top:15%;
        
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
<script src="../js/"></script>
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
<div id="main">
    <form action="edit1.php" method="post" enctype="multipart/form-data">
        <table>
                <tr>
                        <th colspan='2'>
                        <b>EDIT INFORMATION</b>
                        </th>
                </tr>
                <tr>
            <td>ID: </td>
            <td>
                <input type="hidden" name='id' value="<?php echo $row[0]?>" placeholder='name of the place'>
            </td></tr>
            
                <tr>
            <td>NAME : </td>
            <td>
                <input type="text" name='nm' value="<?php echo $row[1]?>" placeholder='name of the place'>
            </td></tr>
            
            <tr>
            <td>IMAGE : </td>
            <td>
                <input type="file" name='picture' value="<?php echo $row[2]?>"placeholder='image' >
                <image src='../image/<?php echo $row[2] ?>' height=50 width=50>
                 </td></tr>
            <tr>
            <td>ABOUT : </td>
            <td>
                <input type="textarea" name='about' value="<?php echo $row[3]?>" placeholder='about image'>
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
             <option value="<?php echo $row{"StCode"}; ?>"><?php echo $row{"StateName"}; ?></option>
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
            <input type="submit"  class="btn" value="update" name="sub" >
            </td></tr>
        </table>
    
    
    </form>
    
</div>
<div class="buttons">
    <a class="button"href="pictures.php">Back</a>
    <a class="button two" href="home.php">Home</a>
  </div>
</body>
</html>
<?php
    }
    else 
    echo mysqli_error($con);
    ?>