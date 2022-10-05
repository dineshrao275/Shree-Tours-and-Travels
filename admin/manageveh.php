<?php 
include("side.php");
// if(!isset($_SESSION['name']))
// header("location:index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manage Vehicles</title>

    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#userTable').DataTable();
});
</script>
<script>
      function check()
{
    var a=confirm("Do you really want to Delete this vehicle");
    if(a)
    return true;
    else
    return false;
}
</script>    
    <style>
    body{
        background:lightgrey;
    }


   .main table{
       
       outline:none;
       width:80%;
        margin:auto;
        border-radius:15px;
    }
    
     .main th{ 
          font-size: 20px;
            text-align: center; 
       border-radius:15px;

    }
    
    .main a{
        text-decoration:none;
        font-weight:bold;
    }
   .main a:hover{
        text-decoration:none;
        color:darkviolet;

    }
    .main{

        width: 80%;
        float:right;
        margin-top: 200px;
        background:transparent;
        border-radius:35px;
        text-align:center;    
    }
    .main h1{
    font-size:60px;
    color:blue;
    text-decoration: underline;
    }
   .main img{
        height:50px;
        width:50px;
    }
    
    </style>
</head>
<body>
<div class="main">
<h1>Manage Transport</h1>

<div class='table-responsive'>
            
<table border='1px' id='userTable' cellpadding='10px'>
<thead>
<tr>
<th>Sno</th>
<th>Transport Name</th>
<th>Vehicle Name</th><th>Vehicle NO</th><th>Insurance No</th><th>Vehicle Model</th><th>Vehicle Reg</th><th>Vehicle Seats</th><th>Images</th><th>Rent</th><th>State</th><th>City</th><th>Contact</th><th colspan='2'>MANAGE</th>
</tr></thead> 
<?php  
include("db.php");
$r=mysqli_query($con,"select * from add_vehicle");
$Sno=0;
while($row=mysqli_fetch_array($r))
{
    ?> <tbody>
  
<tr>
    <td><?php echo ++$Sno; ?></td>
    <td><?php echo $row[1]; ?></td>
    <td><?php echo $row[2]; ?></td>
    <td><?php echo $row[3]; ?></td>
    <td><?php echo $row[4]; ?></td>
    <td><?php echo $row[5]; ?></td>
    <td><?php echo $row[6]; ?></td>
    <td><?php echo $row[7]; ?></td>
    <td><?php echo"<img src='../image/$row[8]';>"; ?></td>
    <td><?php echo $row[9]; ?></td>
    <td><?php echo $row[10]; ?></td>
    <td><?php echo $row[11]; ?></td>
    <td><?php echo $row[12]; ?></td>
    <td><a href="editveh.php?id=<?php  echo $row[0];?>">UPDATE</a></td>
    <td><a href="deleteveh.php?id=<?php echo $row[0];?>" onclick="return check()">DELETE</a></td>
</tr>
</tbody>
<?php }?>

</table>
</div>

    
</div>
<div id='foot'>
    <?php include("footer.php");
    ?>
    </div>
</body>
</html>