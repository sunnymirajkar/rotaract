<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutRotaract extends CI_Controller {

	function __construct()
	{		
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/aboutrotaract');
		$this->load->view('templates/footer');
	}
}
