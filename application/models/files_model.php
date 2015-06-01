<?php
class Files_Model extends CI_Model {
 

	
	public function insert_file ($filename, $nama_kegiatan, $email, $dana, $tanggal_kegiatan)
    {
        $data = array(
            'filename'      => $filename,
            'nama_kegiatan'         => $nama_kegiatan,
            'email'         => $email,
            'dana'         => $dana,
            'tanggal_kegiatan'         => $tanggal_kegiatan,
        );
        $this->db->set('email',$this->session->userdata('email'));
        $this->db->set('tanggal_upload', 'NOW()', FALSE);
        $this->db->insert('files', $data);
        return $this->db->insert_id();
    }

public function files()
{
	$where1 = "acc = 1";
	$where2 = "dana = 1 AND acc = 2";
	$where3 = "(dana = 1 AND acc = 3) OR (dana = 0 AND acc = 3)";
	$where4 = $this->session->userdata('email');
	if($this->session->userdata('email') == 'raditiyo@gmail.com'){
		$query = $this->db->get_where('files',$where1);
		return $query;
	}
	else if($this->session->userdata('email') == 'dwis@gmail.com'){
		$query = $this->db->get_where('files',$where2);
		return $query;
	}
	else if($this->session->userdata('email') == 'naniks@gmail.com'){
		$query = $this->db->get_where('files',$where3);
		return $query;
	}
	else{
		$this->db->where('email', $where4);
		$query = $this->db->get('files');
		return $query;
	}
}

public function delete_file($file_id)
{
    $file = $this->get_file($file_id);
    if (!$this->db->where('id', $file_id)->delete('files'))
    {
        return FALSE;
    }
    unlink('./files/' . $file->filename);    
    return TRUE;
}
 
public function get_file($file_id)
{
    return $this->db->select()
            ->from('files')
            ->where('id', $file_id)
            ->get()
            ->row();
}

function getAllRecords()
        {
           // $this->load->library("database");
            $where= $this->session->userdata('email') ;
            $this->db->where('email', $where);
            $q = $this->db->get('files');
            
            if($q->num_rows() > 0)
            {
                return $q->result();
            }
            return array();
        }
}

?>