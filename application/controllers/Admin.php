<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('m_admin');
        
        
    }
    
    public function index()
    {
        $id_admin = $this->session->userdata('id_admin');

        $data = array('judul' => 'Halaman Dasboard' ,
                      'data' => $this->m_admin->data_admin($id_admin),
                      'isi'  => 'v_admin');
        $this->load->view('layout/v_wrapper_admin', $data, FALSE);
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', array(
            'required' => '%s Harus diisi !!!'                
        ));
        $this->form_validation->set_rules('password', 'Password', 'required', array(
            'required' => '%s Harus diisi !!!'                
        ));

        
        if ($this->form_validation->run() == TRUE) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->admin_login->login($username,$password);
        } 

        $data = array('judul' => 'Login Admin');
        $this->load->view('v_login_admin', $data, FALSE);
        
    }
    public function logout_karyawan()
    {
        $this->admin_login->logout();    
    }

    public function harian()
    {
        $id_admin = $this->session->userdata('id_admin');

        $data = array('judul' => 'Tugas Harian' ,
                      'data' => $this->m_admin->data_admin($id_admin),
                      'harian' => $this->m_admin->get_data_harian(),
                      'isi'  => 'v_admin_harian');
        $this->load->view('layout/v_wrapper_admin', $data, FALSE);
    }
    public function lapangan()
    {
        $id_admin = $this->session->userdata('id_admin');

        $data = array('judul' => 'Tugas Harian' ,
                      'data' => $this->m_admin->data_admin($id_admin),
                      'lapangan' => $this->m_admin->get_data_lapangan(),
                      'isi'  => 'v_admin_lapangan');
        $this->load->view('layout/v_wrapper_admin', $data, FALSE);
    }

    public function cuti()
    {
        $id_admin = $this->session->userdata('id_admin');

        $data = array('judul' => 'Permohonan Cuti' ,
                      'data' => $this->m_admin->data_admin($id_admin),
                      'cuti' => $this->m_admin->get_data_cuti(),
                      'isi'  => 'v_admin_cuti');
        $this->load->view('layout/v_wrapper_admin', $data, FALSE);
    }
    public function peminjaman()
    {
        $id_admin = $this->session->userdata('id_admin');

        $data = array('judul' => 'Peminjaman Mobil',
                      'data' => $this->m_admin->data_admin($id_admin),
                      'peminjaman' => $this->m_admin->get_data_peminjaman(),
                      'isi'  => 'v_admin_peminjaman');
        $this->load->view('layout/v_wrapper_admin', $data, FALSE);
    }

    public function terima_cuti($id_cuti = NULL)
    {

        $data = array(
            'id_cuti' => $id_cuti,
            'status'   => 1
        );
        $this->m_admin->edit_cuti($data);
        $this->session->set_flashdata('pesan', 'Cuti berhasil diterima');
        redirect('admin/cuti');

    }
    public function tolak_cuti($id_cuti = NULL)
    {

        $data = array(
            'id_cuti' => $id_cuti,
            'status'   => 2
        );
        $this->m_admin->edit_cuti($data);
        $this->session->set_flashdata('error', 'Cuti berhasil ditolak');
        redirect('admin/cuti');

    }
    public function terima_peminjaman($id_peminjaman = NULL)
    {

        $data = array(
            'id_peminjaman' => $id_peminjaman,
            'status'   => 1
        );
        $this->m_admin->edit_pinjam($data);
        $this->session->set_flashdata('pesan', 'Peminjaman berhasil diterima');
        redirect('admin/peminjaman');

    }
    public function tolak_peminjaman($id_peminjaman = NULL)
    {

        $data = array(
            'id_peminjaman' => $id_peminjaman,
            'status'   => 2
        );
        $this->m_admin->edit_pinjam($data);
        $this->session->set_flashdata('error', 'Peminjaman berhasil ditolak');
        redirect('admin/peminjaman');

    }


}

/* End of file Controllername.php */
?>