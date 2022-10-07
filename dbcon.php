<?php
//--------------------------------------------------------------------------

    //  For setting up the connection 
        // $servername = "localhost";
		// $username = "alex"  ;
		// $password = "alEx@2022@zuct";
		// $dbname = "timetabledata";

		// THE Heroko connection 
		$servername = "us-cdbr-east-06.cleardb.net";
	    $username = "beb5e1d2cd0e49";
	    $password = "a60fad52";
	    $dbname = "heroku_3ca43a23c94a4d6";



		$conn = new mysqli($servername,$username,$password,$dbname);
		if ($conn->connect_error){
			die("Connection failed: " . $conn->connect_error );
	    }
//---------------------------------------------------------------------------