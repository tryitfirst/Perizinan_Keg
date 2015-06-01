<?php
	public function get_user_info($id){         
		$this->db->where('id' , $id);
        $q = $this->db->get('users');
        if ($q->num_rows >0) {
			return $q->result();
        } 
		else {             
		return false;
         }     
	}
?>