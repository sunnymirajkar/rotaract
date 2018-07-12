<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Calender extends CI_Model{
	public function ReadDistrictCalender(){
		$this->db->select('*');
		$this->db->from('districtevents');
		$this->db->distinct('description');
		$this->db->order_by("eventdate", "DESC");
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return FALSE;
		}
	}

	public function ReadNextEvent($today){
		$condition = "eventdate >=" . "'" . $today. "'";
		$this->db->select('*');
		$this->db->from('districtevents');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return FALSE;
		}
	}

	public function insertEvent($data = array()){
		$this->db->select('*');
		$this->db->from('districtevents');
		$query = $this->db->get();
		$cnt = 0;
		if ($query->num_rows() > 0) {
			$dataReturn = $query->result_array();
			for($i=0; $i<count($dataReturn); $i++){				
				if( $dataReturn[$i]['title'] ===$data['title'] && $dataReturn[$i]['description'] ===$data['description'] && 
					$dataReturn[$i]['eventdate'] ===$data['eventdate'] && $dataReturn[$i]['clubName'] ===$data['clubName'])
				$cnt++;
			}
			if($cnt == 0){
				$insert = $this->db->insert('districtevents', $data);
		        if($insert){
		            return $this->db->insert_id();
		        }else{
		            return false;
		        }
			}
		} else {
			return FALSE;
		}		
	}
}