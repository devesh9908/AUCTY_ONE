<?php
Class dbObj{
	/* Database connection start */
	var $servername = "localhost";
	var $username = "root";
	var $password = "";
	var $dbname = "menu_card";
	var $conn;
	function getConnstring() {
		$con = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname) or die("Connection failed: " . mysqli_connect_error());

		/* check connection */
		if (mysqli_connect_errno()) {
			
		} else {
			$this->conn = $con;
		}
		return $this->conn;
	}
	
	
	
}

date_default_timezone_set('Asia/Kolkata');
?>