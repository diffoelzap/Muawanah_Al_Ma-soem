<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas extends CI_Controller {

    public function harian()
    {
        $data = array('judul' => 'Tugas Harian',
                      'isi' => 'v_tugas_harian' );
        $this->load->view('layout/v_wrapper_karyawan', $data, FALSE);
        
    }
    public function lapangan()
    {
        $data = array('judul' => 'Tugas Lapangan',
                      'isi' => 'v_tugas_lapangan' );
        $this->load->view('layout/v_wrapper_karyawan', $data, FALSE);
        
    }

}

/* End of file Controllername.php */
