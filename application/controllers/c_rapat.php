<?php
class c_rapat extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->model('m_rapat');
		$this->load->helper(array('form', 'url'));
		$this->load->model('jadwalrapat_model');
		// $this->load->library('datatables');
		$this->load->library('pagination');
	}

	function index(){
		$data['title'] = "Dashboard";
		// $data['sql'] = $this->m_rapat->rapat();
		$config['base_url'] = site_url('c_rapat/index'); //site url
	    $config['total_rows'] = $this->db->count_all('rapat'); //total row
	    $config['per_page'] = 4;  //show record per halaman
	    $config["uri_segment"] = 3;  // uri parameter
	    $choice = $config["total_rows"] / $config["per_page"];
	    $config["num_links"] = floor($choice);

	    // Membuat Style pagination untuk BootStrap v4
	    $config['first_link']       = 'First';
	    $config['last_link']        = 'Last';
	    $config['next_link']        = 'Next';
	    $config['prev_link']        = 'Prev';
	    $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
	    $config['full_tag_close']   = '</ul></nav></div>';
	    $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	    $config['num_tag_close']    = '</span></li>';
	    $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
	    $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	    $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	    $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	    $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	    $config['prev_tagl_close']  = '</span>Next</li>';
	    $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	    $config['first_tagl_close'] = '</span></li>';
	    $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	    $config['last_tagl_close']  = '</span></li>';

	    $this->pagination->initialize($config);
	    $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
       	$data['sql'] = $this->jadwalrapat_model->get_rapat_list($config["per_page"], $data['page']);
       	$data['pagination'] = $this->pagination->create_links();
		if(isset($_SESSION['udhmasuk'])){
			$this->load->view('admin', $data);
		}
		else{
			redirect('c_login/index');
		}
	}

	function rapat_k(){
		$data['title'] = "Rapat Koordinasi";
		$data['sql'] = $this->m_rapat->rapat_k();
		$data['pagination'] = $this->pagination->create_links();
		if(isset($_SESSION['udhmasuk'])){
			$this->load->view('admin', $data);
		}
		else{
			redirect('c_login/index');
		}
	}

	function rapat_nr(){
		$data['title'] = "Rapat Non Rutin";
		$data['sql'] = $this->m_rapat->rapat_nr();
		$data['pagination'] = $this->pagination->create_links();
		if(isset($_SESSION['udhmasuk'])){
			$this->load->view('admin', $data);
		}
		else{
			redirect('c_login/index');
		}
	}

	function user(){
		$data['title'] = "Dashboard";
		// $data['sql'] = $this->m_rapat->rapat();
		$config['base_url'] = site_url('c_rapat/user'); //site url
	    $config['total_rows'] = $this->db->count_all('rapat'); //total row
	    $config['per_page'] = 4;  //show record per halaman
	    $config["uri_segment"] = 3;  // uri parameter
	    $choice = $config["total_rows"] / $config["per_page"];
	    $config["num_links"] = floor($choice);

	    // Membuat Style pagination untuk BootStrap v4
	    $config['first_link']       = 'First';
	    $config['last_link']        = 'Last';
	    $config['next_link']        = 'Next';
	    $config['prev_link']        = 'Prev';
	    $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
	    $config['full_tag_close']   = '</ul></nav></div>';
	    $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	    $config['num_tag_close']    = '</span></li>';
	    $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
	    $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	    $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	    $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	    $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	    $config['prev_tagl_close']  = '</span>Next</li>';
	    $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	    $config['first_tagl_close'] = '</span></li>';
	    $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	    $config['last_tagl_close']  = '</span></li>';

	    $this->pagination->initialize($config);
	    $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
       	$data['sql'] = $this->jadwalrapat_model->get_rapat_list($config["per_page"], $data['page']);
       	$data['pagination'] = $this->pagination->create_links();
		if(isset($_SESSION['udhmasuk'])){
			$this->load->view('user', $data);
		}
		else{
			redirect('c_login/index');
		}
	}

	function rapat_k_user(){
		$data['title'] = "Rapat Koordinasi";
		$data['sql'] = $this->m_rapat->rapat_k();
		$data['pagination'] = $this->pagination->create_links();
		if(isset($_SESSION['udhmasuk'])){
			$this->load->view('user', $data);
		}
		else{
			redirect('c_login/index');
		}
	}

	function rapat_nr_user(){
		$data['title'] = "Rapat Non Rutin";
		$data['sql'] = $this->m_rapat->rapat_nr();
		if(isset($_SESSION['udhmasuk'])){
			$this->load->view('user', $data);
		}
		else{
			redirect('c_login/index');
		}
	}

	function add() {
		if(isset($_SESSION['udhmasuk'])){
			$this->load->view('form');
		}
		else{
			redirect('c_login/index');
		}	
	}

	function edit($id) {
		$data['sql'] = $this->m_rapat->edit($id);
		if(isset($_SESSION['udhmasuk'])){
			$this->load->view('form_edit',$data);
		}
		else{
			redirect('c_login/index');
		}	
	}

	function upload_rispat($id) {
		$data['error'] = '';
		$data['sql'] = $this->m_rapat->edit($id);
		if(isset($_SESSION['udhmasuk'])){
			$this->load->view('form_upload_rispat',$data);
		}
		else{
			redirect('c_login/index');
		}	
	}

	function upload_daftarhadir($id) {
		$data['error'] = '';
		$data['sql'] = $this->m_rapat->edit($id);
		if(isset($_SESSION['udhmasuk'])){
			$this->load->view('form_upload_daftarhadir',$data);
		}
		else{
			redirect('c_login/index');
		}	
	}

	public function simpan(){
		$id = $this->input->post('id');
		$tanggal = $this->input->post('tanggal');
        $nomer_rispat = $this->input->post('nomer_rispat');
        $agenda = $this->input->post('agenda');
        $jam = $this->input->post('jam');
        $presenter = $this->input->post('presenter');
        $undangan = implode(", ", $this->input->post('undangan'));
        $status = $this->input->post('status');
        $keterangan = $this->input->post('keterangan');
        $rispat = $this->input->post('rispat');
        $daftar_hadir = $this->input->post('daftar_hadir');
        $rapat = $this->input->post('rapat');
		$data = array(
			'tanggal' => $tanggal,
			'nomer_rispat' => $nomer_rispat,
			'agenda' => $agenda,
			'jam' => $jam,
			'presenter' => $presenter,
			'undangan' => $undangan,
			'status' => $status,
			'keterangan' => $keterangan,
			// 'rispat' => $rispat,
			// 'daftar_hadir' => $daftar_hadir,
			'rapat' => $rapat
			);
		$this->m_rapat->simpan($data);
		redirect('c_rapat');
	}

	public function simpan_edit(){
		$id = $this->input->post('id');
		$tanggal = $this->input->post('tanggal');
        $nomer_rispat = $this->input->post('nomer_rispat');
        $agenda = $this->input->post('agenda');
        $jam = $this->input->post('jam');
        $presenter = $this->input->post('presenter');
        $undangan = implode(", ", $this->input->post('undangan'));
        $status = $this->input->post('status');
        $keterangan = $this->input->post('keterangan');
        $rispat = $this->input->post('rispat');
        $daftar_hadir = $this->input->post('daftar_hadir');
        $rapat = $this->input->post('rapat');
		$data = array(
			'tanggal' => $tanggal,
			'nomer_rispat' => $nomer_rispat,
			'agenda' => $agenda,
			'jam' => $jam,
			'presenter' => $presenter,
			'undangan' => $undangan,
			'status' => $status,
			'keterangan' => $keterangan,
			'rispat' => $rispat,
			'daftar_hadir' => $daftar_hadir,
			);
		$this->m_rapat->update($id,$data);
		redirect('c_rapat');
	}

	public function do_upload_rispat(){
		$nama = @$_POST['id'];
        $config['upload_path']          = './uploads/rispat/';
        $config['allowed_types']        = 'pdf|jpg';
        $config['file_name']			= $nama;
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('rispat')){
            $error['sql'] = $this->m_rapat->edit($id);
            $error = array('error' => $this->upload->display_errors());
			$this->load->view('form_upload_rispat', $error);
        }
        else{
            $data = array('upload_data' => $this->upload->data());
			$this->load->view('upload_succes', $data);
        }
    }

    public function do_upload_daftarhadir(){
    	$nama = @$_POST['id'];
        $config['upload_path']          = './uploads/daftar_hadir/';
        $config['allowed_types']        = 'pdf|jpg';
        $config['file_name']			= $nama;
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('daftar_hadir')){
            $error['sql'] = $this->m_rapat->edit($id);
            $error = array('error' => $this->upload->display_errors());
			$this->load->view('form_upload_daftarhadir', $error);
        }
        else{
            $data = array('upload_data' => $this->upload->data());
			$this->load->view('upload_succes', $data);
        }
    }


	public function hapus($id){
		$this->m_rapat->hapus($id);
		redirect('c_rapat');
	}

	function search_keyword(){
        $agenda = $this->input->post('keyword');
        if(isset($agenda) and !empty($agenda)){
        	$data['sql'] = $this->m_rapat->search_keyword($agenda);
        	$this->load->view('admin' , $data);
        }
        else{
        	redirect('c_rapat');
        }
    }

    function search_date(){
        $date1 = $this->input->post('date1'); //YYYY-MM-DD
        $date2 = $this->input->post('date2');
        if($date1 == "" || $date2 == ""){
        	$data['sql'] = $this->m_rapat->rapat();
        }
        else{
        	$data['sql'] = $this->m_rapat->search($date1,$date2);
        }
        $data['title'] = "Dashboard";
        $this->load->view('admin',$data);
    }

}