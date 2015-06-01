<?php
class Acc_model extends CI_Model{
// Function To Fetch All Students Record


function get_dropdown()
	{
		
		$where1 = "acc = 1";
		$where2 = "dana = 1 AND acc = 2";
		$where3 = "(dana = 1 AND acc = 3) OR (dana = 0 AND acc = 3)";
		$where4 = $this->session->userdata('email');
			if($this->session->userdata('email') == 'raditiyo@gmail.com'){
				$result = $this->db->select('nama_kegiatan,dana,nama_kegiatan')->get_where('files',$where1)->result_array();
				$nama_kegiatan = array();
				foreach($result as $r) {
					$nama_kegiatan[$r['nama_kegiatan']] = $r['nama_kegiatan'];
				}
				return $nama_kegiatan;
			//$query = $this->db->get_where('files',$where1);
			//return $query;
			}
			else if($this->session->userdata('email') == 'dwis@gmail.com'){
				$result = $this->db->select('nama_kegiatan')->get_where('files',$where2)->result_array();
				$nama_kegiatan = array();
				foreach($result as $r) {
					$nama_kegiatan[$r['nama_kegiatan']] = $r['nama_kegiatan'];
				}
				return $nama_kegiatan;
				//$query = $this->db->get_where('files',$where2);
				//return $query;
			}
			else if($this->session->userdata('email') == 'naniks@gmail.com'){
				$result = $this->db->select('nama_kegiatan')->get_where('files',$where3)->result_array();
				$nama_kegiatan = array();
				foreach($result as $r) {
					$nama_kegiatan[$r['nama_kegiatan']] = $r['nama_kegiatan'];
				}
				return $nama_kegiatan;
				//$query = $this->db->get_where('files',$where3);
				//return $query;
			}
			else{
				$this->db->where('email', $where4);
				$result = $this->db->select('nama_kegiatan')->get_where('files',$where4)->result_array();
			$nama_kegiatan = array();
			foreach($result as $r) {
			$nama_kegiatan[$r['nama_kegiatan']] = $r['nama_kegiatan'];
			}
			return $nama_kegiatan;
				//$query = $this->db->get('files', $where4);
				//return $query;
			}
			 

	}
	
		function update($nama_kegiatan, $acc, $catatan){ 
		    $nama_kegiatan=$this->input->post('nama_kegiatan');   
		    $acc=$this->input->post('acc');  
		    $catatan1=$this->input->post('catatan1'); 
		    $catatan2=$this->input->post('catatan2'); 
		    $catatan3=$this->input->post('catatan3'); 
		  
		    $data=array(
		        'nama_kegiatan'=>$nama_kegiatan, 
		        'acc'=>$acc,
		        'catatan1'=>$catatan1,
		        'catatan2'=>$catatan2,
		        'catatan3'=>$catatan3,
		    );
		    $this->db->where('nama_kegiatan',$nama_kegiatan); 
		    $this->db->update('files',$data); 
		}
 
		function getById($nama_kegiatan){ 
   		 return $this->db->get_where('files',array('nama_kegiatan'=>$nama_kegiatan))->row(); 
		}
}
?>