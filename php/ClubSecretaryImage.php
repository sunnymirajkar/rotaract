<?php
	include 'config.php';
	session_start();
	class SecretaryImage extends Database{
		public function __construct()
	    {
	        parent::__construct();
	        $this->conn = $this->connection;
	    }
	    public function InsertSecretaryImage(){
	    	if(isset($_FILES["file"]["type"])){
				$validextensions = array("jpeg", "jpg", "png");
				$temporary = explode(".", $_FILES["file"]["name"]);
				$file_extension = end($temporary);				
				$rows = array();
				if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")) && ($_FILES["file"]["size"] < 1000000)  && in_array($file_extension, 
					$validextensions)) {
					if ($_FILES["file"]["error"] > 0)
					{
						echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
					}else{
						$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variablefile is to be stored
						// echo $targetPath;die;
						if($_FILES["file"]["type"] == "image/png"){
							$targetPath = "../img/secretary/".join("_", explode(" ",$_POST['clubName']))."_SECRETARY.png";
							$DBPath  = "img/secretary/".join("_", explode(" ",$_POST['clubName'])).
							"_SECRETARY.png";
						}else if($_FILES["file"]["type"] == "image/jpg"){
							$targetPath = "../img/secretary/".join("_", explode(" ",$_POST['clubName']))."_SECRETARY.jpg";
							$DBPath  = "img/secretary/".join("_", explode(" ",$_POST['clubName'])).
							"_SECRETARY.jpg";
						}else if($_FILES["file"]["type"] == "image/jpeg"){
							$targetPath = "../img/secretary/".join("_", explode(" ",$_POST['clubName']))."_SECRETARY.jpeg";
							$DBPath  = "img/secretary/".join("_", explode(" ",$_POST['clubName'])).
							"_SECRETARY.jpeg";
						}
					    move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file						
						$query = "SELECT * FROM districtclubsecretarys WHERE clubName = '".$_POST["clubName"]."'";
				    	$result = mysqli_query($this->conn,$query);
				    	if($result){
					    	$rowcount =mysqli_num_rows($result);
					    	if($rowcount > 0){
					    		$rows[0] = true;
					    	}else if($rowcount == 0){					    		
						    	$query = "INSERT INTO districtclubsecretarys(clubName, paths)
						    	VALUES ('".$_POST["clubName"]."','".$DBPath."') ";
						    	$result = mysqli_query($this->conn,$query);
						    	if($result){	    		
							    	$rows[0] = true;
							    }else{
						    		$rows[0] = false;
						    	}
					    	}else{
					    		$rows[0] = false;
					    	}
				    	}else{
				    		$rows[0] = false;
					    }
					}
				}else{
					$rows[0] = false;
				}
				echo json_encode($rows);
			}
	    }

	    public function SelectSecretaryImage(){
	    	$rows = array();
	    	$query = "SELECT * FROM districtclubsecretarys";
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

	$Secretary = new SecretaryImage();
	if($_POST["type"] == "read"){
		$Secretary->SelectSecretaryImage();
	}else if($_POST["type"] == "insert"){
		$Secretary->InsertSecretaryImage();
	}
?>