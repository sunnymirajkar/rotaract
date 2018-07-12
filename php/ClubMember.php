<?php
	include 'config.php';
	class ClubMember extends Database{
		public function __construct(){
	        parent::__construct();
	        $this->conn = $this->connection;
	    }

	    public function insertClubMember(){
	    	$data 	= json_decode(stripslashes($_POST['member']));
	    	$cnt 			= 0;
	    	for ($i = 0; $i < count($data); $i++) {
				for ($j=0; $j < count($data[$i]) ; $j++) {
					$query = "INSERT INTO clubmember(clubName, femaleMember, maleMember, prospectiveMember, totalMember) VALUES ('".$data[$i][$j]->clubName."', '".$data[$i][$j]->femaleMember."','".$data[$i][$j]->maleMember."','".$data[$i][$j]->prospectiveMember."','".$data[$i][$j]->totalMember."')";					
					$result = mysqli_query($this->conn,$query);
			    	if($result){
				    	$rowcount =mysqli_affected_rows($this->conn);
				    	if($rowcount > 0){
							$to   ='reporting@rotaract3131.org.in, adminsecretary@rotaract3131.org.in';
							$subject = $data[0][0]->clubName.' Members ';
							$message = '<html><body>';
							$message .= '<h1>Hello , Council Member</h1><br>';
							$message .= '<h2>&emsp;&emsp;No. of Female:'.$data[$i][$j]->femaleMember.'</h2>';
							$message .= '<h2>&emsp;&emsp;No. of Male:'.$data[$i][$j]->maleMember.'</h2>';
							$message .= '<h2>&emsp;&emsp;Prospective Members:'
							.$data[$i][$j]->prospectiveMember.'</h2>';
							$message .= '<h2>&emsp;&emsp;Total Members:'.$data[$i][$j]->totalMember.'</h2>';
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
				    	}
				    }else{
			    		$rows[0] = false;
			    	}
				}
			}	
			echo json_encode($rows);		
	    }

	  //   public function SendMail(){
	  //   	$rows = array();
	  //   	$data 	= json_decode(stripslashes($_POST['dues']));
	  //   	$to   ='reporting@rotaract3131.org.in, adminsecretary@rotaract3131.org.in';
			// $subject = $data[0][0]->clubName.' DUES ';
			// $message = '<html><body>';
			// $message .= '<h1>Hello , Council Member</h1><br>';
			// for ($i = 0; $i < count($data); $i++) {
			// 	for ($j=0; $j < count($data[$i]) ; $j++) {
			// 		$message .= '<h2>&emsp;&emsp;Amount Of District Dues Paid is: 
			// 		'.$data[$i][$j]->amountDistrictDuesPaid.'</h2>';
			// 		$message .= '<h2>&emsp;&emsp;Amount Paid For New Members is: 
			// 		'.$data[$i][$j]->newMemberDues.'</h2>';
			// 		$message .= '<h2>&emsp;&emsp;Total Dues Paid In This Month is: 
			// 		'.$data[$i][$j]->duesPaidInMonth.'</h2>';
			// 	}
			// }
			// $message .= '<h3>Thanks,</h3>';
			// $message .= '<h2>'.$data[0][0]->clubName.'</h2>';
			// $message .= '</body></html>';
   //  		$headers = "From: " . strip_tags($data[0][0]->clubEmail) . "\r\n";
			// $headers .= "Reply-To: ". strip_tags($data[0][0]->clubEmail) . "\r\n";
			// $headers .= "MIME-Version: 1.0\r\n";
			// $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";		
			// $msg = nl2br($message);
			// $request = mail($to, $subject, $msg, $headers);
			// if ($request) {
			// 	$rows[0] = true;
			// }else{
			// 	$rows[0] = false;
			// }		
			// echo json_encode($rows);
	  //   }

	}    
	$MEMBER = new ClubMember();
	$MEMBER->insertClubMember();
	// $MEMBER->SendMail();


?>