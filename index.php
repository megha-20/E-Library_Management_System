<!DOCTYPE HTML>

<html>
  
  <head>
    <title>Megha Shree</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  
  <body>
    <div id="container">
	  
	  <div id="header">
	    <h1>E-Library Management System<h1>
	  </div>
	   
	   <div id="wrapper">
	    
		<p>E-Library management system will deal in all requirements needed for managing libraries.
		   It aims in developing a computerized system to maintain all the daily work of library .
		   It also has a facility of admin login through which the admin can monitor the whole system .
		   It will deal with the process of maintaining data about the books and many other things.
		   It helps the administrator to accomplish his tasks at ease. 
		   It lets the users sign-up to the library initially and then sign-in every time they want to find some item in the library.
		   All details of the users and library information are stored in the database.
		   The user need not visit the library every time to find an item; instead, he/she can search items from his/her own PC/laptop.
	    </p>
		
		<p>
          This project contains 5 modules. The modules are admin, book, request, comment, student. 
		  <strong><br>Admin: </strong>This module contains admin details like admin name and admin password and 
		  through these details he/she can manage all the activities of library.
		  <strong><br>Books: </strong>This module contains the deatails of books. And the books will be uploaded by the admin.
		  The student/users can view and download these books.<strong><br>Request: </strong>This module is used by the student to request a book from
		  the library. The search can be performed by using some keywords like name of the book, subject name etc.
		  <strong><br>Comments: </strong>This module is used by the student to comment on the books that they are using. It also displays at which date and time
          they commented on a particular book. And student can also view previous comments on that books.
          <strong><br>Student: </strong>This module contains the details of student and student can login through the credentials and can view , 
		  download, request for a book and can comment on a book.	  
		</p>
	  
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