<?php
class jadwalrapat_model extends CI_Model{
    
    //ambil data mahasiswa dari database
    function get_rapat_list($limit, $start){
        $query = $this->db->get('rapat', $limit, $start);
        return $query;
    }
} 