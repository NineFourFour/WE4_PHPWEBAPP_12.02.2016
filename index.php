<!--/****************************************************************************************
	* Author: James Hickey																	*
	* Assignment: WE4.0 PHP Web App Assignment, Digital Skills Academy						*
	* Student ID: D14128624																	*
	* Email: james.hickey@webelevate.ie														*
	* Date : 2016/02/15																	*
	* Ref: 	learning.digitalskillsacademy.com												*
	*		www.tutorialspoint.com/php/php_object_oriented.htm								*
	*      	www.w3schools.com/																*
	*	  	stackoverflow.com																*
	*	   	php.net/manual																	*
	*		code.tuts.com																	*	
	*****************************************************************************************/-->
<!DOCTYPE html>
<?php include "core/init.php";?>
<html>
	<head>
		<title>MyContacts</title>
		<link rel="stylesheet" type="text/css" href="css/contact.css">
		<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
	</head>
	<body>
		<div id="main">
			<div id="top">
				<h1>Contacts List</h1>
			</div>
			<div>
				<ul>
				<!--nav bar buttons-->
					<!--<li><button id="btn1">Show Contacts</button></li>-->
					<li><button id="btn2"><a href="addContact.php">Add Contact</a></button></li>
					<li><button id="btn3"><a href="findContact.php">Find Contact</a></button></li>
				</ul>
			</div>
			<div id="page">
				<?php $one = new database('localhost', 'root', '', 'assignment_iwp'); $one->listContact();?>
			</div>
			<!--<script>
			<!--using jquery click event to write the contact list to the screen
					(function(){
					$("#btn1").on('click',function(){
						php that returns the contact list from the database
						$("<?php $one = new database('localhost', 'root', '', 'assignment_iwp'); $one->listContact();?>").appendTo( "#page" );	
					});
				})();				
			</script>-->
		</div>
	</body>
</html>