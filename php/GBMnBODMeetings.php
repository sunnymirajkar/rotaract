<?php	
	include 'config.php';
	class GBMnBODMeetings extends Database{
		public function __construct(){
	        parent::__construct();
	        $this->conn = $this->connection;
	    }

	    public function insertGBMnBODMeetings(){
	    	$data 	= json_decode(stripslashes($_POST['meeting']));
	    	$cnt 			= 0;
	    	for ($i = 0; $i < count($data); $i++) {
				for ($j=0; $j < count($data[$i]) ; $j++) {
					if($data[$i][$j]->meetingType == "GBM"){
						$query = "INSERT INTO gbmmeetings(clubName, meetingNo, meetingDate, meetingAttendance) VALUES ('".$data[$i][$j]->clubName."', '".$data[$i][$j]->meetingNo."', 
						'".$data[$i][$j]->MeetingDate."', '".$data[$i][$j]->meetingAttendance."')";
						$result = mysqli_query($this->conn,$query);
				    	if($result){
					    	$rowcount =mysqli_affected_rows($this->conn);
					    	if($rowcount > 0){
								$cnt++;
					    	}
					    }else{
				    		$cnt++;
				    	}
					}
					if($data[$i][$j]->meetingType == "BOD"){
						$query = "INSERT INTO bodmeeting(clubName, meetingNo, meetingDate, meetingAttendance) VALUES ('".$data[$i][$j]->clubName."', '".$data[$i][$j]->meetingNo."', 
						'".$data[$i][$j]->MeetingDate."', '".$data[$i][$j]->meetingAttendance."')";
						$result = mysqli_query($this->conn,$query);
				    	if($result){
					    	$rowcount =mysqli_affected_rows($this->conn);
					    	if($rowcount > 0){
								$cnt++;
					    	}
					    }else{
				    		$cnt++;
				    	}
					}
				}
			}			
	    }

	    public function SendMail(){
	    	$rows = array();
	    	$data 	= json_decode(stripslashes($_POST['meeting']));
	    	$to   ='reporting@rotaract3131.org.in, adminsecretary@rotaract3131.org.in';
			$subject = $data[0][0]->clubName.' GBM & BOD Meetings ';
			$message = '<html><body>';
			$message .= '<h1>Hello , Council Member</h1><br>';
			for ($i = 0; $i < count($data); $i++) {
				for ($j=0; $j < count($data[$i]) ; $j++) {
					$message .= '<h2>&emsp;&emsp;'.$data[$i][$j]->meetingType.' Meeting No.'.$data[$i][$j]->meetingNo.' On ('.$data[$i][$j]->MeetingDate.')</h2>';
					$message .= '<h2>&emsp;&emsp;Attendance:-'.$data[$i][$j]->meetingAttendance.'</h2>';
				}
			}
			$message .= '<h3>Thanks,</h3>';
			$message .= '<h2>'.$data[0][0]->clubName.'</h2>';
			$message .= '</body></html>';
    		$headers = "From: " . strip_tags($data[0][0]->clubEmail) . "\r\n";
			$headers .= "Reply-To: ". strip_tags($data[0][0]->clubEmail) . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";		
			$msg = nl2br($message);
			$request = mail($to, $subject, $msg, $headers);
			if ($request) {
				$rows[0] = true;
			}else{
				$rows[0] = false;
			}		
			echo json_encode($rows);
	    }

	}    
	$GBMnBOD = new GBMnBODMeetings();
	$GBMnBOD->insertGBMnBODMeetings();
	$GBMnBOD->SendMail();


?>