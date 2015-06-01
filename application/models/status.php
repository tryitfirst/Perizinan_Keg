<?php
    class Status extends CI_Model
    {
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

