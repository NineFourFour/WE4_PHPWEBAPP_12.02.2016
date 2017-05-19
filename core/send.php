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
	//if $_SESSION fails, use the cookies instead 
	try{
		if(isset($_SESSION['firstname'])&& isset($_SESSION['surname'])&& isset($_SESSION['email'])&& isset($_SESSION['mobile'])){
			$firstName = $_SESSION['firstname'];
			$surName = $_SESSION['surname'];
			$email = $_SESSION['email'];
			$mobile = $_SESSION['mobile'];
		}
	}finally{
		if(!isset($_SESSION['firstname'])&& !isset($_SESSION['surname'])&& !isset($_SESSION['email'])&& !isset($_SESSION['mobile'])){
			$firstName = $_COOKIE['cFirst'];
			$surName = $_COOKIE['cSur'];
			$email = $_COOKIE['cEmail'];
			$mobile = $_COOKIE['cMobile'];
		}		
	}
	//contact object
	$newOne= new contact($firstName,$surName,$email,$mobile);
	$host="localhost";$un="root";$pw="";$db="assignment_iwp";
	//connect to the database
	$newConn = new dataBase($host,$un,$pw,$db);
	//add new contact to database table
	$newConn->addContact($newOne);
	/*sending it back to the addcontact page so another contact can be added, if this was not done then it would be stuck at a
	blank page*/
	header("Refresh:0; url=../addContact.php");
?>