<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Getintouch extends CI_Model{
	public function InsertGetInTouch($data = array()){
		$insert = $this->db->insert('getintouch', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
	}
}	