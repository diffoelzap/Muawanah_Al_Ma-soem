<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('m_reseller');
        $this->load->model('m_user');
        $this->load->model('m_admin');
        
    }
    
    public function index()
    {
        $data = array('judul' => 'Halaman Utama' ,
                      'slide' => $this->m_user->get_slide(),
                      'isi'  => 'v_home');
        $this->load->view('layout/v_wrapper_user', $data, FALSE);
        
    }

    public function profile()
    {
        $data = array('judul' => 'Halaman Profile', 
                      'video' => $this->m_user->get_video(),
                      'pegawai' => $this->m_user->get_pegawai(),
                      'isi' => 'v_profile');
        $this->load->view('layout/v_wrapper_user', $data, FALSE);

    }

    public function product()
    {
        $data = array('judul' => 'Halaman Produk',
                      'first_brand' => $this->m_admin->get_data_first_brand(),
                      'second_brand' => $this->m_admin->get_data_second_brand(), 
                      'isi' => 'v_produk');
        $this->load->view('layout/v_wrapper_user', $data, FALSE);

    }

    public function contact()
    {
        $data = array('judul' => 'Halaman Kontak', 
                      'isi' => 'v_kontak');
        $this->load->view('layout/v_wrapper_user', $data, FALSE);

    }

    public function reseller()
    {
        $this->form_validation->set_rules('nama_reseller', 'Nama Reseller', 'required',
        array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('email_reseller', 'Email Reseller', 'required',
        array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('alamat_reseller', 'Alamat Reseller', 'required',
        array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('telepon_reseller', 'Telepon Reseller', 'required',
        array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('pesan_reseller', 'Pesan Reseller', 'required',
        array('required' => '%s Harus diisi'));

        if ($this->form_validation->run() == TRUE) {
            $data = array('nama_reseller' => $this->input->post('nama_reseller'),
                          'email_reseller' => $this->input->post('email_reseller'),
                          'telepon_reseller' => $this->input->post('telepon_reseller'),
                          'alamat_reseller' => $this->input->post('alamat_reseller'),
                          'pesan_reseller' => $this->input->post('pesan_reseller'),
                         );
             $this->m_reseller->add($data);
             $this->session->set_flashdata('pesan', 'Data berhasil ditambahkan');
             redirect('user/reseller');
        } 

        $data = array('judul' => 'Halaman Reseller', 
                      'isi' => 'v_reseller');
        $this->load->view('layout/v_wrapper_user', $data, FALSE);

    }

}

/* End of file Controllername.php */
