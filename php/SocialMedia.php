<?php
	include 'config.php';
	class SocialMedia extends Database{
		public function __construct(){
	        parent::__construct();
	        $this->conn = $this->connection;
	    }

	    public function readSocialMedia(){
	    	$rows = array();
	    	$query = "SELECT facebookLink, instagramLink FROM clubdetails
	    	 WHERE clubName = '".$_GET['clubName']."'";
	    	
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
	$clubData = new SocialMedia();
	$clubData->readSocialMedia();
?>