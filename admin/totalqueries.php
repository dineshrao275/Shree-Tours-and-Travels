<?php
include("side.php");
        include("db.php");
     ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Total Queries </title>
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
            background:lavender;
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
            color:blue;
            padding-bottom:100px;
        }
            #tq th{
                color:yellow;

                background:linear-gradient(white,red);
            border-radius:25px;
            font-size:20px;
            }
            #tq td{
                background:linear-gradient(white,green);
            border-radius:25px;
            text-align:center;
 
            }
        </style>

</head>
<body>
    <div class="main">
    <div id='head1'>
    Total Queries
            
    </div>
    
    <div id='tq'>
        <table id='userTable'>
            <thead>
            <tr>
                <th>Sno</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Query</th>
            </tr>
            </thead>
    <?php    $r=mysqli_query($con,"select *from queries");
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
                </tr>
            </tbody>

        
            <?php   }  ?>    
        </table>
    
    
    </div>
    </div>
    <div> <?php include("footer.php");  ?></div>
</body>
</html>