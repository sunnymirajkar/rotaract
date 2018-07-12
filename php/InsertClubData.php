<?php
	include 'config.php';
	session_start();
	class ClubData extends Database{
		public function __construct()
	    {
	        parent::__construct();
	        $this->conn = $this->connection;
	    }
	    public function InsertClubData(){

	    	$rows = array();
	    	$query = "INSERT INTO clubdetails(clubName, charterDay, meeting, zoneNo, facebookLink, instagramLink, email, username, password, uniqno) VALUES ('".$_POST['clubName']."','".$_POST['charterDay']."','".$_POST['meeting']."','".$_POST['zoneNo']."','".$_POST['facebook']."','".$_POST['instagram']."','".$_POST['email']."','".$_POST['userName']."','".$_POST['password']."','".$_POST['uniqNo']."') ";
	    	$result = mysqli_query($this->conn,$query);
	    	if($result){	    		
		    	$rows[0] = true;
		    }else{
	    		$rows[0] = false;
	    	}
	    	echo json_encode($rows);
	    }

	    public function ReadClubData(){
	    	$rows = array();
	    	$query = "SELECT * FROM clubdetails";
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

	    public function SelectClubData(){
	    	$rows = array();
	    	$query = "SELECT * FROM clubdetails WHERE id=".$_POST['ID'];
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

	    public function UpdateClubData(){
	    	$rows = array();
	    	$query = "UPDATE clubdetails SET clubName = '".$_POST['clubName']."', charterDay = '".$_POST['charterDay']."', meeting = '".$_POST['meeting']."', facebookLink = '".$_POST['facebook']."', instagramLink = '".$_POST['instagram']."', email = '".$_POST['email']."', username = '".$_POST['userName']."', password = '".$_POST['password']."', zoneNo = '".$_POST['zoneNo']."', uniqno = '".$_POST['uniqNo']."' WHERE id =  ".$_POST['clubID'];
	    	// echo $query;die;
	    	$result = mysqli_query($this->conn,$query);
	    	if($result){
		    	$rowcount =mysqli_affected_rows($this->conn);
		    	if($rowcount > 0){
		    		$rows[0] = true;
		    		$rows[1] = "Club Data Updated succesfully...!!!";	    		
		    	}else{
		    		$rows[0] = fasle;
		    		$rows[1] = "Club Data Update failed...!!!";
		    	}
	    	}else{
	    		$rows[0] = fasle;
		    	$rows[1] = "connection failed...!!!";
		    }
	    	echo json_encode($rows);
	    }
	}

	$club = new ClubData();
	if($_POST['type']=="insert")
	{
		$club->InsertClubData();
	}else if ($_POST['type']=="read") {
		$club->ReadClubData();
	}else if ($_POST['type']=="select") {
		$club->SelectClubData();
	}else if ($_POST['type']=="update") {
		$club->UpdateClubData();
	}
?>