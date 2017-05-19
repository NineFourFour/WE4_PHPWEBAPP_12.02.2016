<?php
	/****************************************************************************************
	* Author: James Hickey																	*
	* Assignment: WE4.0 PHP Web App Assignment, Digital Skills Academy						*
	* Student ID: D14128624																	*
	* Email: james.hickey@webelevate.ie														*
	* Date : 2016/02/15																		*
	* Ref: 	www.tutorialspoint.com/php/php_object_oriented.htm								*
	*      	www.w3schools.com/																*
	*	   	stackoverflow.com																*
	*	   	php.net/manual																	*
	*		code.tuts.com																	*
	*****************************************************************************************/
	include 'init.php';
	session_start();
	//error handling, checking that values have been passed on
	try{
		//if $_POST is not empty, load in values
		if (isset($_POST["firstName"])&&isset($_POST["surName"])&&isset($_POST["mailE"])&&isset($_POST["mobile"])){
			//remove white space
			$firstName = trim($_POST["firstName"]);
			$surName  = trim($_POST["surName"]);
			$email = trim($_POST["mailE"]);
			$mobile  = trim($_POST["mobile"]);	
		}
		//Use session to transfer data between pages,  
		$_SESSION['firstname'] = $firstName;
		$_SESSION['surname'] = $surName;
		$_SESSION['email'] = $email;
		$_SESSION['mobile'] = $mobile;	
		//set cookies, if session does not work
		setcookie('cFirst', $firstName, time()+3600*24);
		setcookie('cSur', $surName, time()+3600*24);
		setcookie('cEmail', $email, time()+3600*24);
		setcookie('cMobile', $mobile, time()+3600*24);
		//if $_SESSION is empty throw exception
		if(empty($_SESSION['firstname'])&&empty($_SESSION['surname'])&&empty($_SESSION['email'])&&empty($_SESSION['mobile'])){
			throw new Exception("Please reload page");
		}
	}catch (Exception $ex){
		echo 'ERROR: '.$ex->getMessage();
	}
	/*sending it to send.php where the input data will be stored in the database */
	header("location: send.php");
?>
