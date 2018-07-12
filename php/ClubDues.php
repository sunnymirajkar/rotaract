<?php	
	include 'config.php';
	class ClubDues extends Database{
		public function __construct(){
	        parent::__construct();
	        $this->conn = $this->connection;
	    }

	    public function insertClubDues(){
	    	$data 	= json_decode(stripslashes($_POST['dues']));
	    	$cnt 			= 0;
	    	for ($i = 0; $i < count($data); $i++) {
				for ($j=0; $j < count($data[$i]) ; $j++) {
					$query = "INSERT INTO clubsdues(clubName, amountDistrictDuesPaid, duesPaidInMonth, newMemberDues) VALUES ('".$data[$i][$j]->clubName."', '".$data[$i][$j]->amountDistrictDuesPaid."','".$data[$i][$j]->duesPaidInMonth."',
						'".$data[$i][$j]->newMemberDues."')";
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

	    public function SendMail(){
	    	$rows = array();
	    	$data 	= json_decode(stripslashes($_POST['dues']));
	    	$to   ='reporting@rotaract3131.org.in, adminsecretary@rotaract3131.org.in';
			$subject = $data[0][0]->clubName.' DUES ';
			$message = '<html><body>';
			$message .= '<h1>Hello , Council Member</h1><br>';
			for ($i = 0; $i < count($data); $i++) {
				for ($j=0; $j < count($data[$i]) ; $j++) {
					$message .= '<h2>&emsp;&emsp;Amount Of District Dues Paid is: 
					'.$data[$i][$j]->amountDistrictDuesPaid.'</h2>';
					$message .= '<h2>&emsp;&emsp;Amount Paid For New Members is: 
					'.$data[$i][$j]->newMemberDues.'</h2>';
					$message .= '<h2>&emsp;&emsp;Total Dues Paid In This Month is: 
					'.$data[$i][$j]->duesPaidInMonth.'</h2>';
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
	$DUES = new ClubDues();
	$DUES->insertClubDues();
	$DUES->SendMail();


?>