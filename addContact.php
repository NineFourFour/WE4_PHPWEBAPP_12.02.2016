<!--/****************************************************************************************
	* Author: James Hickey																	*
	* Assignment: WE4.0 PHP Web App Assignment, Digital Skills Academy						*
	* Student ID: D14128624																	*
	* Email: james.hickey@webelevate.ie														*
	* Date : 2016/02/10																		*
	* Ref: 	www.tutorialspoint.com/php/php_object_oriented.htm								*
	*      	www.w3schools.com/																*
	*	   	stackoverflow.com																*
	*	   	php.net/manual																	*
	*		code.tuts.com																	*
	*****************************************************************************************/-->
<!DOCTYPE html>
<html>
	<head>
		<title>AddContact</title>
		<link rel="stylesheet" type="text/css" href="css/contact.css">
		<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
	</head>
	<body>
		<div id="main">
			<div id="top">
				<h1>Add Contact</h1>
			</div>
			<div>
				<ul>
				<!--Butttons in the nav bar of the page-->
					<li><button id="btn1"><a href="index.php">Contacts List</a></button></li>
					<li><button id="btn3"><a href="findContact.php">Find Contact</a></button></li>
				</ul>
			</div>
			<div class="addPage">
				<form action='core/receive.php' method="post">
					<fieldset>
					<!--input fields-->
						<legend>add contact</legend>
						First name :
						<input type="text" name="firstName" required>
						<span></span>
						<br><br>
						Surname : &nbsp;
						<input type="text" name="surName" required>
						<br><br>
						Email : &ensp;&emsp;
						<input type="email" name="mailE" required>
						<br><br>
						Mobile : &emsp;
						<input type="text" name="mobile" required>
						<br><br><br>
						<input type="submit" value="Submit" id="sub">
					</fieldset>
				</form>
			</div>
		</div>
	</body>
</html>
