<?php

	
	// echo "akshay123";

	include 'config.php';
	class ChangePassword extends Database{
		public function __construct()
	    {
	        parent::__construct();
	        $this->conn = $this->connection;
	    }
	    public function ChangePwd(){
	    	$rows = array();
	    	$query = "UPDATE clubdetails SET password = '".$_POST['cpassword']."' 
	    			WHERE username =  '".$_POST['username']."' AND uniqno =  '".$_POST['uniqno']."'";
	    	$result = mysqli_query($this->conn,$query);
	    	if($result){
		    	$rowcount =mysqli_affected_rows($this->conn);
		    	if($rowcount > 0){
		    		$to       = $_POST['username'].'@rotaract3131.org.in';
					$subject  = 'Password Change Successfully';
					$message  = '<html><body>';
					$message .= '<h1>Hello ,'.$_POST['username'].'</h1>';
					$message .= '<h1>&emsp;&emsp;Your Password Changed Successfully!!</h1>';
					$message .= '<h2>&emsp;&emsp;New Password: '.$_POST['cpassword'].'</h2><br>';
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
		    			$rows[1] = "Password Changed Successfully!!";
					}else{
						$rows[0] = false;
		    			$rows[1] = "Mail Sending failed...!!! Try Again";
					}		
		    	}else{
		    		$rows[0] = true;
		    		$rows[1] = "Password changing failed...!!!";
		    	}
	    	}else{
	    		$rows[0] = true;
		    	$rows[1] = "connection failed...!!!";
		    }
	    	echo json_encode($rows);
	    }
	}
	$changepassword = new ChangePassword();
	$changepassword->ChangePwd();
?>