<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

    public function index()
    {
        $data = array('judul' => 'Halaman Dasboard' ,
                      'isi'  => 'v_dasbor');
        $this->load->view('layout/v_wrapper_karyawan', $data, FALSE);
        
    }

}