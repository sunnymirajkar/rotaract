<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Districtclub extends CI_Controller {

	function __construct()
	{		
		parent::__construct();
		$this->load->model('clubdetails');
		$this->load->model('club');
	}

	public function index()
	{
		if($this->session->userdata['clubName']){
			$this->load->view('templates/header');
			$this->load->view('pages/districtclub');
			$this->load->view('templates/footer');
		}else{
			redirect('districtclubs');
		}
	}

	/*public function getclubdata($clubName){
        $data = $this->club->ReadClubData();
        echo json_encode($data);
	}*/

	public function GetClubMemberData(){
		// $this->session->unset_userdata(['clubName']);
		$insertReturn = $this->clubdetails->getClubMemberData($this->input->post('clubName'));
		echo json_encode($insertReturn);
	}

	public function GetClubSocialMedia(){
		$insertReturn = $this->club->GetClubSocialMedia($this->input->post('clubName'));
		echo json_encode($insertReturn);
	}
}