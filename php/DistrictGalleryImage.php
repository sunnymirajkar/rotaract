<?php
	include 'config.php';
	session_start();
	class GalleryImage extends Database{
		public function __construct()
	    {
	        parent::__construct();
	        $this->conn = $this->connection;
	    }
	    public function InsertGalleryImage(){
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
						$query = "SELECT * FROM districtgallery";
				    	$result = mysqli_query($this->conn,$query);				    	
					    $rowcount =mysqli_num_rows($result);
					    // echo $rowcount; die;
						if($_FILES["file"]["type"] == "image/png"){
							$targetPath = "../img/gallery/Gallery".$rowcount.".png";
							$DBPath = "img/gallery/Gallery".$rowcount.".png";
						}else if($_FILES["file"]["type"] == "image/jpg"){
							$targetPath = "../img/gallery/Gallery".$rowcount.".jpg";
							$DBPath = "img/gallery/Gallery".$rowcount.".jpg";
						}else if($_FILES["file"]["type"] == "image/jpeg"){
							$targetPath = "../img/gallery/Gallery".$rowcount.".jpeg";
							$DBPath = "img/gallery/Gallery".$rowcount.".jpeg";
						}
					    move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
					    $query = "INSERT INTO districtgallery(clubName, paths)
				    	VALUES ('".$_POST['clubName']."','".$DBPath."') ";
				    	$result = mysqli_query($this->conn,$query);
				    	if($result){	    		
					    	$rows[0] = true;
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

	    public function SelectGalleryImage(){
	    	$rows = array();
	    	$query = "SELECT * FROM districtgallery";
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

	$Gallery = new GalleryImage();
	if($_POST["type"] == "read"){
		$Gallery->SelectGalleryImage();
	}else if($_POST["type"] == "insert"){
		$Gallery->InsertGalleryImage();
	}
?>