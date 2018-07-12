<?php
	include 'config.php';
	class ChangePasswordModal extends Database{
		public function __construct()
	    {
	        parent::__construct();
	        $this->conn = $this->connection;
	    }
	    public function ChangePwdModal(){
	    	$rows = array();

	    	$query = "UPDATE clubdetails SET uniqno = '".$_POST['randomNumber']."' 
	    			WHERE (username = '".$_POST['changePasswordUsername']."' || 
	    			email = '".$_POST['changePasswordUsername']."')";

	    	$result = mysqli_query($this->conn,$query);
	    	if($result){
		    	$rowcount =mysqli_affected_rows($this->conn); 
		    	if($rowcount > 0){
		    		$query1 = "SELECT clubName, uniqno, email FROM clubdetails WHERE (username = '".$_POST['changePasswordUsername']."' || email = '".$_POST['changePasswordUsername']."')";
			    	$result1 = mysqli_query($this->conn,$query1);
			    	$rowcount1=mysqli_num_rows($result1);
			    	if($rowcount1 > 0 ){	    		
				    	while($row1 = mysqli_fetch_array($result1)){
				    		$to       = $row1['email'];
							$subject  = 'Verification Code for Change Password';
							$message  = '<html><body>';
							$message .= '<h1>Hello ,'.$row1['clubName'].'</h1>';
							$message .= '<h1>&emsp;&emsp;Your Verification Code is <b>:-'.$row1['uniqno'].'</b></h1>';
							$message .= '<br><h2>Thanks</h2>';
							$message .= '<h2>ROTARACT DISTRICT 3131</h2>';
							$message .= '</body></html>';
				    		$headers  = "From: support@rotaract3131.org.in" . "\r\n";
							$headers .= "Reply-To: support@rotaract3131.org.in" . "\r\n";
							$headers .= "MIME-Version: 1.0\r\n";
							$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";		
							$msg = nl2br($message);
							$request = mail($to, $subject, $msg, $headers);
							if ($request) {
								$rows[0] = true;
				    			$rows[1] = "Check Your Club Email for Verification Code";
							}else{
								$rows[0] = false;
				    			$rows[1] = "Mail Sending failed...!!! Try Again";
							}		
				    	}
			    	}else{
			    		$rows[0] = false;
			    		$rows[1] = "no Data";
			    	}
		    		
		    	}else{
		    		$rows[0] = fasle;
		    		$rows[1] = "Password changing failed...!!!";
		    	}
	    	}else{
	    		$rows[0] = fasle;
		    	$rows[1] = "connection failed...!!!";
		    }
	    	echo json_encode($rows);
	    }
	}
	$changepassword = new ChangePasswordModal();
	$changepassword->ChangePwdModal();
?>