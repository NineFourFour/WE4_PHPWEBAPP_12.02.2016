<?php
	/****************************************************************************************
	* Author: James Hickey																	*
	* Assignment: WE4.0 PHP Web App Assignment, Digital Skills Academy						*
	* Student ID: D14128624																	*	
	* Email: james.hickey@webelevate.ie														*
	* Date : 2016/02/10																		*		
	* Ref: 	learning.digitalskillsacademy.com												*
	*		www.tutorialspoint.com/php/php_object_oriented.htm								*
	*	  	www.w3schools.com/																*
	*	   	stackoverflow.com																*
	*	   	php.net/manual																	*
	*		code.tuts.com																	*
	*****************************************************************************************/
	//contact class inherits the person class
	class contact extends person{
		public $email;
		public $mobile;
		//contact object constructor
		public function __construct($fn, $sn, $em, $mo){
			$this->firstName = $fn;
			$this->surName = $sn;
			$this->email = $em;
			$this->mobile = $mo;
		}
		//email setter
		public function setEmail($newEmail){
			$this->email = $newEmail;
		}
		//email getter
		public function getEmail(){
			return $this->email;
		}
		//mobile setter
		public function setMobile($newMobile){
			$this->mobile = $newMobile;
		}
		//mobile getter
		public function getMobile(){
			return $this->mobile;
		}
	}
	/*Test code
	$one = new contact('john', 'joe', '8 outofhell', 'hell@hell.com', '06666666666');
	print_r($one);
	echo '<h2>'.$one->getFirstName().'</h2>';*/
?>