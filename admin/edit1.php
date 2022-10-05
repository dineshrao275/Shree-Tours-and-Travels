<?php
        session_start();
        
    if(!isset($_SESSION['name']))
    header("location:index.php");
    $id=$_POST['id'];
    $name=$_POST['nm'];
    $ab=$_POST['about'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    include("db.php");
   $r="";
    if($_FILES['picture']['name']==""){
        $r=mysqli_query($con,"update add_places set name='$name' ,about='$ab',state='$state',city='$city' where id='$id'");
    
    }
    
    else{
    move_uploaded_file($_FILES['picture']['tmp_name'],"../image/".$_FILES
    ['picture']['name']);
    $photo=$_FILES['picture']['name'];
    
        $r=mysqli_query($con,"update add_places set name='$name' ,
         photos='$photo',about='$ab', state='$state',city='$city' where id='$id'");
    }

    if($r){
        
    
        header("location:pictures.php?se=0");
    }
    else{
        echo mysqli_error($con);
    }
   ?>