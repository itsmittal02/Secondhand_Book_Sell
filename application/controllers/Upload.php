<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('edit_book_image', array('error' => ' ' ));
        }

        public function do_upload()
    {
			   $code=$this->uri->segment(3);
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
			    $config['file_name']           = $code;
               //echo $code;
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('edit_book_image', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                       // $this->load->view('upload_success', $data);
					  // $this->BookSeller->update_record1($data,$code);
					   redirect(base_url()."index.php/Welcome/book_profile/".$code);
                }
    }
}
?>