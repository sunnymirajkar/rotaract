<?php
	include 'config.php';
	class CouncilDetails extends Database{
		public function __construct(){
	        parent::__construct();
	        $this->conn = $this->connection;
	    }

	    public function readCouncilData(){
	    	$rows = array();
	    	$query = "SELECT * FROM councilmember ORDER BY priority";
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
	$councilData = new CouncilDetails();
	if($_POST['type'] == "read"){
		$councilData->readCouncilData();		
	}
?>