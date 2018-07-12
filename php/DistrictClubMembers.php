<?php
	include 'config.php';
	class DistrictClubMember extends Database{
		public function __construct()
	    {
	        parent::__construct();
	        $this->conn = $this->connection;
	    }

	    public function MemberRegistration(){
	    	$rows = array();
	    	$query = "INSERT INTO districtclubmembers(name, contact, email, username, bloodGroup, clubName, designation, zone, priority) VALUES ('".$_POST['name']."','".$_POST['contact']."','".$_POST['email']."','".$_POST['userName']."','".$_POST['bloodGroup']."','".$_POST['clubName']."','".$_POST['designation']."','".$_POST['zoneNo']."','".$_POST['priority']."') ";
	    	$result = mysqli_query($this->conn,$query);
	    	if($result){
		    	$to       = $_POST['email'];
				$subject  = 'Welcome to Rotaract District 3131';
				$message  = '<html><body>';
				$message .= '<h1>Dear, '.$_POST['name'].'</h1>';
				$message .= '<h2>&emsp;&emsp;Welcome to '.$_POST['clubName'].'</h2><br>';
				$message .= '<br><h2>Thanks</h2>';
				$message .= '<h2>'.$_POST['clubName'].'</h2>';
				$message .= '</body></html>';
	    		$headers = "From: " . strip_tags($_POST['clubEmail']) . "\r\n";
				$headers .= "Reply-To: ". strip_tags($_POST['clubEmail']) . "\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";		
				$msg = nl2br($message);
				$request = mail($to, $subject, $msg, $headers);
				if ($request) {
					$rows[0] = true;
				}else{
					$rows[0] = false;
				}		
		    }else{
	    		$rows[0] = false;
	    	}
	    	echo json_encode($rows);
	    }

	    public function ReadMembersData(){		
	    	$rows = array();
	    	$query = "SELECT * FROM districtclubmembers WHERE clubName = '".$_POST["clubName"]."' ORDER BY priority";
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

	    public function SelectMembersData(){
	    	$rows = array();
	    	$query = "SELECT * FROM districtclubmembers WHERE id = ".$_POST["MemberId"];
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

	    public function DeleteMembersData(){
	    	$query = "DELETE FROM districtclubmembers WHERE id=".$_POST["MemberId"];
	    	// echo $query;
	    	$result = mysqli_query($this->conn,$query);
	    	if($result){
		    	$rowcount =mysqli_affected_rows($this->conn);
		    	if($rowcount > 0){
		    		$rows[0] = true;
		    		$rows[1] = "Member Deleted succesfully...!!!";
		    	}else{
		    		$rows[0] = true;
		    		$rows[1] = "Member Delete failed...!!!";
		    	}
	    	}else{
	    		$rows[0] = true;
		    	$rows[1] = "connection failed...!!!";
		    }
	    	echo json_encode($rows);
	    }

		public function UpdateMembersData(){
	    	$rows = array();
	    	$query = "UPDATE districtclubmembers SET name = '".$_POST['name']."', contact = '".$_POST['contact']."', email = '".$_POST['email']."', username = '".$_POST['userName']."', bloodGroup = '".$_POST['bloodGroup']."', designation = '".$_POST['designation']."', zone = '".$_POST['zoneNo']."', priority = '".$_POST['priority']."' WHERE id =  ".$_POST['id'];
	    	// echo $query;die;
	    	$result = mysqli_query($this->conn,$query);
	    	if($result){
		    	$rowcount =mysqli_affected_rows($this->conn);
		    	if($rowcount > 0){	
		    		$to       = $_POST['email'];
					$subject  = 'Update Personal Information';
					$message  = '<html><body>';
					$message .= '<h1>Dear, '.$_POST['name'].'</h1>';
					$message .= '<h2>&emsp;&emsp; Succesfully Updated Your Personal Information</h2><br>';
					$message .= '<br><h2>Thanks</h2>';
					$message .= '<h2>'.$_POST['clubName'].'</h2>';
					$message .= '</body></html>';
		    		$headers = "From: " . strip_tags($_POST['clubEmail']) . "\r\n";
					$headers .= "Reply-To: ". strip_tags($_POST['clubEmail']) . "\r\n";
					$headers .= "MIME-Version: 1.0\r\n";
					$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";		
					$msg = nl2br($message);
					$request = mail($to, $subject, $msg, $headers);
					if ($request) {
						$rows[0] = true;
		    			$rows[1] = "Member Data Updated succesfully...!!!";
					}else{
						$rows[0] = false;
					}		    		
		    	}else{
		    		$rows[0] = false;
		    		$rows[1] = "Member Data Update failed...!!!";
		    	}
	    	}else{
	    		$rows[0] = false;
		    	$rows[1] = "connection failed...!!!";
		    }
	    	echo json_encode($rows);
	    }	    

	}
	$clubMember = new DistrictClubMember();
	if($_POST["type"]=="insert"){
		$clubMember->MemberRegistration();
	}else if ($_POST["type"]=="read") {
		$clubMember->ReadMembersData();
	}else if ($_POST["type"]=="delete") {
		$clubMember->DeleteMembersData();
	}else if ($_POST["type"]=="select") {
		$clubMember->SelectMembersData();
	}else if ($_POST["type"]=="update") {
		$clubMember->UpdateMembersData();
	}		
?>