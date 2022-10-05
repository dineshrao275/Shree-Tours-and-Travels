<?php
include("side.php");
//session_start();
        include("db.php");
     ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>New Queries </title>
    <link rel="stylesheet" href="../css/toastr.min.css">
<script src="../js/jquery.js"></script>
   
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
    <script src="../js/jquery-2.1.1.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#userTable').DataTable();
});
</script>

        <style>
        body{
            background:lightgray;
        }
        .main{
            margin-top:200px;
            width:80%;
            float:right;
            background:transparent;
        }
        #head1{
            text-align: center;
            font-size:50px;
            text-decoration: underline;
            color:red;
            padding-bottom:100px;
        }
            #tq th{
                color:blue;

                background:linear-gradient(white,orange);
            border-radius:25px;
            font-size:20px;
            }
            #tq td{
                background:linear-gradient(white,violet);
            border-radius:25px;
            text-align:center;
 
            }
            #tq td:hover{
            background:lightblue;
        }
        #tq td a{
            text-decoration:none;
            font-weight:bold;
            color:lightseagreen;
            font-size:20px;
            cursor:pointer;

        }
        #tq td a:hover{
            color:green;
        }
        #mes{
            text-align: center;
            color:red;
            font-size: 20px;
            padding-bottom:30px;
        }
        </style>

</head>
<body>
    <div class="main">
    
    <div id='head1'>
    New Queries
            
    </div>
    <div id='mes'><?php
    if(isset($_SESSION['resqmes']))
    echo $_SESSION['resqmes'];
    
    ?></div>
    
    <div id='tq'>
        <table id='userTable'>
            <thead>
            <tr>
                <th>Sno</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Query</th>
                <th>Resolve</th>
            </tr>
            </thead>
    <?php    $r=mysqli_query($con,"select *from queries where status='101'");
            $Sno=0;
        while($row=mysqli_fetch_array($r))
        {
            ?>
                <tbody>
                <tr>
                    <td><?php echo ++$Sno; ?></td>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[3]; ?></td>
                    <td><a href="resolvequery.php?nq=<?php echo $row[0]; ?>">Resolve</a></td>
                </tr>
            </tbody>

        
            <?php   }  ?>    
        </table>
    
    
    </div>
    </div>
  <div>  <?php

echo $_SESSION['resqmes']="";
include("footer.php");
?></div>
<script src="../js/toastr.min.js"></script>
</body>
</html>
<?php

    if(isset($_GET['resolvequery']))
    echo "<script>toastr.success('resolved query')</script>";


?>