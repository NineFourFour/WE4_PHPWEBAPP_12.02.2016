<?php
	/****************************************************************************************
	* Author: James Hickey																	*
	* Assignment: WE4.0 PHP Web App Assignment, Digital Skills Academy						*
	* Student ID: D14128624																	*
	* Email: james.hickey@webelevate.ie														*
	* Date : 2016/02/10																		*
	* Ref:	learning.digitalskillsacademy.com												*
	*		www.tutorialspoint.com/php/php_object_oriented.htm								*
	*		www.w3schools.com/html/css/jquery/php		 									*
	*	   	stackoverflow.com																*
	*	   	php.net/manual																	*
	*		code.tuts.com																	*
	*****************************************************************************************/
	//Database class containing methods to connect to the database
	class dataBase{
		public $dbname;
		public $query;
		public $myConnection;
		//Connection object constructor
		public function __construct($host,$username,$password,$dbname){
			$this->dbname = $dbname;
			$this->myConnection = mysqli_connect($host,$username,$password,$dbname);
		}
		//print rows from the contacts table in the database
		public function listContact(){
			$this->query = "SELECT * FROM contacts" or die("Error ...".mysqli_error($this->myConnection));
			$result = $this->myConnection->query($this->query);
			//creat a html table 
			echo "<table><tr><th>Firstname</th><th>Surname</th><th>Email</th><th id='thM'>Mobile</th></tr>";
			while ($row = mysqli_fetch_array($result)){
				//fill the table with the row from the database
				echo "<tr><td>".$row["firstname"]."</td><td>".$row["surname"]."</td><td>".$row["email"]."</td><td id='tdM'>".$row["mobile"]."</td></tr>";
			}
			echo "</table>";
		}
		//add contact to table using a contact object
		public function addContact($contact){
			$this->query = "INSERT INTO contacts (firstname,surname,email,mobile) VALUES ('$contact->firstName','$contact->surName','$contact->email','$contact->mobile')"or die("Error...".mysql_error($this->myConnection));
			$this->myConnection->query($this->query);
		}
		//find a contact entry in the table base on a field and value
		public function findContact($field, $value){
			if(isset($field)&&isset($value)){
				$this->query = "SELECT * FROM contacts WHERE $field = '$value'" or die("Error ...".mysqli_error($this->myConnection));
				$result = $this->myConnection->query($this->query);	
				if(isset($result)){
					//num_rows value =1 then an object has been retrieve from the contacts table
					if($result->num_rows == 1){
						echo "<table><tr><th>Firstname</th><th>Surname</th><th>Email</th><th>Mobile</th></tr>";
						while ($row = mysqli_fetch_array($result)){
							echo "<tr><td>".$row["firstname"]."</td><td>".$row["surname"]."</td><td>".$row["email"]."</td><td id='tdM'>".$row["mobile"]."</td></tr>";
						}
						echo "</table>";
					}
				}
				//value entered doesn't exist so no object has been returned
				if($result->num_rows == 0){
					echo strtoupper($value)." could not be found!!!!!";
				}
			}
		}
	}
	/*Test code
	include "contact.class.php";
	$one = new database('localhost', 'root', '', 'assignment_iwp');
	//$one->listContact();
	//$two = new contact("James", "Kirk", "kirk.james@gmail.com", "3530839456786");
	//$one->addContact($two);
	$one->findContact('firstname', 'James');
	*/
?>