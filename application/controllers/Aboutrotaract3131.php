<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutrotaract3131 extends CI_Controller {

	function __construct()
	{		
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/aboutrotaract3131');
		$this->load->view('templates/footer');
	}
}
