<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Model{
	public function LoginClub($data){
		$condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
		$this->db->select('*');
		$this->db->from('clubdetails');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
		return $query->row_array();
		} else {
		return false;
		}
	}
}