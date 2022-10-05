<?php
        
        session_start();
        if(!isset($_SESSION['name']))
        header("location:index.php");
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background:black;
        }
        #head{
            color:blue;
            text-align:center;
            font-size:70px;
            font-family:cursive;
            text-decoration:underline;
            text-shadow: 5px 5px 5px purple;
        }
        #option{ 
            margin-top:150px;
            width: 250px;
            height:650px;
            float:left;
            margin-right:0px;
            border-radius:25px;

        }
        tr th{
            
            width: 250px;
            height:50px;
            border:1px solid blue;
            border-radius:25px;
        }
        tr th:hover{
            background:blue;
            cursor:pointer;
        }
        tr th a{
            
            text-decoration:none;
            color:white;
            font-size:25px;
            font-family:tahoma;
        }
    </style>
</head>
<body>
    
<div id="head"> ADMIN PANEL</div>
    <div id="option">

        <table>
            <tr>
                <th>
                    <a href="home.php">HOME</a>
                </th>
            </tr>
            <tr>
                <th>
                    <a href="addplaces.php">ADD PLACES</a>
                </th>
            </tr>
            <tr>
                <th>
                    <a href="advehicle.php">ADD VEHICLES</a>
                </th>
            </tr>
            <tr>
                <th>
                    <a href="adddriver.php">ADD DRIVER</a>
                </th>
            </tr>
            <tr>
                <th>
                    <a href="manageveh.php">MANAGE VEHICLE<S/a>
                </th>
            </tr>
            <tr>
                <th>
                    <a href="manageplaces.php">MANAGE PLACES</a>
                </th>
            </tr>
            <tr>
                <th>
                    <a href="bookings.php">BOOKINGS</a>
                </th>
            </tr>
            
            <tr>
                <th>
                    <a href="logout.php">LOG OUT</a>
                </th>
            </tr>
        </table>
    
    </div>
</body>
</html>