<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Districtgallery extends CI_Controller {

	function __construct()
	{		
		parent::__construct();
		$this->load->model('saveimage');
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/districtgallery');
		$this->load->view('templates/footer');
	}

	public function GalleryImg(){
		$insertReturn = $this->saveimage->ReadGalleryImage();
        echo json_encode($insertReturn);
	}
}
