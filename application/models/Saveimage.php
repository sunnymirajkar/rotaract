<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Saveimage extends CI_Model{
	public function InsertPresidentImage($data = array()){
		$this->db->select('*');
		$this->db->from('districtclubpresidents');
		$query = $this->db->get();
		$cnt = 0;
		if ($query->num_rows() > 0) {
			$dataReturn = $query->result_array();
			for($i=0; $i<count($dataReturn); $i++){				
				if( $dataReturn[$i]['clubName'] ===$data['clubName'] && $dataReturn[$i]['paths'] ===$data['paths'])
				$cnt++;
			}
			if($cnt == 0){
				$insert = $this->db->insert('districtclubpresidents', $data);
		        if($insert){
		            return $this->db->insert_id();
		        }else{
		            return false;
		        }
			}else{
	            $update = $this->db->update('districtclubpresidents', $data, array('clubName'=>$data['clubName']));
	            return $update?true:false;
			}
		} else {
			return FALSE;
		}
	}

	public function InsertSecretaryImage($data = array()){
		$this->db->select('*');
		$this->db->from('districtclubsecretarys');
		$query = $this->db->get();
		$cnt = 0;
		if ($query->num_rows() > 0) {
			$dataReturn = $query->result_array();
			for($i=0; $i<count($dataReturn); $i++){				
				if( $dataReturn[$i]['clubName'] ===$data['clubName'] && $dataReturn[$i]['paths'] ===$data['paths'])
				$cnt++;
			}
			if($cnt == 0){
				$insert = $this->db->insert('districtclubsecretarys', $data);
		        if($insert){
		            return $this->db->insert_id();
		        }else{
		            return false;
		        }
			}else{
	            $update = $this->db->update('districtclubsecretarys', $data, array('clubName'=>$data['clubName']));
	            return $update?true:false;
			}
		} else {
			return FALSE;
		}
	}

	public function InsertGalleryImage($data = array()){
		$this->db->select('*');
		$this->db->from('districtgallery');
		$query = $this->db->get();
		$cnt = 0;
		if ($query->num_rows() > 0) {
			$dataReturn = $query->result_array();
			for($i=0; $i<count($dataReturn); $i++){				
				if($dataReturn[$i]['paths'] ===$data['paths'])
				$cnt++;
			}
			if($cnt == 0){
				$insert = $this->db->insert('districtgallery', $data);
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

	public function ReadGalleryImage(){
		$this->db->select('*');
		$this->db->from('districtgallery');
		$query = $this->db->get();
		$cnt = 0;
		if ($query->num_rows() > 0) {
			return $query->result_array();
		}	
	}

	public function GetPresidentImg($clubName){
		$condition = "clubName =" . "'" . $clubName. "'";
		$this->db->select('*');
		$this->db->from('districtclubpresidents');
		$this->db->where($condition);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return FALSE;
		}
	}

	public function GetSecretaryImg($clubName){
		$condition = "clubName =" . "'" . $clubName. "'";
		$this->db->select('*');
		$this->db->from('districtclubsecretarys');
		$this->db->where($condition);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return FALSE;
		}
	}
}	