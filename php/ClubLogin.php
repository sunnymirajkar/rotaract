<?php
	include 'config.php';
	session_start();
	class ClubLogin extends Database{
		public function __construct()
	    {
	        parent::__construct();
	        $this->conn = $this->connection;
	    }
	    public function Login(){
	    	$rows = array();
	    	$query = "SELECT clubName, email FROM clubdetails WHERE (username = '".$_POST['userName']."' || 
	    	email = '".$_POST['userName']."') AND password = '".$_POST['password']."'  ";
	    	$result = mysqli_query($this->conn,$query);
	    	$rowcount=mysqli_num_rows($result);
	    	if($rowcount > 0 ){	    		
		    	while($row = mysqli_fetch_array($result)){
		    		$rows[0] 				= true;
		    		$rows[1] 				= $row['clubName'];
		    		$_SESSION["clubName"] 	= $row['clubName'];
		    		$_SESSION["clubEmail"] 	= $row['email'];
		    	}
	    	}else{
	    		$rows[0] = false;
	    		$rows[1] = "no Data";
	    	}
	    	echo json_encode($rows);
	    }
	}
	$login = new ClubLogin();
	$login->Login();
?>