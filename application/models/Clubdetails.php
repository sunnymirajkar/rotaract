<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Clubdetails extends CI_Model{
	public function getClubMemberData($clubName){
		$condition = "clubName =" . "'" . $clubName. "'";
		$this->db->select('*');
		$this->db->from('districtclubmembers');
		$this->db->where($condition);
		$this->db->order_by("priority", "asc");
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return FALSE;
		}
	}

	public function insertClubMemberData($data = array()){
		$this->db->select('*');
		$this->db->from('districtclubmembers');
		$query = $this->db->get();
		$cnt = 0;
		if ($query->num_rows() > 0) {
			$dataReturn = $query->result_array();
			for($i=0; $i<count($dataReturn); $i++){				
				if( $dataReturn[$i]['Name'] ===$data['Name'] && $dataReturn[$i]['contact'] ===$data['contact'] && 
					$dataReturn[$i]['email'] ===$data['email'] && $dataReturn[$i]['clubName'] ===$data['clubName'])
				$cnt++;
			}
			if($cnt == 0){
				$insert = $this->db->insert('districtclubmembers', $data);
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

	public function MemberData($id = ''){
		$condition = "id =" . "'" . $id. "'";
		$this->db->select('*');
		$this->db->from('districtclubmembers');
		$this->db->where($condition);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return FALSE;
		}
	}

	public function UpdateMember($data, $id){
		if(!empty($data) && !empty($id)){
            $update = $this->db->update('districtclubmembers', $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
	}

	public function DeleteMember($id){
		$delete = $this->db->delete('districtclubmembers',array('id'=>$id));
        return $delete?true:false;
	}
}