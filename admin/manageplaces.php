<?php  
include("side.php");
// if(!isset($_SESSION['name']))
// header("location:index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manage Places</title>

    
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#userTable').DataTable();
});
</script>


    <style>
    body{
        background:lightblue;
    }


   .main table{
       
       outline:none;
       width:100%;
       height:100%;
        margin:auto;
        
    }
    
   .main th{ font-size: 20px;
   text-align: center; 
       
    }
    
    .main a{
        text-decoration:none;
        font-weight:bold;
        color:magenta;
    }
   .main a:hover{
        text-decoration:none;
        color:cyan;

    }
    .main{
        width:80%;
        float:right;
        margin-top: 200px;
        background:transparent;
        border-radius:35px;
        text-align:center;    
    }
   .main h1{
    font-size:60px;
    color: navy;
    text-decoration: underline;
    }
   .main img{
        height:50px;
        width:50px;
        border-radius: 25px;
    }
    
    </style>
</head>
<body>
    
<div class="main">
<h1>Manage Places</h1>

<table border='1px solid blue' cellspacing='2px'cellpadding='10px' id='userTable'>
<thead>
<tr>
<th>Sno</th>
<th>Place Name</th>
<th>Photos</th><th>About</th><th>State</th><th>City </th>
<th >MANAGE</th>
</tr>
</thead>
<?php  
include("db.php");
$r=mysqli_query($con,"select * from add_places");
$Sno=0;
while($row=mysqli_fetch_array($r))
{
    ?>
    <tbody>
<tr>
    <td><?php echo ++$Sno; ?></td>
    <td><?php echo $row[1]; ?></td>
    <td><?php echo"<img src='../image/$row[2]'"; ?></td>
    <td><?php echo $row[3]; ?></td>
    <td><?php echo $row[4]; ?></td>
    <td><?php echo $row[5]; ?></td>
    
    <td><a href="edit.php?id=<?php  echo $row[0];?>">UPDATE</a></td>

</tr>
</tbody>
<?php }

?>
</table>
    
</div>
<div>
<?php include("footer.php");?>  
</div>
</body>
</html>
