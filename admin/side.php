<?php
session_start();

if(!isset($_SESSION['name']))
header("location:index.php");
include("db.php");
$r=mysqli_query($con,"select count(*) from bookings where status='2'");
$row=mysqli_fetch_array($r);
$r1=mysqli_query($con,"select count(*) from queries where status='101'");
$row1=mysqli_fetch_array($r1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	
<link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<link href="../css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="../css/w3.css">
<style>
       .sidebar-menu{
		   margin-top:px;
		   width:17%;
	   }
	   .logo1{
		   background:linear-gradient(white,purple);
		   width: 82%;
		   float:right;
		   border-radius: 60px;
	   }
	   .logo2{
		   font-size: 50px;
		   height:60px;
		    color:cyan;
		   text-align:center;
			
	   }
	   .h{
		   font-family:cursive;
		   color:navy;
		   font-size:70px;
		   margin-top:0px;
	   }
	    
		 #menu span{
        background:transparent;
        color:white;
		font-size:18px;
		font-weight:bold;
		font-family:tahoma;

    }
			#menu span:hover{
        color:white;
		font-weight:bold;
		font-family:tahoma;
		}
		#menu a{
			border-radius:25px;
			text-decoration: none;
			font-size: 25px;
			
		}
		.logo1 img{
			float:left;
			height:100px;
			width: 100px;
			border-radius: 50%;
		}
		ul{
			border-radius: 25px;
		}
		li{
			text-align:center;
		}
</style>
</head>
<body>
<header class="logo1"><a href="../image/logo.png">
<img src="../image/logo.png" alt=""></a>
<h1 class='h'>Shree Tours & Travels </h1> </header>
	

<div class="sidebar-menu">
							<header class='logo2'>
								<h2>ADMIN PANEL</h2>
								<!-- <img src="../images/logo.png" alt="" style="height:130px;width:150px;"> -->
							</header>
						<div style="border-top:1px solid white"></div>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="home.php"> <span>Dashboard</span><div class="clearfix"></div></a></li>
										
									 <li id="menu-academico" ><a href="#"><span> Add new Resources</span> <div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="addplaces.php">Add Places</a></li>
											<li id="menu-academico-avaliacoes" ><a href="advehicle.php">Add Vehicle</a></li>
											<li id="menu-academico-avaliacoes" ><a href="adddriver.php">Add Driver</a></li>
										  </ul>
										</li>
										<li id="menu-academico" ><a href="#"><span> Manage Resources</span> <div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="manageplaces.php">Manage Places</a></li>
											<li id="menu-academico-avaliacoes" ><a href="manageveh.php">Manage Vehicle</a></li>
											</ul>
										</li>
									<li><a href="#"> 
									 <span>Manage Booking</span><div class="clearfix"></div></a>
									<ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="totalbookings.php">Total Bookings</a></li>
											<li id="menu-academico-avaliacoes" ><a href="bookings.php">New Bookings <span class="w3-badge w3-green"><?php echo $row[0]; ?></span>
											</a></li>
											</ul>
										
									</li>
									 <li><a href="#"><span>Manage Issues</span><div class="clearfix"></div></a>
									 <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="totalqueries.php">Total Queries</a></li>
											<li id="menu-academico-avaliacoes" ><a href="newqueries.php">New Queries
											<span class="w3-badge w3-blue"><?php echo $row1[0]; ?></span>

											</a></li>
											</ul>
									</li>
									<li><a href="cancelledbookings.php"><span>Cancelled Bookings</span><div class="clearfix"></div></a></li>
									<li><a href="overallview.php"><span>Over all View</span><div class="clearfix"></div></a></li>
									
									<li><a href="logout.php"><span>logout</span><div class="clearfix"></div></a></li>
							     
									
								  </ul>
								</div>
							  </div>
                              
</body>
</html>