<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	include 'config.php';
	class DistrictEvent extends Database{
		public function __construct(){
	        parent::__construct();
	        $this->conn = $this->connection;
	    }

	    public function insertEvent(){
	    	$rows 			= array();
	    	$data 			= json_decode(stripslashes($_POST['data']));
	    	$cnt 			= 0;
			for ($i = 0; $i < count($data); $i++) {
				for ($j=0; $j < count($data[$i]) ; $j++) { 
					$query = "INSERT INTO monthlyreport(clubName, eventName, eventDate, avenue, attendace, description) VALUES ('".$data[$i][$j]->clubName."', '".$data[$i][$j]->reportName."', 
						'".$data[$i][$j]->reportDate."', '".$data[$i][$j]->avenue."',
						 '".$data[$i][$j]->attendance."','".$data[$i][$j]->reportDescription."')";
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
			if($cnt>0){
				$rows[0]= true;
			}else{
				$rows[0]= false;
			}
			// echo json_encode($rows);
	    }

	    public function SendMailToSecretary(){
	    	$rows = array();
	    	$data = json_decode(stripslashes($_POST['data']));
	    	$to   ='reporting@rotaract3131.org.in, adminsecretary@rotaract3131.org.in';
			$subject = $data[0][0]->clubName.' Monthly Report ';
			$message = '<html><body>';
			$message .= '<h1>Hello , Council Member</h1><br>';
			for ($i = 0; $i < count($data); $i++) {
				for ($j=0; $j < count($data[$i]) ; $j++) {
					$message .= '<h2>&emsp;&emsp;Avenue:-'.$data[$i][$j]->avenue.'</h2>';
					$message .= '<h1>&emsp;&emsp;'.$data[$i][$j]->reportName.
					' ('.$data[$i][$j]->reportDate.')</h1>';
					$message .= '<h2>&emsp;&emsp;Attendance:-'.$data[$i][$j]->attendance.'</h2>';
					$message .= '<h4>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.
					$data[$i][$j]->reportDescription.'</h4></br></br></br>';
				}
			}
			$message .= '<h3>Thanks,</h3>';
			$message .= '<h2>'.$data[0][0]->clubName.'</h2>';
			$message .= '</body></html>'; /*echo $message;die;*/
    		$headers = "From: " . strip_tags($data[0][0]->clubEmail) . "\r\n";
			$headers .= "Reply-To: ". strip_tags($data[0][0]->clubEmail) . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";		
			$msg = nl2br($message);
			mail($to, $subject, $msg, $headers);	
					
	    }

	    public function SendMailToISD(){
	    	$rows = array();
	    	$data = json_decode(stripslashes($_POST['data']));
	    	$cnt = 0;
	    	$to      ='isd@rotaract3131.org.in';
			$subject = $data[0][0]->clubName.' Monthly Report ';
			$message = '<html><body>';
			$message .= '<h1>Hello , Council Member</h1><br>';
			for ($i = 0; $i < count($data); $i++) {
				for ($j=0; $j < count($data[$i]) ; $j++) {
					if($data[$i][$j]->avenue == "International Service"){
						$message .= '<h1>&emsp;&emsp;'.$data[$i][$j]->reportName.
						' ('.$data[$i][$j]->reportDate.')</h1>';
						$message .= '<h2>&emsp;&emsp;Attendance:-'.$data[$i][$j]->attendance.'</h2>';
						$message .= '<h4>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.
						$data[$i][$j]->reportDescription.'</h4></br></br></br>';
						$cnt++;
					}
				}
			}
			if($cnt>0){
				$message .= '<h3>Thanks,</h3>';
				$message .= '<h2>'.$data[0][0]->clubName.'</h2>';
				$message .= '</body></html>'; /*echo $message;die;*/
	    		$headers = "From: " . strip_tags($data[0][0]->clubEmail) . "\r\n";
				$headers .= "Reply-To: ". strip_tags($data[0][0]->clubEmail) . "\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";		
				$msg = nl2br($message);
				mail($to, $subject, $msg, $headers);
			}	
	    }

	    public function SendMailToCSD(){
	    	$rows = array();
	    	$data = json_decode(stripslashes($_POST['data']));
	    	$cnt = 0;
	    	$to      ='cmd@rotaract3131.org.in';
			$subject = $data[0][0]->clubName.' Monthly Report ';
			$message = '<html><body>';
			$message .= '<h1>Hello , Council Member</h1><br>';
			for ($i = 0; $i < count($data); $i++) {
				for ($j=0; $j < count($data[$i]) ; $j++) {
					if($data[$i][$j]->avenue == "Community Service"){
						$message .= '<h1>&emsp;&emsp;'.$data[$i][$j]->reportName.
						' ('.$data[$i][$j]->reportDate.')</h1>';
						$message .= '<h2>&emsp;&emsp;Attendance:-'.$data[$i][$j]->attendance.'</h2>';
						$message .= '<h4>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.
						$data[$i][$j]->reportDescription.'</h4></br></br></br>';
						$cnt++;
					}
				}
			}
			if($cnt>0){
				$message .= '<h3>Thanks,</h3>';
				$message .= '<h2>'.$data[0][0]->clubName.'</h2>';
				$message .= '</body></html>'; /*echo $message;die;*/
	    		$headers = "From: " . strip_tags($data[0][0]->clubEmail) . "\r\n";
				$headers .= "Reply-To: ". strip_tags($data[0][0]->clubEmail) . "\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";		
				$msg = nl2br($message);
				mail($to, $subject, $msg, $headers);				
			}
	    }

	    public function SendMailToCLUBS(){
	    	$rows = array();
	    	$data = json_decode(stripslashes($_POST['data']));
	    	$cnt = 0;
	    	$to      ='csd@rotaract3131.org.in';
			$subject = $data[0][0]->clubName.' Monthly Report ';
			$message = '<html><body>';
			$message .= '<h1>Hello , Council Member</h1><br>';
			for ($i = 0; $i < count($data); $i++) {
				for ($j=0; $j < count($data[$i]) ; $j++) {
					if($data[$i][$j]->avenue == "Club Service"){
						$message .= '<h1>&emsp;&emsp;'.$data[$i][$j]->reportName.
						' ('.$data[$i][$j]->reportDate.')</h1>';
						$message .= '<h2>&emsp;&emsp;Attendance:-'.$data[$i][$j]->attendance.'</h2>';
						$message .= '<h4>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.
						$data[$i][$j]->reportDescription.'</h4></br></br></br>';
						$cnt++;
					}
				}
			}
			if($cnt>0){
				$message .= '<h3>Thanks,</h3>';
				$message .= '<h2>'.$data[0][0]->clubName.'</h2>';
				$message .= '</body></html>'; /*echo $message;die;*/
	    		$headers = "From: " . strip_tags($data[0][0]->clubEmail) . "\r\n";
				$headers .= "Reply-To: ". strip_tags($data[0][0]->clubEmail) . "\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";		
				$msg = nl2br($message);
				mail($to, $subject, $msg, $headers);				
			}
	    }

	    public function SendMailToFSD(){
	    	$rows = array();
	    	$data = json_decode(stripslashes($_POST['data']));
	    	$cnt = 0;
	    	$to      ='pdd@rotaract3131.org.in';
			$subject = $data[0][0]->clubName.' Monthly Report ';
			$message = '<html><body>';
			$message .= '<h1>Hello , Council Member</h1><br>';
			for ($i = 0; $i < count($data); $i++) {
				for ($j=0; $j < count($data[$i]) ; $j++) {
					if($data[$i][$j]->avenue == "Professional Service"){
						$message .= '<h1>&emsp;&emsp;'.$data[$i][$j]->reportName.
						' ('.$data[$i][$j]->reportDate.')</h1>';
						$message .= '<h2>&emsp;&emsp;Attendance:-'.$data[$i][$j]->attendance.'</h2>';
						$message .= '<h4>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.
						$data[$i][$j]->reportDescription.'</h4></br></br></br>';
						$cnt++;
					}
				}
			}
			if($cnt>0){
				$message .= '<h3>Thanks,</h3>';
				$message .= '<h2>'.$data[0][0]->clubName.'</h2>';
				$message .= '</body></html>'; /*echo $message;die;*/
	    		$headers = "From: " . strip_tags($data[0][0]->clubEmail) . "\r\n";
				$headers .= "Reply-To: ". strip_tags($data[0][0]->clubEmail) . "\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";		
				$msg = nl2br($message);
				mail($to, $subject, $msg, $headers);				
			}
	    }

	    public function SendMailToOther(){
	    	$rows = array();
	    	$data = json_decode(stripslashes($_POST['data']));
	    	$cnt = 0;
	    	$to      ='otherservice@rotaract3131.org.in';
			$subject = $data[0][0]->clubName.' Monthly Report ';
			$message = '<html><body>';
			$message .= '<h1>Hello , Council Member</h1><br>';
			for ($i = 0; $i < count($data); $i++) {
				for ($j=0; $j < count($data[$i]) ; $j++) {
					if($data[$i][$j]->avenue == "Other Service"){
						$message .= '<h1>&emsp;&emsp;'.$data[$i][$j]->reportName.
						' ('.$data[$i][$j]->reportDate.')</h1>';
						$message .= '<h2>&emsp;&emsp;Attendance:-'.$data[$i][$j]->attendance.'</h2>';
						$message .= '<h4>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.
						$data[$i][$j]->reportDescription.'</h4></br></br></br>';
						$cnt++;
					}
				}
			}
			if($cnt>0){
				$message .= '<h3>Thanks,</h3>';
				$message .= '<h2>'.$data[0][0]->clubName.'</h2>';
				$message .= '</body></html>'; /*echo $message;die;*/
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
			}else{
				$rows[0] = false;
			}	
			echo json_encode($rows);
	    }
	}


	$DistEvent = new DistrictEvent();
	$DistEvent->insertEvent();
	$DistEvent->SendMailToSecretary();
	$DistEvent->SendMailToISD();
	$DistEvent->SendMailToCSD();
	$DistEvent->SendMailToCLUBS();
	$DistEvent->SendMailToFSD();
	$DistEvent->SendMailToOther();
?>