<?php
	include 'config.php';
	session_start();
	class PrecidentImage extends Database{
		public function __construct()
	    {
	        parent::__construct();
	        $this->conn = $this->connection;
	    }
	    public function InsertPrecidentImage(){
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
						if($_FILES["file"]["type"] == "image/png"){
							$targetPath = "../img/president/".join("_", explode(" ",$_POST['clubName']))."_PRESIDENT.png";
							$DBPath  = "img/president/".join("_", explode(" ",$_POST['clubName'])).
							"_PRESIDENT.png";
						}else if($_FILES["file"]["type"] == "image/jpg"){
							$targetPath = "../img/president/".join("_", explode(" ",$_POST['clubName']))."_PRESIDENT.jpg";
							$DBPath  = "img/president/".join("_", explode(" ",$_POST['clubName']))
							."_PRESIDENT.jpg";
						}else if($_FILES["file"]["type"] == "image/jpeg"){
							$targetPath = "../img/president/".join("_", explode(" ",$_POST['clubName']))."_PRESIDENT.jpeg";
							$DBPath  = "img/president/".join("_", explode(" ",$_POST['clubName'])).
							"_PRESIDENT.jpeg";
						}
					    move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file						
						$query = "SELECT * FROM districtclubpresidents WHERE clubName = '".$_POST["clubName"]."'";
				    	$result = mysqli_query($this->conn,$query);

				    	if($result){
					    	$rowcount =mysqli_num_rows($result);
					    	if($rowcount > 0){
					    		$rows[0] = true;
					    	}else if($rowcount == 0){					    		
						    	$query = "INSERT INTO districtclubpresidents(clubName, paths)
						    	VALUES ('".$_POST['clubName']."','".$DBPath."') ";
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

	    public function SelectPrecidentImage(){
			
	    	$rows = array();
	    	$query = "SELECT * FROM districtclubpresidents";
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

	$Precident = new PrecidentImage();
	if($_POST["type"] == "read"){
		$Precident->SelectPrecidentImage();
	}else if($_POST["type"] == "insert"){
		$Precident->InsertPrecidentImage();
	}
?>