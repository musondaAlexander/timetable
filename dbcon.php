<?php
//--------------------------------------------------------------------------

    //  For setting up the connection 
        $servername = "localhost";
		$username = "alex"  ;
		$password = "alEx@2022@zuct";
		$dbname = "timetabledata";


		$conn = new mysqli($servername,$username,$password,$dbname);
		if ($conn->connect_error){
			die("Connection failed: " . $conn->connect_error );
	    }
//---------------------------------------------------------------------------