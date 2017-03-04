<?php

Class Purplebug_model extends CI_MODEL{

	public function add_appointment($data){
		$this->db->insert('tbl_data', $data);
		return ($this->db->affected_rows() == 1) ? TRUE : FALSE;
	}

	public function view_data(){
		$query = $this->db->get('tbl_data');
		return $query->result();
	}
}


?>