<?php
	include 'config.php';
	class GetClubBodRecords extends Database{
		public function __construct()
	    {
	        parent::__construct();
	        $this->conn = $this->connection;
	    }
	    public function findBOD(){
	    	$rows = array();
	    	$query = "SELECT * FROM districtclubmembers WHERE clubName = '".$_GET['clubName']."' ORDER BY priority";
	    	$result = mysqli_query($this->conn,$query);
	    	while($row = mysqli_fetch_array($result)){
	    		$rows[] = $row;
	    	}
	    	echo json_encode($rows);
	    }
	}
	$obj = new GetClubBodRecords();
	$obj->findBOD();
?>