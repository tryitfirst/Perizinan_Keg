<?php
class User_model extends CI_Model {
function __construct(){
parent::__construct();
}
// cek keberadaan user di sistem
function check_user_account($email, $password){
$this->db->select('*');
$this->db->from('member');
$this->db->where('email', $email);
$this->db->where('password', $password);
return $this->db->get();
}
// mengambil data user tertentu
function get_user($email){
$this->db->select('*');
$this->db->from('member');
$this->db->where('email', $email);
return $this->db->get();
}
}