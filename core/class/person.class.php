<?php
	/****************************************************************************************
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
	*****************************************************************************************/
	//set class as abstract, not going to use a person object
	abstract class person{
		public $firstName;
		public $surName;
		//person object constructor
		public function __construct($fn, $sn){
			$this->firstName = $fn;
			$this->surName = $sn;
		}
		//set new firstname
		public function setFirstName($fName){
			$this->firstName = $fName;
		}
		//set new surname
		public function setSurName($sName){
			$this->surName = $sName;
		}
		//get firstname
		public function getFirstName(){
			return $this->firstName;
		}
		//get surname
		public function getSurName(){
			return $this->surName;
		}
	}
	/*Test Code
	$one = new person('Norman', 'Fletcher');
	print_r($one->getFirstName());
	print_r($one->getSurName());
	echo '<br>';
	$one->setFirstName('StanLee');
	echo '<h2>'.$one->getFirstName().'</h2>';*/
?>