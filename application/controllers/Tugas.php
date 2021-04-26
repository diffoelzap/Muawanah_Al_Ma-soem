<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('m_auth');
        $this->load->model('m_harian');
        $this->load->model('m_lapangan');
        
        
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
    public function edit($id_tugas_harian = NULL)
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
                'id_tugas_harian' => $id_tugas_harian,
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'noreg' => $this->input->post('noreg'),
                'tanggal_harian'       => $this->input->post('tanggal_harian'),
                'jam_harian'   => $this->input->post('jam_harian'),
                'kategori_tugas'   => $this->input->post('kategori_tugas'),
                'uraian_kegiatan'   => $this->input->post('uraian_kegiatan'),
                'waktu_selesai'   => $this->input->post('waktu_selesai'),
                'tempat_harian'   => $this->input->post('tempat_harian')
            );
            $this->m_harian->edit($data);
            $this->session->set_flashdata('pesan', 'Data berhasil diedit');
            redirect('tugas/harian');
        }

        $data = array('judul' => 'Tugas Harian',
                      'data' => $this->m_auth->data_karyawan($id_karyawan),
                      'tugas_harian' => $this->m_harian->get_data($noreg),
                      'isi' => 'v_tugas_harian' );
        $this->load->view('layout/v_wrapper_karyawan', $data, FALSE);
        
    }
    public function delete( $id_tugas_harian = NULL )
    {
        $data = array('id_tugas_harian' => $id_tugas_harian);
        $this->m_harian->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
                    redirect('tugas/harian');
    }
    public function lapangan()
    {
        $id_karyawan = $this->session->userdata('id_karyawan');
        $noreg = $this->session->userdata('noreg');
        
        $this->form_validation->set_rules('tanggal_lapangan', 'Tanggal', 'required',
        array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('jam_lapangan', 'Jam', 'required',
        array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('keterangan', 'Kategori Tugas', 'required',
        array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('tujuan', 'Uraian Kegiatan', 'required',
        array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('waktu_selesai', 'Waktu Selesai', 'required',
        array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('kepulangan', 'Tempat', 'required',
        array('required' => '%s Harus diisi'));
        
        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'noreg' => $this->input->post('noreg'),
                'tanggal_lapangan'       => $this->input->post('tanggal_lapangan'),
                'jam_lapangan'   => $this->input->post('jam_lapangan'),
                'keterangan'   => $this->input->post('keterangan'),
                'tujuan'   => $this->input->post('tujuan'),
                'waktu_selesai'   => $this->input->post('waktu_selesai'),
                'kepulangan'   => $this->input->post('kepulangan')
            );
            $this->m_lapangan->add($data);
            $this->session->set_flashdata('pesan', 'Data berhasil ditambahkan');
            redirect('tugas/lapangan');
        }

        $data = array('judul' => 'Tugas Lapangan',
                      'data' => $this->m_auth->data_karyawan($id_karyawan),
                      'tugas_lapangan' => $this->m_lapangan->get_data($noreg),
                      'isi' => 'v_tugas_lapangan' );
        $this->load->view('layout/v_wrapper_karyawan', $data, FALSE);
        
    }
    public function edit_lapangan($id_tugas_lapangan = NULL){
        $id_karyawan = $this->session->userdata('id_karyawan');
        $noreg = $this->session->userdata('noreg');
        
        $this->form_validation->set_rules('tanggal_lapangan', 'Tanggal', 'required',
        array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('jam_lapangan', 'Jam', 'required',
        array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('keterangan', 'Kategori Tugas', 'required',
        array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('tujuan', 'Uraian Kegiatan', 'required',
        array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('waktu_selesai', 'Waktu Selesai', 'required',
        array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('kepulangan', 'Tempat', 'required',
        array('required' => '%s Harus diisi'));

        
        if ($this->form_validation->run() == TRUE) {
            
            $data = array(
                'id_tugas_lapangan' => $id_tugas_lapangan,
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'noreg' => $this->input->post('noreg'),
                'tanggal_lapangan'       => $this->input->post('tanggal_lapangan'),
                'jam_lapangan'   => $this->input->post('jam_lapangan'),
                'keterangan'   => $this->input->post('keterangan'),
                'tujuan'   => $this->input->post('tujuan'),
                'waktu_selesai'   => $this->input->post('waktu_selesai'),
                'kepulangan'   => $this->input->post('kepulangan')
            );
            $this->m_lapangan->edit($data);
            $this->session->set_flashdata('pesan', 'Data berhasil diedit');
            redirect('tugas/lapangan');
        }

        $data = array('judul' => 'Tugas Lapangan',
                      'data' => $this->m_auth->data_karyawan($id_karyawan),
                      'tugas_lapangan' => $this->m_lapangan->get_data($noreg),
                      'isi' => 'v_tugas_lapangan' );
        $this->load->view('layout/v_wrapper_karyawan', $data, FALSE);
    }
    public function delete_lapangan($id_tugas_lapangan = NULL){
        $data = array('id_tugas_lapangan' => $id_tugas_lapangan);
        $this->m_lapangan->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
                    redirect('tugas/lapangan');
    }

}

/* End of file Controllername.php */
