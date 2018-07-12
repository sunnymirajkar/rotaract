<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Districtcouncilmember extends CI_Controller {

	function __construct()
	{		
		parent::__construct();
		$this->load->model('councilmember');
	}

	public function index()
	{
		
		$this->load->view('templates/header');
		$this->load->view('pages/districtcouncilmember');
		$this->load->view('templates/footer');
	}

	public function getcouncildata(){
        $data = $this->councilmember->ReadCouncilMember();
        echo json_encode($data);
	}
}
