<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('m_auth');
        $this->load->model('m_about');
        
        
    }
    

    public function index()
    {
        
        $id_karyawan = $this->session->userdata('id_karyawan');

        $data = array('judul' => 'Halaman Dasboard' ,
                      'data' => $this->m_auth->data_karyawan($id_karyawan),
                      'isi'  => 'v_dasbor');
        $this->load->view('layout/v_wrapper_karyawan', $data, FALSE);
        
    }
    public function about(){
        
        $id_karyawan = $this->session->userdata('id_karyawan');
        $noreg = $this->session->userdata('noreg');

        $this->form_validation->set_rules('saran', 'Saran', 'required',
        array('required' => '%s Harus diisi'));

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'noreg' => $noreg,
                'saran'  => $this->input->post('saran')
            );
            $this->m_about->add($data);
            $this->session->set_flashdata('pesan', 'Saran berhasil dikirim');
            redirect('karyawan/about');
        }

        $data = array('judul' => 'Halaman About' ,
        'data' => $this->m_auth->data_karyawan($id_karyawan));
        $this->load->view('v_about', $data, FALSE);
    }
}