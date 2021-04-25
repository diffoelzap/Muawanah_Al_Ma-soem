<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
            $this->karyawan_login->login($username,$password);
        } 

        $data = array('judul' => 'Login Karyawan');
        $this->load->view('v_login_karyawan', $data, FALSE);
        
    }
    public function register()
    {
        $data = array('judul' => 'Register Karyawan');
        $this->load->view('v_register_karyawan', $data, FALSE);
    }
    public function logout_karyawan()
    {
        $this->karyawan_login->logout();    
    }


}