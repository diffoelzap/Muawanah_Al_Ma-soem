<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index()
    {
        $data = array('judul' => 'Halaman Utama' ,
                      'isi'  => 'v_home');
        $this->load->view('layout/v_wrapper_user', $data, FALSE);
        
    }

}

/* End of file Controllername.php */
