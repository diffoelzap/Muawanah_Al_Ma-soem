<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

    public function index()
    {
        
        $id_karyawan = $this->session->userdata('id_karyawan');

        $data = array('judul' => 'Halaman Dasboard' ,
                      'data' => $this->m_auth->data_karyawan($id_karyawan),
                      'isi'  => 'v_dasbor');
        $this->load->view('layout/v_wrapper_karyawan', $data, FALSE);
        
    }

}