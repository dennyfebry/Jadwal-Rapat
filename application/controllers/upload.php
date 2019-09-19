<?php

class Upload extends CI_Controller {

        public function __construct(){
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function do_upload($id){
                $config['upload_path']          = './uploads/rispat/';
                $config['allowed_types']        = 'pdf|jpg';
                // $config['max_size']             = 100;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('rispat')){
                        $error['sql'] = $this->m_rapat->edit($id);
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('form_upload', $error);
                }
                else{
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('upload_succes', $data);
                }
        }
}
?>