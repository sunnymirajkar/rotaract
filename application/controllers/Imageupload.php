<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imageupload extends CI_Controller {

	function __construct()
	{		
		parent::__construct();
		$this->load->model('saveimage');
	}

	public function index()
	{

	}

	public function PresidentImgUpload(){
		$insert 						= array();
		$config['upload_path']          = './img/president';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name'] 			= $this->input->post('clubName')."_PRESIDENT";
        $config['file_ext_tolower']     = TRUE;
        $config['overwrite']        	= TRUE;
        $config['max_size']             = 4000;
        $config['max_width']            = 0;
        $config['max_height']           = 0;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('presidentImg'))
        {
            $error = array('error' => $this->upload->display_errors());
        }
        else
        {
            $insert = $this->upload->data();
        } 
        $postData = array(
            'clubName'     => join(" ",explode("_", $this->input->post('clubName'))),
            'paths' 	   => $insert["full_path"]
        );
        $insertReturn = $this->saveimage->InsertPresidentImage($postData);
        echo $insertReturn;
	}

	public function SecretaryImgUpload(){
		$insert 						= array();
		$config['upload_path']          = './img/secretary';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name'] 			= $this->input->post('clubName')."_SECRETARY";
        $config['file_ext_tolower']     = TRUE;
        $config['overwrite']        	= TRUE;
        $config['max_size']             = 4000;
        $config['max_width']            = 0;
        $config['max_height']           = 0;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('secretaryImg'))
        {
            $error = array('error' => $this->upload->display_errors());
        }
        else
        {
            $insert = $this->upload->data();
        } 
        $postData = array(
            'clubName'     => join(" ",explode("_", $this->input->post('clubName'))),
            'paths' 	   => $insert["full_path"]
        );
        $insertReturn = $this->saveimage->InsertSecretaryImage($postData);
        echo $insertReturn;
	}

	public function GalleryImgUpload(){
		$insert 						= array();
		$config['upload_path']          = './img/gallery';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_ext_tolower']     = TRUE;
        $config['overwrite']        	= TRUE;
        $config['max_size']             = 4000;
        $config['max_width']            = 0;
        $config['max_height']           = 0;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('galleryImg'))
        {
            $error = array('error' => $this->upload->display_errors());
        }
        else
        {
            $insert = $this->upload->data();
        } 
        $postData = array(
            'clubName'     => join(" ",explode("_", $this->input->post('clubName'))),
            'paths' 	   => $insert["full_path"]
        );
        $insertReturn = $this->saveimage->InsertGalleryImage($postData);
        echo $insertReturn;
	}

    public function ReadPresidentImg(){
        $insertReturn = $this->saveimage->GetPresidentImg($this->input->post('clubName'));
        echo json_encode($insertReturn);
    }

    public function ReadSecretaryImg(){
        $insertReturn = $this->saveimage->GetSecretaryImg($this->input->post('clubName'));
        echo json_encode($insertReturn);
    }
}