<?php
	include 'config.php';
	class DistrictEvent extends Database{
		public function __construct(){
	        parent::__construct();
	        $this->conn = $this->connection;
	    }

	    public function insertEvent(){
	    	$rows = array();
	    	$query = "INSERT INTO districtevents(title, eventdate, description, clubName)
	    	VALUES ('".$_POST['Title']."', '".$_POST['Date']."', '".$_POST['Description'].
	    	"', '".$_POST['clubName']."')";
	    	$result = mysqli_query($this->conn,$query);
	    	if($result){
		    	$rowcount =mysqli_affected_rows($this->conn);
		    	if($rowcount > 0){
		    		$clubEmails = array();
			    	$clubEmailsQuery = "SELECT email FROM clubdetails";
			    	$clubEmailsResult = mysqli_query($this->conn,$clubEmailsQuery);
			    	if($clubEmailsResult){
				    	$clubEmailsRowcount =mysqli_num_rows($clubEmailsResult);
				    	if($clubEmailsRowcount > 0){
				    		while($clubEmailsRow = mysqli_fetch_array($clubEmailsResult)){
					    		array_push($clubEmails, $clubEmailsRow['email']);			    		
					    	}
				    	}else{
				    		$clubEmails[0] = false;
				    	}
			    	}else{
			    		$clubEmails[0] = false;
				    }
				    if (!empty($clubEmails)) {
						$subject  = 'Event On '.$_POST['Date'];
						$message  = '<html><body>';
						$message .= '<h1>Hello , Clubs</h1>';
						$message .= '<h2>&emsp;&emsp;'.$_POST['Title'].' ('.$_POST['Date'].')</h2>';
						$message .= '<h4>&emsp;&emsp;&emsp;&emsp;'.$_POST['Description'].'</h4><br>';
						$message .= '<br><h2>Thanks</h2>';
						$message .= '<h2>'.$_POST['clubName'].'</h2>';
						$message .= '</body></html>';
			    		$headers  = "From: districtevent@rotaract3131.org.in" . "\r\n";
						$headers .= "Reply-To: districtevent@rotaract3131.org.in" . "\r\n";
						$headers .= "MIME-Version: 1.0\r\n";
						$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";		
						$msg = nl2br($message);
						$request = mail(implode(',', $clubEmails), $subject, $msg, $headers);
						if ($request) {
				    		$rows[0] = true;
				    		$rows[1] = "Event added succesfully...!!!";
						}else{
							$rows[0] = false;
			    			$rows[1] = "Event addition failed...!!!";
						}		
					}
		    	}else{
		    		$rows[0] = false;
		    		$rows[1] = "Event addition failed...!!!";
		    	}
	    	}else{
	    		$rows[0] = false;
		    	$rows[1] = "connection failed...!!!";
		    }
	    	echo json_encode($rows);
	    }

	    public function readEvent(){
	    	$rows = array();
	    	$query = "SELECT * FROM districtevents ORDER BY eventdate DESC";
	    	// $query = "SELECT * FROM districtevents WHERE eventdate >='".$_POST['today']."'
	    	// ORDER BY eventdate DESC";
	    	$result = mysqli_query($this->conn,$query);
	    	if($result){
		    	$rowcount =mysqli_num_rows($result);
		    	if($rowcount > 0){
		    		while($row = mysqli_fetch_array($result)){
			    		$rows[] = $row;
			    	}
		    	}else{
		    		$rows[0] = false;
		    	}
	    	}else{
	    		$rows[0] = false;
		    }
	    	echo json_encode($rows);
	    }

	    public function NextEvent(){
	    	$rows = array();
	    	$query = "SELECT * FROM districtevents WHERE eventdate >='".$_POST['today']."'
	    	ORDER BY eventdate LIMIT 1";
	    	$result = mysqli_query($this->conn,$query);
	    	if($result){
		    	$rowcount =mysqli_num_rows($result);
		    	if($rowcount > 0){
		    		while($row = mysqli_fetch_array($result)){
			    		$rows[] = $row;
			    	}
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
	if($_POST['action'] == "insert"){
		$DistEvent->insertEvent();
	}else if($_POST['action'] == "read"){
		$DistEvent->readEvent();		
	}else if($_POST['action'] == "next"){
		$DistEvent->NextEvent();		
	}
?>