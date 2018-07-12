<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Districtclubs extends CI_Controller {

	function __construct()
	{		
		parent::__construct();
		$this->load->model('districtclub');
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/districtclubs');
		$this->load->view('templates/footer');
	}

	public function getdistrictclubdata(){
        $data = $this->districtclub->ReadDistrictClub();
        echo json_encode($data);
	}

	public function FindClubData(){
		$this->session->set_userdata('clubName', $this->input->post('clubName'));
		if($this->session->userdata['clubName']){
			echo 1;
		}
	}
}
