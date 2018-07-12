<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Club extends CI_Model{
	

	public function GetClubSocialMedia($clubName){
		$condition = "clubName =" . "'" . $clubName. "'";
		$this->db->select('facebookLink, instagramLink');
		$this->db->from('clubdetails');
		$this->db->where($condition);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return FALSE;
		}
	}

}