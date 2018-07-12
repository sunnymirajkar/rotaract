<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Districtcalender extends CI_Controller {

	function __construct()
	{		
		parent::__construct();
		$this->load->model('calender');
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/districtcalender');
		$this->load->view('templates/footer');
	}

	public function GetDistrictCalender(){
		$eventReturn = $this->calender->ReadDistrictCalender();
		echo json_encode($eventReturn);
	}
}