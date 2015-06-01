<?php
class Mycal extends CI_Controller{
	
	function index()
	{
		$data['main_content'] = 'mycal';
		$this->load->view('includes/template',$data);
	}
	
	function display($year = null, $month = null){
		if($year==null || $month==null)
		{
			$year = date("Y");
			$month = date("m");
		}
		$this->load->model('Mycal_model');
		$data['calendar'] = $this->Mycal_model->generate($year, $month);
		$data['main_content'] = 'mycal';
		$this->load->view('includes/template',$data);
		
	}
}

?>