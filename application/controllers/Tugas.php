<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('m_auth');
        $this->load->model('m_harian');
        
        
    }
    
    public function harian()
    {
        $id_karyawan = $this->session->userdata('id_karyawan');
        $noreg = $this->session->userdata('noreg');
        
        $this->form_validation->set_rules('tanggal_harian', 'Tanggal', 'required',
        array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('jam_harian', 'Jam', 'required',
        array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('kategori_tugas', 'Kategori Tugas', 'required',
        array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('uraian_kegiatan', 'Uraian Kegiatan', 'required',
        array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('waktu_selesai', 'Waktu Selesai', 'required',
        array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('tempat_harian', 'Tempat', 'required',
        array('required' => '%s Harus diisi'));
        
        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'noreg' => $this->input->post('noreg'),
                'tanggal_harian'       => $this->input->post('tanggal_harian'),
                'jam_harian'   => $this->input->post('jam_harian'),
                'kategori_tugas'   => $this->input->post('kategori_tugas'),
                'uraian_kegiatan'   => $this->input->post('uraian_kegiatan'),
                'waktu_selesai'   => $this->input->post('waktu_selesai'),
                'tempat_harian'   => $this->input->post('tempat_harian')
            );
            $this->m_harian->add($data);
            $this->session->set_flashdata('pesan', 'Data berhasil ditambahkan');
            redirect('tugas/harian');
        }

        $data = array('judul' => 'Tugas Harian',
                      'data' => $this->m_auth->data_karyawan($id_karyawan),
                      'tugas_harian' => $this->m_harian->get_data($noreg),
                      'isi' => 'v_tugas_harian' );
        $this->load->view('layout/v_wrapper_karyawan', $data, FALSE);
        
    }
    public function lapangan()
    {
        $id_karyawan = $this->session->userdata('id_karyawan');

        $data = array('judul' => 'Tugas Lapangan',
                      'data' => $this->m_auth->data_karyawan($id_karyawan),
                      'isi' => 'v_tugas_lapangan' );
        $this->load->view('layout/v_wrapper_karyawan', $data, FALSE);
        
    }

}

/* End of file Controllername.php */
