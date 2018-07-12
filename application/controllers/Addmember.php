<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addmember extends CI_Controller {

	function __construct()
	{		
		parent::__construct();
        $this->load->model('clubdetails');
	}

	public function index()
	{  
		if($this->session->userdata['clubData']['logged_in']){
			$this->load->view('templates/header');
			$this->load->view('pages/addmember');
			$this->load->view('templates/footer');
		}else{
		    redirect(base_url());
		}
	}

    public function Addmember(){
        if($this->input->post('type') === 'insert'){
            $this->form_validation->set_rules('Name', 'post Name', 'required');
            $this->form_validation->set_rules('contact', 'post contact', 'required');
            $this->form_validation->set_rules('email', 'post email', 'required');
            $this->form_validation->set_rules('username', 'post username', 'required');
            $this->form_validation->set_rules('bloodGroup', 'post bloodGroup', 'required');
            $this->form_validation->set_rules('clubName', 'post clubName', 'required');
            $this->form_validation->set_rules('designation', 'post designation', 'required');
            $this->form_validation->set_rules('zone', 'post zone', 'required');
            $this->form_validation->set_rules('clubName', 'post clubName', 'required');
            $postData = array(
                'Name' => $this->input->post('Name'),
                'contact'  => $this->input->post('contact'),
                'email'    => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'bloodGroup' => $this->input->post('bloodGroup'),
                'clubName' => $this->input->post('clubName'),
                'designation' => $this->input->post('designation'),
                'zone' => $this->input->post('zone'),
                'priority' => $this->input->post('priority')
            );
            if($this->form_validation->run() == true){
                $insertReturn = $this->clubdetails->insertClubMemberData($postData);
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

    public function FindMemberData(){
        
        $insertReturn = $this->clubdetails->MemberData($this->input->post('memberId'));
        echo json_encode($insertReturn);
        $this->session->set_userdata('memberData', $insertReturn[0]);
        // echo $insertReturn;
    }

    public function UpdateMemberData(){
        if($this->input->post('type') === 'update'){
            $this->form_validation->set_rules('id', 'post id', 'required');
            $this->form_validation->set_rules('Name', 'post Name', 'required');
            $this->form_validation->set_rules('contact', 'post contact', 'required');
            $this->form_validation->set_rules('email', 'post email', 'required');
            $this->form_validation->set_rules('username', 'post username', 'required');
            $this->form_validation->set_rules('bloodGroup', 'post bloodGroup', 'required');
            $this->form_validation->set_rules('clubName', 'post clubName', 'required');
            $this->form_validation->set_rules('designation', 'post designation', 'required');
            $this->form_validation->set_rules('zone', 'post zone', 'required');
            $this->form_validation->set_rules('clubName', 'post clubName', 'required');
            $id         = $this->input->post('id');
            $postData   = array(
                'Name'          => $this->input->post('Name'),
                'contact'       => $this->input->post('contact'),
                'email'         => $this->input->post('email'),
                'username'      => $this->input->post('username'),
                'bloodGroup'    => $this->input->post('bloodGroup'),
                'clubName'      => $this->input->post('clubName'),
                'designation'   => $this->input->post('designation'),
                'zone'          => $this->input->post('zone'),
                'priority'      => $this->input->post('priority')
            );
            if($this->form_validation->run() == true){
                $insertReturn = $this->clubdetails->UpdateMember($postData, $id);
                if($insertReturn){
                    $this->session->unset_userdata('memberData');
                    echo $insertReturn;
                }else{
                    echo 0;
                }
            }else{
                echo 0;
            }
        }
    }

    public function DeleteMemberData(){
        if($this->input->post('memberId')){
            $deleteReturn = $this->clubdetails->DeleteMember($this->input->post('memberId'));
            if($deleteReturn){
                echo $deleteReturn;
            }else {
                echo $deleteReturn;
            }
        }
    }
}
