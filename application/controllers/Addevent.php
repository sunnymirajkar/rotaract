<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addevent extends CI_Controller {

	function __construct()
	{		
		parent::__construct();
		$this->load->model('calender');
	}

	public function index()
	{
		if($this->session->userdata['clubData']['logged_in']){
			$this->load->view('templates/header');
			$this->load->view('pages/addevent');
			$this->load->view('templates/footer');
		}else{
		    redirect(base_url());
		}
	}

	public function Addevents(){
		if($this->input->post('type') === 'insert'){
            //form field validation rules
            $this->form_validation->set_rules('title', 'post title', 'required');
            $this->form_validation->set_rules('eventdate', 'post eventdate', 'required');
            $this->form_validation->set_rules('description', 'post description', 'required');
            $this->form_validation->set_rules('clubName', 'post clubName', 'required');
            $postData = array(
                'title' => $this->input->post('title'),
                'eventdate'  => $this->input->post('eventdate'),
                'description'   => $this->input->post('description'),
                'clubName'     => $this->input->post('clubName')
            );
            if($this->form_validation->run() == true){
                $insertReturn = $this->calender->insertEvent($postData);
                if($insertReturn > 0){
                	echo $insertReturn;
		        }else{
                	echo 0;
            	}
            }else{
                echo 0;
            }
        }
	}
}
