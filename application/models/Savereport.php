<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Savereport extends CI_Model{
	
	public function GetClubZoneNo($clubName){
		$condition = "clubName =" . "'" . $clubName. "'";
		$this->db->select('zoneNo');
		$this->db->from('clubdetails');
		$this->db->where($condition);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return FALSE;
		}
	}

	public function SaveServiceReport($data = array()){
		$count = 0;
		for ($i=0; $i < count($data); $i++) { 
			$insert = $this->db->insert('monthlyreport', $data[$i]);
	        if($insert){
	            $count++;
	        }else{
	            $count = 0;
	        }
		}
		if ($count > 0) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function SaveGBMMeetimg($data = array()){
		$count = 0;
		for ($i=0; $i < count($data); $i++) { 
			$insert = $this->db->insert('gbmmeetings', $data[$i]);
	        if($insert){
	            $count++;
	        }else{
	            $count = 0;
	        }
		}
		if ($count > 0) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function SaveBODMeetimg($data = array()){
		$count = 0;
		for ($i=0; $i < count($data); $i++) { 
			$insert = $this->db->insert('bodmeeting', $data[$i]);
	        if($insert){
	            $count++;
	        }else{
	            $count = 0;
	        }
		}
		if ($count > 0) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function SaveClubDues($data = array()){
		$insert = $this->db->insert('clubsdues', $data);
        if($insert){
            return TRUE;
        }else{
            return FALSE;
        }
	}

	public function SaveClubMember($data = array()){
		$insert = $this->db->insert('clubmember', $data);
        if($insert){
            return TRUE;
        }else{
            return FALSE;
        }
	}

	public function SaveBulletin($data = array()){
		$insert = $this->db->insert('clubsbulletin', $data);
        if($insert){
            return TRUE;
        }else{
            return FALSE;
        }
	}
}