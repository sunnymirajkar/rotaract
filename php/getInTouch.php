<?php
	include 'config.php';
	class GetInTouch extends Database{
		public function __construct()
	    {
	        parent::__construct();
	        $this->conn = $this->connection;
	    }
	    public function getintouch(){
	    	$rows = array();
	    	$query = "INSERT INTO getintouch( name, email, subject, message) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['subject']."','".$_POST['msg']."') ";
	    	$result = mysqli_query($this->conn,$query);
	    	if($result){
		    	$to       = 'enquiry@rotaract3131.org.in';
				$subject  = 'Enquiry About '.$_POST['subject'];
				$message  = '<html><body>';
				$message .= '<h1>Hello,</h1>';
				$message .= '<h2>&emsp;&emsp;Name:- '.$_POST['name'].'</h2>';
				$message .= '<h2>&emsp;&emsp;Email:- '.$_POST['email'].'</h2>';
				$message .= '<h4>&emsp;&emsp;&emsp;&emsp;'.$_POST['msg'].'</h4><br>';
				$message .= '<br><h2>Thanks</h2>';
				$message .= '<h2>'.$_POST['name'].'</h2>';
				$message .= '</body></html>';
	    		$headers  = "From: support@rotaract3131.org.in" . "\r\n";
				$headers .= "Reply-To: support@rotaract3131.org.in" . "\r\n";
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
	$GetInTouch = new GetInTouch();
	$GetInTouch->getintouch();
?>