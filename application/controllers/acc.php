<?php
class Acc extends CI_Controller{
		function __construct(){
		parent::__construct();
		$this->load->model('acc_model');
		$this->load->model('files_model');
  		$this->load->helper(array('url','form'));
		}


    public function index()
    {
    	if(!$this->session->userdata('is_logged_in')){
			echo 'You don\'t have permission. <a href="../login">Login</a>';
			die();
		}
		
        $data['nama_kegiatan'] = $this->acc_model->get_dropdown();
		//$data['files'] = $this->files_model->files();
		//$this->load->view('acc', $data);
		$data['main_content'] = 'acc';
		$this->load->view('includes/template',$data);

    }


	function update_data($nama_kegiatan){
   		if($this->input->post('submit')){
            $this->acc_model->update($nama_kegiatan,$acc);
            //redirect('con_mahasiswa');
     	}
        $data['nama_kegiatan'] = $this->acc_model->getById($nama_kegiatan);
        $data['main_content'] = 'nama_kegiatan';
		redirect('acc');
        $this->load->view('includes/template',$data);
	}
}
?>
