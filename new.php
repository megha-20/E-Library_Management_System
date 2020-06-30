<?php 

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
	   
	   <h3 id="headings">New User Registration</h3>
	   <div id="center">
	  
	  <?php 
	     
		 if(isset($_POST["submit"]))
		 {
			 $sql="insert into student(NAME,PASS,MAIL,DEP) values('{$_POST["name"]}','{$_POST["pass"]}','{$_POST["mail"]}','{$_POST["dep"]}')";
		     $db->query($sql);
		     echo "<p class='success'>User Registration Success</p>";
				 
	     }
		 
	  ?>
	  
	  <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" >
	      <label>Name</label>
		  <input type="text" name="name" required>
		  
		  <label>Password</label>
		  <input type="password" name="pass" required>
		  
		  <label>Email ID</label>
		  <input type="email" name="mail" required>
		  
		  <select name="dep" required>
		    <option value="">Select</option>
			<option value="CSE">CSE</option>
			<option value="EC">EC</option>
			<option value="CV">CV</option>
			<option value="OTHERS">OTHERS</option>
		  </select>
		  <button type="submit" name="submit">Register Now</button>
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