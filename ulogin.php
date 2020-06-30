<?php
session_start();
    include "database.php";
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
	    <h3 id="headings">User Login Here.</h3>
		
		<div id="center">
		<?php
           if(isset($_POST["submit"]))
		   {
			   $sql="SELECT * From student where NAME='{$_POST["name"]}' and PASS='{$_POST["pass"]}'";
			   $res=$db->query($sql);
			   if($res->num_rows>0)
			   {
				 $row=$res->fetch_assoc();
                 $_SESSION["ID"]=$row["ID"];	
                 $_SESSION["NAME"]=$row["NAME"];					 
				 header("location:uhome.php");  
			   }
			   else
			   {
				  echo "<P class='error'>Invalid User Details</p>" ;
			   }
			   //print_r($res);
		   }
  		?>
		<form action="ulogin.php" method="post">
		  <label>Name</label>
		  <input type="text" name="name" required>
		  <label>Password</label>
		  <input type="password" name="pass" required>
		  <button type="submit" name="submit">Login Now</button>
		</form>
		</div>
		
	  </div>
	   
	  <div id="navi">
	     <?php 
		      include "sidebar.php";
		 ?>
	  </div>
	   
	  <div id="footer">
	     <p>Copyright &copy; Megha Shree 2019</p>
	  </div>
    </div>
  
  </body>

  </html>