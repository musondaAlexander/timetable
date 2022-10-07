<?php
	// $servername = "localhost";
	// $username = "alex";
	// $password = "alEx2022zuct";


	
	//----------------------------------------------------------------
    include('dbcon.php');
	
	//-----------------------------------------------------------------


	if(isset($_POST['submitMember'])){
		$firstname = $_POST["fname"] ;
		$lastname = $_POST["lname"] ;
		$lpassword = $_POST["password"] ;
		$cmsid = $_POST["cms_id"] ;
		$email = $_POST["email"] ;
		$position = $_POST["position"] ;		
		insertData($firstname,$lastname,$email,$lpassword,$cmsid,$position,$conn);
	}
	
	// Function to Insert the data into the data Table
	FUNCTION insertData($fname,$lname,$email,$lpassword,$cmsid,$position,$conn){


		$sql = "INSERT INTO data(firstname, lastname, email,id,password,position) VALUES ('{$fname}','{$lname}','{$email}','{$cmsid}','{$lpassword}','{$position}')";
		if ($GLOBALS['conn']->query($sql) === TRUE) {
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

?>