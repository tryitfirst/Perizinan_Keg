<?php

class Login extends CI_Controller {

	function index()
	{
		if($this->session->userdata('is_logged_in')){
			redirect('upload/files');
		}
		$data['main_content'] = 'login_form';
		$this->load->view('includes/template',$data);
	}
	
	function validate_credential() {
		$this->load->model('membership_model');
		//$query = $this->membership_model->validate($this->input->post('email'),$this->input->post('password'));
		//echo $this->input->post('email').' '. $this->input->post('password');
		if($email = $this->membership_model->validate($this->input->post('email'),$this->input->post('password'))) { // if user's credentials validated...
			
			$data = array (
				'email'    => $this->input->post('email'),
				'is_logged_in'  => TRUE,
				'email'	=> $email
			);
      
			$this->session->set_userdata($data);
			if($this->session->userdata('email') != 'raditiyo@gmail.com' and $this->session->userdata('email') != 'dwis@gmail.com' and $this->session->userdata('email') != 'naniks@gmail.com' ){
				redirect('upload/status');
			}
			else{
			redirect('upload/files');
			}

		} 
		else {
			//$this->index();
			$data['error'] = 'Invalid email or Password';
			$data['main_content'] = 'login_form';
			$this->load->view('includes/template', $data);
		}
		
		}
		function logout()
	{
		$this->session->sess_destroy();
		$this->index();
		redirect('login');
	}
	
	function signup(){
		$data['main_content'] = 'signup_form';
		$this->load->view('includes/template',$data);
	}
	
	function create_member(){
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('nama','Nama Anda','trim|required');
		$this->form_validation->set_rules('category','Dosen/Mahasiswa','trim|required');
		$this->form_validation->set_rules('alamat','Alamat Anda','trim|required');
		$this->form_validation->set_rules('no_telp','Nomor Telfon/Handphone Anda','trim|required');
		
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password2','Konfirmasi Password','trim|required|matches[password]');
		
		if ($this->form_validation->run()==FALSE){
			$this->signup();
		}
		else {
			$this->load->model('membership_model');
			if($query = $this->membership_model->create_member()){
					$data['main_content'] = 'signup_successful';
					$this->load->view('includes/template',$data);
			}
			else{
				$this->load->view('signup_form');
			}
		}
	}
	
	function show_data(){
		
	}
}