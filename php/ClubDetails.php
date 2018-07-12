<?php
	include 'config.php';
	class ClubDetails extends Database{
		public function __construct(){
	        parent::__construct();
	        $this->conn = $this->connection;
	    }

	    public function readClubData(){
	    	$rows = array();
	    	$query = "SELECT * FROM clubdetails ";
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
	$clubData = new ClubDetails();
	if($_POST['type'] == "read"){
		$clubData->readClubData();		
	}
?>