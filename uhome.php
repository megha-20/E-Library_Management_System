<?php 
session_start();
include "database.php";



if(!isset($_SESSION["ID"]))
{
	header("location:ulogin.php");
}
?>


<!DOCTYPE HTML>
<html>
  
  <head>
    <title>Megha Shree</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
  </head>
  
  <body>
    <div id="container">
	   <div id="header">
	    <h1>E-Library Management System<h1>
	   </div>
	  
	  <div id="wrapper">
	    <h3 id="headings">Welcome <?php echo $_SESSION["NAME"];?></h3>
		
		
		
	  </div>
	   
	  <div id="navi">
	     <?php 
		      include "userSidebar.php";
		 ?>
	  </div>
	   
	  <div id="footer">
	     <p>Copyright &copy; Megha Shree 2019</p>
	  </div>
    </div>
  
  </body>

  </html>