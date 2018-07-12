<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clubaccount extends CI_Controller {

	function __construct()
	{		
		parent::__construct();
		$this->load->model('clubdetails');
	}

	public function index()
	{
		if($this->session->userdata['clubData']['logged_in']){		     
			$this->load->view('templates/header');
			$this->load->view('pages/clubaccount');
			$this->load->view('templates/footer');
		}else{
		    redirect(base_url());
		}
	}

	public function getClubData($clubName){
		$clubRuturn = $this->clubdetails->getClubMemberData(join(" ",explode("_",$clubName)));
		echo json_encode($clubRuturn);
		// echo $clubRuturn;
	}
}
