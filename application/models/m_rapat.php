<?php
class m_rapat extends CI_Model {

	public function rapat() {
		$sql = $this->db->query("SELECT * FROM rapat");
		return $sql;
		// $sql=$this->db->get('rapat');
  //   	return $sql;
	}

	// function all_rapat() {
 //        $this->datatables->select('tanggal,nomer_rispat,agenda,jam,presenter,undangan,status,keterangan,rispat,daftar_hadir');
 //        $this->datatables->from('rapat');
 //        $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-kode="$1" data-nama="$2" data-harga="$3" data-kategori="$4">Edit</a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-kode="$1">Hapus</a>','tanggal,nomer_rispat,agenda,jam,presenter,undangan,status,keterangan,rispat,daftar_hadir');
 //        return $this->datatables->generate();
 //  }

	public function rapat_k() {
		$this->db->where("rapat");
		$sql = $this->db->query("SELECT * FROM rapat WHERE rapat = 'k';");
		return $sql;
	}

	public function rapat_nr() {
		$this->db->where("rapat");
		$sql = $this->db->query("SELECT * FROM rapat WHERE rapat = 'nr';");
		return $sql;
	}

	function simpan($data){
		$this->db->insert('rapat',$data);
	}

	function hapus($id){
		$this->db->where("id",$id);
		$this->db->delete('rapat');
	}

	function edit($id){
		$this->db->where("id",$id);
		return $this->db->get('rapat');
	}

	function update($id,$data){
		$this->db->where("id",$id);
		$this->db->update('rapat',$data);
	}

    function search_keyword($agenda){
        $this->db->select('');
        $this->db->from('rapat');
        $this->db->like('agenda',$agenda);
        $query = $this->db->get();
        if($query->num_rows() > 0){
        	return $query->result();
        } 
        else{
        	return $query->result();
        }
    }

    function search($date1,$date2){
		$this->db->where('tanggal',$date1);
		$this->db->where('tanggal',$date2);
        $sql = $this->db->query("SELECT * FROM rapat WHERE tanggal between '$date1' and '$date2' ");
        return $sql;
    }
}