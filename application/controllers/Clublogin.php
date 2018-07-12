<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clublogin extends CI_Controller {

	function __construct()
	{		
		parent::__construct();
		$this->load->model('login');
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/clublogin');
		$this->load->view('templates/footer');
	}

	public function ClubLogin(){		
            $this->form_validation->set_rules('userName', 'post userName', 'required');
            $this->form_validation->set_rules('password', 'post password', 'required');
		$postData = array(
            'username' => $this->input->post('userName'),
            'password'  => $this->input->post('password')
        );
        if($this->form_validation->run() == true){
            $loginReturn = $this->login->LoginClub($postData);
			if($loginReturn){
				
				$newdata = array(
				    'clubName'  => $loginReturn['clubName'],
				    'email'     => $loginReturn['email'],
				    'logged_in' => TRUE,
				    'url' 		=> 'clubaccount'
				);
				echo json_encode($newdata);
				$this->session->set_userdata('clubData', $newdata);
            }else{
            	// redirect(base_url());
            	$newdata = array(
				    'logged_in' => FALSE,
				    'url' => base_url()
				);                
				echo json_encode($newdata);
            }
        }else{
        	$newdata = array(
			    'logged_in' => FALSE,
			    'url' => base_url()
			);                
			echo json_encode($newdata);
        }
	}
}