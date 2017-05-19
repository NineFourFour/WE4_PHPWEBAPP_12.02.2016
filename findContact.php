<!--/****************************************************************************************
	* Author: James Hickey																	*
	* Assignment: WE4.0 PHP Web App Assignment, Digital Skills Academy						*
	* Student ID: D14128624																	*
	* Email: james.hickey@webelevate.ie														*
	* Date : 2016/02/10																		*
	* Ref: 	learning.digitalskillsacademy.com												*
	*		www.tutorialspoint.com/php/php_object_oriented.htm								*
	*      	www.w3schools.com/																*
	*	  	stackoverflow.com																*
	*	   	php.net/manual																	*
	*		code.tuts.com																	*
	*****************************************************************************************/-->
<!DOCTYPE html>
<html>
	<head>
		<title>FindContact</title>
		<link rel="stylesheet" type="text/css" href="css/contact.css">
		<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
	</head>
	<body>
		<div id="main">
			<div id="top">
				<h1>Find Contact</h1>
			</div>
			<div>
				<ul>
				<!--nav bar buttons-->
					<li><button id="btn1"><a href="index.php">Contacts List</a></button></li>
					<li><button id="btn3"><a href="addContact.php">Add Contact</a></button></li>
				</ul>
			</div>
			<div class="addPage">
				<form action="#" method="post">
					<fieldset>
						<legend>Find contact</legend>
						<!--input fields for the find contact method in the database class,
						values based on the fields in the contacts table of the database-->
						<h4>Pick one of the following</h4>
						<select name="query">
						   <option value="firstname">Firstname</option>
						   <option value="surname">Surname</option>
						   <option value="email">Email</option>
						   <option value="mobile">Mobile</option>
						</select>
						&emsp;Enter Value :
						<input type="text" name="fieldValue" required>
						<br><br>
						<input type="submit" value="Submit" id="sub">
					</fieldset>
				</form>
			</div>
			<div class="contact">
				<fieldset>
					<legend>Contact</legend>
					<p id="field"></p>
					<?php 
					/*values entered in inputs field above are transfered here,
					database connection is established, find contact method is called from the database class,
					it returns the contact/s found in the database table */
						include 'core/init.php';
						$newConn = new dataBase("localhost","root","","assignment_iwp");
						if (isset($_POST["query"])&&isset($_POST["fieldValue"])){
							$field = $_POST["query"];
							$fValue = $_POST["fieldValue"];
							$newConn->findContact($field, $fValue);
						}
					?>
				</fieldset>
			</div>
		</div>
	</body>
</html>
