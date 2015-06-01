<?php

class Membership_model extends CI_Model{
	
	function validate($email,$password){
		//$this->db->where('email', $email);
		//$this->db->where('password', sha1($password));
		$pass_temp = md5($password);
		//echo $email.' '.$password.' '.$pass_temp;
		//$query = $this->db->get('member');
		$query = $this->db->query("SELECT * FROM member WHERE email = '$email' AND password = '$pass_temp'");
		
		if($query->num_rows()== 1){
			return $query->row()->email;
		}
		else 
		{
			return false;
		}
	}
	
	function create_member(){
		$new_member_insert_data = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'no_telp' => $this->input->post('no_telp'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
		);
		
		$insert = $this->db->insert('member', $new_member_insert_data);
		return $insert;
	}
	function get_user ($email, $password){
		$pass_tmp = md5($password);
		$q = $this->db->query("SELECT nama,alamat FROM member WHERE email = '$email' AND password = '$pass_tmp'");
		return $q->result();
	}
}
?>