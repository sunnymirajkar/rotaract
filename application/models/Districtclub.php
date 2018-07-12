<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Districtclub extends CI_Model{
	public function ReadDistrictClub(){
		$query = $this->db->get('clubdetails');
        return $query->result_array();
	}
}