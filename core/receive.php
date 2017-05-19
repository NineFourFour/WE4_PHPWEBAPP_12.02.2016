<?php
/***	*************************************************************************************
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
	*****************************************************************************************/
	include 'init.php';
	try{
		if (isset($_POST["firstName"])&&isset($_POST["surName"])&&isset($_POST["mailE"])&&isset($_POST["mobile"])){
			session_start();
			//remove white space
			$firstName = trim($_POST["firstName"]);
			$surName  = trim($_POST["surName"]);
			$email = trim($_POST["mailE"]);
			$mobile  = trim($_POST["mobile"]);
			//contact object
			$newOne= new contact($firstName,$surName,$email,$mobile);
			$host="localhost";$un="root";$pw="";$db="assignment_iwp";
			//connect to the database
			$newConn = new dataBase($host,$un,$pw,$db);
			//add new contact to database table
			$newConn->addContact($newOne);
		}
		//Use session to transfer data between pages,  
		$_SESSION['firstname'] = $firstName;
		$_SESSION['surname'] = $surName;
		$_SESSION['email'] = $email;
		$_SESSION['mobile'] = $mobile;	
		if(empty($_SESSION['firstname'])&&empty($_SESSION['surname'])&&empty($_SESSION['email'])&&empty($_SESSION['mobile'])){
			throw new Exception("Please reload page");
		}
	}catch (Exception $ex){
		echo 'ERROR: '.$ex->getMessage();

	}
	/*sending it back to the addcontact pag so another contact can be added, if this was not done then it would be stuck at a
	blank page*/
	header("Refresh:0; url=../addContact.php");
?>
