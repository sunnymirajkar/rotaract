<?php	
	// error_reporting(E_ALL);
	// ini_set('display_errors', 1);
	include 'config.php';
	class ClubBulletin extends Database{
		public function __construct(){
	        parent::__construct();
	        $this->conn = $this->connection;
	    }

	    public function insertBulletin(){
	    	if(isset($_FILES["file"]["type"])){
	    		$rows = array();
	    		$validextensions = array("pdf");
				$temporary = explode(".", $_FILES["file"]["name"]);
				$file_extension = end($temporary);
				if (($_FILES["file"]["type"] == "application/pdf") && ($_FILES["file"]["size"] < 10000000)  
					&& in_array($file_extension, $validextensions)){
					if ($_FILES["file"]["error"] > 0)
					{
						echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
					}else{
						$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variablefile is to be 
						$targetPath = "../img/bulletin/".$_FILES["file"]["name"];
						$DBPath  = "img/bulletin/".$_FILES["file"]["name"];
						
					    move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
					    $query = "INSERT INTO clubsbulletin(clubName, bulletinName ,bulletinDate, bulletinPath)
						    VALUES ('".$_POST['clubName']."', '".$_POST['name']."', '".$_POST['date']."', 
						    '".$DBPath."') ";
				    	$result = mysqli_query($this->conn,$query);
				    	if($result){	
				    		$to   ='reporting@rotaract3131.org.in, adminsecretary@rotaract3131.org.in';
							$subject = $_POST['clubName'].' Bulletin ';
							$message = '<html><body>';
							$message .= '<h1>Hello , Council Member</h1><br>';
							$message .= '<h2>Bulletin Title: '.$_POST['name'].' ( '.$_POST['date'].' )</h2><br>';
							$message .= '<h3>Thanks,</h3>';
							$message .= '<h2>'.$_POST['clubName'].'</h2>';
							$message .= '</body></html>'; 
							// NEED TO DO FOR FILE fdf_get_attachment
							$file = $sourcePath;
							$content = chunk_split(base64_encode(file_get_contents($file)));
							$uid = md5(uniqid(time()));
				    		$headers = "From: " . strip_tags($_POST['clubEmail']) . "\r\n";
							$headers .= "Reply-To: ". strip_tags($_POST['clubEmail']) . "\r\n";
							$headers .= "MIME-Version: 1.0\r\n";
							$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";						
							$headers .="--".$uid."\r\n";
							$headers .="Content-Type: ".$_FILES["file"]["type"]."; name=\"".$_FILES["file"]["name"]."\"\r\n";	
							$headers .="Content-Transfer-Encoding: base64\r\n";
							$headers .="Content-Disposition: attachment; filename=\"".$_FILES["file"]["name"]."\"\r\n";
							$headers .=$content."\r\n\r\n";
							$msg = nl2br($message);
							$request = mail($to, $subject, $msg, $headers);
							if ($request) {
								$rows[0] = true;
							}else{
								$rows[0] = false;
							}		    		
					    	$rows[0] = true;
					    }else{
				    		$rows[0] = false;
				    	}
				    	echo json_encode($rows);
					}
				}	
	    	}	    				
	    }
	}    
	$bulletin = new ClubBulletin();
	$bulletin->insertBulletin();
	// $bulletin->SendMail();


?>