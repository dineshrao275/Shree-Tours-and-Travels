<?php
            session_start();
            
    if(!isset($_SESSION['name']))
    header("location:index.php");
                    $link=mysqli_connect("localhost","root","","shree");
                    $state=$_GET["state"];

                    if($state!="")
                     {
                    $res=mysqli_query($link,"select * from city where StCode=$state");
                    echo "<select >";
                    while($row=mysqli_fetch_array($res))
                    {
                    echo "<option>"; echo $row["CityName"]; echo "</option>";
                    }
                    echo "</select>";
                }
?>