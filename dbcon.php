<?php
//--------------------------------------------------------------------------

    //  For the  000webhost connection
    //  $servername = "localhost";
	// 	$username = "id19677158_alex";
	// 	$password = "alEx@2022@zuct";
	// 	$dbname = "id19677158_timetabledata";

    //----------------------------------------------------------------------
		// For the Heroko connection 
		$servername = "us-cdbr-east-06.cleardb.net";
	    $username = "beb5e1d2cd0e49";
	    $password = "a60fad52";
	    $dbname = "heroku_3ca43a23c94a4d6";

    //-----------------------------------------------------------------------

	// For the Digital Ocean Connection

		// $servername = "localhost";
		// $username = "alex"  ;
		// $password = "alEx2022zuct";
		// $dbname = "timetabledata";

    //-----------------------------------------------------------------------
		// For the LocalHost Connection 
        // $servername = "localhost";
		// $username = "alex";
		// $password = "alEx@2022@zuct";
		// $dbname = "timetabledata";

    //-----------------------------------------------------------------------

		$conn = new mysqli($servername,$username,$password,$dbname);
		if ($conn->connect_error){
			die("Connection failed: " . $conn->connect_error );
	    }
//---------------------------------------------------------------------------