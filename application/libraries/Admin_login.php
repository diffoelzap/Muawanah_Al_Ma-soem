<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->model('m_admin');
    }
    public function login($username,$password)
    {
        $cek = $this->ci->m_admin->login_admin($username,$password);

        if($cek)
        {   
            //jika benar
            $id_admin = $cek->id_admin;
            $username = $cek->username;
            $password = $cek->password;
            $nama_lengkap = $cek->nama_lengkap;
            //buat session
            
            $this->ci->session->set_userdata('id_admin', $id_admin);
            $this->ci->session->set_userdata('username_admin', $username);
            $this->ci->session->set_userdata('password_admin', $password);
            $this->ci->session->set_userdata('nama_lengkap_admin', $nama_lengkap);
            redirect('admin');
           
        }else{
            //jika salah
            $this->ci->session->set_flashdata('error','Username atau Password Salah');
            //redirect ke login
            redirect('admin/login');
            
        }
        
    }
    public function proteksi_halaman()
    {
        if ($this->ci->session->userdata('username_admin') == '') {
            $this->ci->session->set_flashdata('error','Anda Belum Login');
            redirect('admin/login');
        }
    }

    public function logout()
    {   
            
            $this->ci->session->unset_userdata('id_admin');
            $this->ci->session->unset_userdata('username_admin');
            $this->ci->session->unset_userdata('password_admin');
            $this->ci->session->unset_userdata('nama_lengkap_admin');
            
        $this->ci->session->set_flashdata('pesan','Anda Berhasil Logout');
        redirect('admin/login');
    }

    

}

/* End of file LibraryName.php */
?>