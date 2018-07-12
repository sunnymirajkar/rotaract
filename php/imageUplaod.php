<?php
if(isset($_FILES["file"]["type"])){
	$validextensions = array("jpeg", "jpg", "png");
	$temporary = explode(".", $_FILES["file"]["name"]);
	$file_extension = end($temporary);
	if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")) && ($_FILES["file"]["size"] < 1000000)  && in_array($file_extension, 
		$validextensions)) {
		if ($_FILES["file"]["error"] > 0)
		{
			echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
		}else{
			if (file_exists("../img/president/" . $_FILES["file"]["name"])) {
				echo $_FILES["file"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
			}else{
				$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variablefile is to be stored
				// echo $targetPath;die;
				if($_FILES["file"]["type"] == "image/png"){
					$targetPath = "../img/president/".join("_", explode(" ",$_POST['clubName']))."_PRESIDENT.png";
				}else if($_FILES["file"]["type"] == "image/jpg"){
					$targetPath = "../img/president/".join("_", explode(" ",$_POST['clubName']))."_PRESIDENT.jpg";
				}else if($_FILES["file"]["type"] == "image/jpeg"){
					$targetPath = "../img/president/".join("_", explode(" ",$_POST['clubName']))."_PRESIDENT.jpeg";
				}

				move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
				echo "<span id='success'>Image Uploaded Successfully...!!</span><br/>";
			}
		}
	}else{
		echo "<span id='invalid'>***Invalid file Size or Type***<span>";
	}
}
?>