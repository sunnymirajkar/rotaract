<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Councilmember extends CI_Model{
	public function ReadCouncilMember(){
		$query = $this->db->get('councilmember');
        return $query->result_array();
	}
}