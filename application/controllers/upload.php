<?php
class Upload extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('files_model');
        $this->load->database();
        $this->load->helper('url');
    }
 
    public function index()
    {
		$data['main_content'] = 'upload';
        $this->load->view('includes/template',$data);
    }
	
	public function do_upload()
        {
                $config['upload_path']          = './files/';
                $config['allowed_types']        = 'gif|jpg|pdf';
                $config['max_size']             = 10000;
                //$config['max_width']            = 1024;
                //$config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
						
                        //$data = array('upload_data' => $this->upload->data());
						$data = $this->upload->data();
						$this->files_model->insert_file($data['file_name'], $this->input->post('nama_kegiatan'),$this->session->userdata('email'),$this->input->post('dana'),$this->input->post('tanggal_kegiatan'));
						$data['main_content'] = 'upload_success';
						$this->load->view('includes/template',$data);
                }
        }
	/*
	public function upload_file()
{
    $status = "";
    $msg = "";
    $file_element_name = 'userfile';
    $title = $this->input->post('title');
    if (empty($title))
    {
        $status = "error";
        $msg = "Please enter a title";
    }
     
    if ($status != "error")
    {
        $config['upload_path'] = './files/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = 1024 * 8;
        //$config['encrypt_name'] = TRUE;
 
        $this->load->library('upload', $config);
 
        if (!$this->upload->do_upload())
        {
            $status = 'error';
            //$msg = $this->upload->display_errors('', '');
			$msg = 'aaa';
		}
        else
        {
            $data = $this->upload->data();
            $file_id = $this->files_model->insert_file($data['file_name'],$title);
            if($file_id)
            {
                $status = "success";
                $msg = "File successfully uploaded";
            }
            else
            {
                unlink($data['full_path']);
                $status = "error";
                $msg = "Something went wrong when saving the file, please try again.";
            }
        }
        @unlink($_FILES[$file_element_name]);
    }
    echo json_encode(array('status' => $status, 'msg' => $msg));
}
*/

public function files()
{
	if(!$this->session->userdata('is_logged_in')){
			redirect('login');
	}
	//$this->load->model['files_model'];
    $data['files']= $this->files_model->files();
	$data['main_content'] = 'files';
	//$this->load->view('files', $data);
    $this->load->view('includes/template',$data);
}
/*
public function filespakdwi()
{
	//$this->load->model['files_model'];
    $files['files']= $this->files_model->get_filespakdwi();
	$data['main_content'] = 'files';
	//$this->load->view('files', $data);
    $this->load->view('includes/template',$data);
}
public function filesbunanik()
{
	//$this->load->model['files_model'];
    $files['files'] = $this->files_model->get_filesbunanik();
    $data['main_content'] = 'files';
	//$this->load->view('files', $data);
    $this->load->view('includes/template',$data);
}
*/

function status()
{
    $this->load->model("files_model");
    $data['records'] = $this->files_model->getAllRecords();
    $data['main_content'] = 'status';
    $this->load->view('includes/template',$data);
}

} 	


?>