<?php
include("side.php"); 
// session_start();
// if(!isset($_SESSION['name']))
// header("location:index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>users</title>

    <style>
    .main{
        margin-top: 200px;
        height:70px;
        width:80%;
        color:red;
        float:right;
        background:transparent;
        border-radius:35px;
        text-align:center;    
    }
   .main h1{
       text-align: center;
    font-size:60px;
    }


    body{
        background:lightblue;
    }


   .main table{
        margin:auto;
        margin-top:30px;
        border-radius:15px;
        color:black;
        width:100%;

    }
    
   .main th{ border-radius:15px;
   text-align: center;
        background:lightpink;
        font-size: 30px;

    }
    
   .main td{
       text-align: center;
        border-radius:25px;

    }
    
   .main td:hover{
        background:lightgreen;
    }
    
   .main th:hover{
        background:pink;
    }
    
   .main a{
        text-decoration:none;
        font-weight:bold;
    }
   .main a:hover{
        text-decoration:none;
        color:cyan;

    }
   .main img{
        height:50px;
        width:50px;
        border-radius: 25px;
    }
    #foot{
        margin-top:30px;
        
    }
    </style>
    </style>
</head>
<body>

<div class="main">
<h1>Users</h1>

<table cellspacing='20px'cellpadding='10px'>

<tr>
<th>Sno</th>
<th>User Name</th>
<th>Photo</th><th>Email</th><th>Phone</th><th>ID Proof </th>
<th >ID Details</th><th>Location</th>
</tr>

    <?php
        include("db.php");
        $r=mysqli_query($con,"select * from registrationuser");
        $Sno=0;
        while($row=mysqli_fetch_array($r))
        { 
        ?>
    
    <tr>
    <td><?php echo ++$Sno; ?></td>
    <td><?php echo "$row[1] &nbsp $row[2]" ; ?></td>
    <td><?php echo"<img src='../image/$row[3]'"; ?></td>
    <td><?php echo $row[4]; ?></td>
    <td><?php echo $row[5]; ?></td>
    <td><?php echo $row[6]; ?></td>
    <td><?php echo $row[7]; ?></td>
    <td><?php echo $row[10]; ?></td>
</tr>
<?php }?>
</table>

</div>
<div id='foot'><?php include("footer.php");?></div>
</body>
</html>