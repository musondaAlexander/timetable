
	<?php
		// $servername = "localhost";
		// $username = "alex";
		// $password = "alEx2022zuct";
		// $dbname = "timetabledata";
        
		//----------------------------------------------------------------

		include('dbcon.php');
		//-----------------------------------------------------------------

		// $conn = new mysqli($servername,$username,$password,$dbname);
		// if ($conn->connect_error) {
		// 	die("Connection failed: " . $conn->connect_error);
		// }
		$sql = "select * from timetable" ;
		$result = $GLOBALS["conn"]->query($sql);
		$numrows = $result->num_rows ;
	for($i=0 ; $i<$numrows ;$i++){
		
		if(isset($_POST['Update'.$i])){
			$day = $_POST["day"] ;
			
			$time = $_POST["time"] ;            
			$department = $_POST["deptname"] ;            
			$semester = $_POST["semester"] ;            
			$section = $_POST["section"] ;            
			$subject = $_POST["subject"] ;            
			$instructor = $_POST["instructor"] ;            
			$block = $_POST["block"] ;            
			$room = $_POST["room"] ;			
			updateData("timetabledata","timetable",$day,$time,$department,$semester,$section,$subject,$instructor,$block,$room);
		} 	
		if(isset($_POST['Delete'.$i])){
			$day = $_POST["day"] ;
			$time = $_POST["time"] ;            
			$department = $_POST["deptname"] ;            
			$semester = $_POST["semester"] ;            
			$section = $_POST["section"] ;            
			$subject = $_POST["subject"] ;            
			$instructor = $_POST["instructor"] ;            
			$block = $_POST["block"] ;            
			$room = $_POST["room"] ;			
			deleteData("timetabledata","timetable",$day,$time,$department,$semester,$section,$subject,$instructor,$block,$room);
		} 	
	}

		FUNCTION updateData($dbname,$tablename,$day,$time,$department,$semester,$section,$subject,$instructor,$block,$room){

			$sql = "SELECT time_id FROM time WHERE day='{$day}' AND time='{$time}'";
			$result = $GLOBALS["conn"]->query($sql);
			if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						$timeid = $row["time_id"] ;
					}
			}			$sql = "SELECT dept_id FROM department WHERE dept_name='{$department}' AND semester= $semester AND section='{$section}'";
			$result1 = $GLOBALS["conn"]->query($sql);
			if ($result1->num_rows > 0) {
					while($row1 = $result1->fetch_assoc()) {
						$deptid = $row1["dept_id"] ;
					}
			}	
			$sql = "SELECT cid.course_id AS course FROM course AS cid JOIN instructor AS inst USING(instructor_id) WHERE cid.subject='{$subject}' AND CONCAT(inst.firstname,' ',inst.lastname)='{$instructor}'";
			$result2 = $GLOBALS["conn"]->query($sql);
			if ($result2->num_rows > 0) {
					while($row2 = $result2->fetch_assoc()) {
						$courseid = $row2["course"] ;
					}
			}
			$sql = "UPDATE ".$tablename." SET course_id=$courseid ,block= '{$block}', room=$room WHERE time_id=$timeid AND dept_id=$deptid ";
			if ($GLOBALS['conn']->query($sql) === TRUE) {
				
			}
		}
		FUNCTION deleteData($dbname,$tablename,$day,$time,$department,$semester,$section,$subject,$instructor,$block,$room){
			$sql = "SELECT time_id FROM time WHERE day='{$day}' AND time='{$time}'";
			$result = $GLOBALS["conn"]->query($sql);
			if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						$timeid = $row["time_id"] ;
					}
			}			$sql = "SELECT dept_id FROM department WHERE dept_name='{$department}' AND semester= $semester AND section='{$section}'";
			$result1 = $GLOBALS["conn"]->query($sql);
			if ($result1->num_rows > 0) {
					while($row1 = $result1->fetch_assoc()) {
						$deptid = $row1["dept_id"] ;
					}
			}	
			$sql = "SELECT cid.course_id AS course FROM course AS cid JOIN instructor AS inst USING(instructor_id) WHERE cid.subject='{$subject}' AND CONCAT(inst.firstname,' ',inst.lastname)='{$instructor}'";
			$result2 = $GLOBALS["conn"]->query($sql);
			if ($result2->num_rows > 0) {
					while($row2 = $result2->fetch_assoc()) {
						$courseid = $row2["course"] ;
					}
			}
			$sql= "DELETE FROM ".$tablename. " WHERE time_id=$timeid AND dept_id=$deptid ";
			$result3 = $GLOBALS["conn"]->query($sql) ; 
			
		}
?>
