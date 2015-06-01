<?php

class Site extends CI_Controller{
  function __construct(){
    parent::__construct();
    
    if(!$this->session->userdata('is_logged_in'))
    {
      echo 'You don\'t have permission. <a href="./login">Login</a>';
      die();
    }
  }
  function index(){
    $this->load->model('membership_model');
    $data['user'] =  $this->membership_model->get_user($this->session->userdata('email'),$this->session->userdata('password'));
    $this->load->view('member_area');
    $data['main_content'] = 'member_area';
    $this->load->view('includes/template',$data);
  }
  
}
?>