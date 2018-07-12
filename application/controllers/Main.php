<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	function __construct()
	{		
		parent::__construct();
		$this->load->model('calender');
		$this->load->model('getintouch');
	}

	public function index()
	{
		$this->load->view('templates/homeheader');
		$this->load->view('pages/main');
		$this->load->view('templates/footer');
	}

	public function NextEvent(){
		$eventReturn = $this->calender->ReadNextEvent($this->input->post('today'));
		echo json_encode($eventReturn);
	}

	public function getInTouch(){
		if($this->input->post('type') === 'insert'){
            //form field validation rules
            $this->form_validation->set_rules('name', 'post name', 'required');
            $this->form_validation->set_rules('email', 'post email', 'required');
            $this->form_validation->set_rules('subject', 'post subject', 'required');
            $this->form_validation->set_rules('message', 'post message', 'required');
            $postData = array(
                'name' => $this->input->post('name'),
                'email'  => $this->input->post('email'),
                'subject'   => $this->input->post('subject'),
                'message'     => $this->input->post('message')
            );
            if($this->form_validation->run() == true){
                $insertReturn = $this->getintouch->InsertGetInTouch($postData);
                echo json_encode($insertReturn);
                if($insertReturn > 0){
	                $from_email = "rcaundh@rotaract3131.org.in"; 
			        $to_email = $this->input->post('email');
			         //Load email library
			   
			        $this->email->from($from_email, 'DRR'); 
			        $this->email->to($to_email);
			        $this->email->subject('ROTARACT DISTRICT 3131'); 
			        $this->email->message('We will get back to you soon.');
			         //Send mail 
			        if($this->email->send()){		            
	                	echo json_encode($insertReturn);
			        } 
		        }else{
                	echo 0;
            	}
            }else{
                echo 0;
            }
        }       
	}
}
