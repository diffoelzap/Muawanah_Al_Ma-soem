<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('m_auth');
        
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
            $this->karyawan_login->login($username,$password);
        } 

        $data = array('judul' => 'Login Karyawan');
        $this->load->view('v_login_karyawan', $data, FALSE);
        
    }
    public function logout_karyawan()
    {
        $this->karyawan_login->logout();    
    }

    public function register()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[tbl_karyawan.username]',
            array('required' => '%s Harus diisi',
                  'is_unique' => '%s ini sudah terdaftar'));
        $this->form_validation->set_rules('password', 'Password', 'required',
            array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('nik', 'Nik', 'required|is_unique[tbl_karyawan.nik]',
            array('required' => '%s Harus diisi',
                  'is_unique' => '%s ini sudah terdaftar'));
        $this->form_validation->set_rules('noreg', 'Noreg', 'required|is_unique[tbl_karyawan.noreg]',
            array('required' => '%s Harus diisi',
                  'is_unique' => '%s ini sudah terdaftar'));
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|max_length[10]',
            array('required' => '%s Harus diisi',
                  'max_length' => '%s ini formatnya salah'));
        $this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'required|max_length[10]',
            array('required' => '%s Harus diisi',
                  'max_length' => '%s ini formatnya salah'));   
        $this->form_validation->set_rules('rumah', 'Alamat Rumah', 'required',
            array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('tinggal', 'Alamat Tinggal', 'required',
            array('required' => '%s Harus diisi'));      
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required',
            array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('direktorat', 'Direktorat', 'required',
            array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('divisi', 'Divisi', 'required',
            array('required' => '%s Harus diisi'));     
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required',
            array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('golongan', 'Golongan', 'required',
            array('required' => '%s Harus diisi'));
            
            if ($this->form_validation->run() == TRUE) {
           
                $config['upload_path'] = './assets/gambar_profile/';
                $config['allowed_types'] = 'jpg|png|jpeg|ico';
                $config['max_size']     = '2000';

                // Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
                    $this->upload->initialize($config);
                    $field_name = "gambar";
                    if(!$this->upload->do_upload($field_name)){
                        $data = array(
                            'judul'           => 'Register Karyawan',
                            'error_upload'    => $this->upload->display_errors()
                        );
                        $this->session->set_flashdata('error', 'Format gambar tidak sesuai');
                        redirect('auth/register');
                    } else {
                        $upload_data = array('uploads' => $this->upload->data());
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = './assets/gambar_profile/'.$upload_data['uploads']['file_name'];
                        $this->load->library('image_lib',$config);
                        
                        $data = array('username' => $this->input->post('username'),
                                    'password' => $this->input->post('password'),
                                    'nik'       => $this->input->post('nik'),
                                    'noreg'   => $this->input->post('noreg'),
                                    'nama_lengkap'   => $this->input->post('nama_lengkap'),
                                    'nama_panggilan'   => $this->input->post('nama_panggilan'),
                                    'tempat_lahir'   => $this->input->post('tempat_lahir'),
                                    'tanggal_lahir'   => $this->input->post('tanggal_lahir'),
                                    'jenis_kelamin'   => $this->input->post('jenis_kelamin'),
                                    'agama'   => $this->input->post('agama'),
                                    'suku_bangsa'   => $this->input->post('suku_bangsa'),
                                    'status_perkawinan'   => $this->input->post('status_perkawinan'),
                                    'status_karyawan'   => $this->input->post('status_karyawan'),
                                    'tanggal_masuk'   => $this->input->post('tanggal_masuk'),
                                    'lokasi'   => $this->input->post('lokasi'),
                                    'direktorat'   => $this->input->post('direktorat'),
                                    'divisi'   => $this->input->post('divisi'),
                                    'unit'   => $this->input->post('unit'),
                                    'jabatan'   => $this->input->post('jabatan'),
                                    'golongan'   => $this->input->post('golongan'),
                                    'rumah'   => $this->input->post('rumah'),
                                    'tinggal'   => $this->input->post('tinggal'),
                                    'foto_profil'      => $upload_data['uploads']['file_name'],
                                   
                                            
                        );
                        $this->m_auth->add($data);
                        $this->session->set_flashdata('pesan', 'Data berhasil ditambahkan');
                        redirect('auth/register');
                    }

                   
            }
            $data = array(
                'judul'    => 'Register Karyawan',
            );
            $this->load->view('v_register_karyawan', $data, FALSE);
            
    }
    public function edit()
    {   
        
       $id_karyawan = $this->session->userdata('id_karyawan');

        $this->form_validation->set_rules('username', 'Username', 'required',
        array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('password', 'Password', 'required',
            array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('nik', 'Nik', 'required',
            array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('noreg', 'Noreg', 'required',
            array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|max_length[10]',
            array('required' => '%s Harus diisi',
                'max_length' => '%s ini formatnya salah'));
        $this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'required|max_length[10]',
            array('required' => '%s Harus diisi',
                'max_length' => '%s ini formatnya salah'));   
        $this->form_validation->set_rules('rumah', 'Alamat Rumah', 'required',
            array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('tinggal', 'Alamat Tinggal', 'required',
            array('required' => '%s Harus diisi'));      
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required',
            array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('direktorat', 'Direktorat', 'required',
            array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('divisi', 'Divisi', 'required',
            array('required' => '%s Harus diisi'));     
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required',
            array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('golongan', 'Golongan', 'required',
            array('required' => '%s Harus diisi'));

            if ($this->form_validation->run() == TRUE) {
           
                $config['upload_path'] = './assets/gambar_profile/';
                $config['allowed_types'] = 'jpg|png|jpeg|ico';
                $config['max_size']     = '2000';

                // Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
                    $this->upload->initialize($config);
                    $field_name = "gambar";
                    if(!$this->upload->do_upload($field_name)){
                         
                        $data = array(
                            'judul'           => 'Halaman Edit Profile',
                            'data' => $this->m_auth->data_karyawan($id_karyawan),
                            'isi'  => 'v_edit_karyawan',
                            'error_upload'    => $this->upload->display_errors()
                        );
                        $this->load->view('layout/v_wrapper_karyawan', $data, FALSE);
                        
                    } else {
                        //hapus gambar

                        $karyawan = $this->m_auth->data_karyawan($id_karyawan);
                        
                        if($karyawan->foto_profil != ""){
                            unlink('./assets/gambar_profile/'.$karyawan->foto_profil);
                        }
                        //end hapus gambar
                        $upload_data = array('uploads' => $this->upload->data());
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = './assets/gambar_profile/'.$upload_data['uploads']['file_name'];
                        $this->load->library('image_lib',$config);
                        
                        $data = array(
                                    'id_karyawan' => $id_karyawan,
                                    'username' => $this->input->post('username'),
                                    'password' => $this->input->post('password'),
                                    'nik'       => $this->input->post('nik'),
                                    'noreg'   => $this->input->post('noreg'),
                                    'nama_lengkap'   => $this->input->post('nama_lengkap'),
                                    'nama_panggilan'   => $this->input->post('nama_panggilan'),
                                    'tempat_lahir'   => $this->input->post('tempat_lahir'),
                                    'tanggal_lahir'   => $this->input->post('tanggal_lahir'),
                                    'jenis_kelamin'   => $this->input->post('jenis_kelamin'),
                                    'agama'   => $this->input->post('agama'),
                                    'suku_bangsa'   => $this->input->post('suku_bangsa'),
                                    'status_perkawinan'   => $this->input->post('status_perkawinan'),
                                    'status_karyawan'   => $this->input->post('status_karyawan'),
                                    'tanggal_masuk'   => $this->input->post('tanggal_masuk'),
                                    'lokasi'   => $this->input->post('lokasi'),
                                    'direktorat'   => $this->input->post('direktorat'),
                                    'divisi'   => $this->input->post('divisi'),
                                    'unit'   => $this->input->post('unit'),
                                    'jabatan'   => $this->input->post('jabatan'),
                                    'golongan'   => $this->input->post('golongan'),
                                    'rumah'   => $this->input->post('rumah'),
                                    'tinggal'   => $this->input->post('tinggal'),
                                    'foto_profil'      => $upload_data['uploads']['file_name'],
                                   
                                            
                        );
                        $this->m_auth->edit($data);
                        $this->session->set_flashdata('pesan', 'Data berhasil diedit');
                        redirect('karyawan');
                    }

                    $data = array(
                        'id_karyawan' => $id_karyawan,
                        'username' => $this->input->post('username'),
                        'password' => $this->input->post('password'),
                        'nik'       => $this->input->post('nik'),
                        'noreg'   => $this->input->post('noreg'),
                        'nama_lengkap'   => $this->input->post('nama_lengkap'),
                        'nama_panggilan'   => $this->input->post('nama_panggilan'),
                        'tempat_lahir'   => $this->input->post('tempat_lahir'),
                        'tanggal_lahir'   => $this->input->post('tanggal_lahir'),
                        'jenis_kelamin'   => $this->input->post('jenis_kelamin'),
                        'agama'   => $this->input->post('agama'),
                        'suku_bangsa'   => $this->input->post('suku_bangsa'),
                        'status_perkawinan'   => $this->input->post('status_perkawinan'),
                        'status_karyawan'   => $this->input->post('status_karyawan'),
                        'tanggal_masuk'   => $this->input->post('tanggal_masuk'),
                        'lokasi'   => $this->input->post('lokasi'),
                        'direktorat'   => $this->input->post('direktorat'),
                        'divisi'   => $this->input->post('divisi'),
                        'unit'   => $this->input->post('unit'),
                        'jabatan'   => $this->input->post('jabatan'),
                        'golongan'   => $this->input->post('golongan'),
                        'rumah'   => $this->input->post('rumah'),
                        'tinggal'   => $this->input->post('tinggal'),
                                
                        );
                        $this->m_auth->edit($data);
                        $this->session->set_flashdata('pesan', 'Data berhasil diedit');
                        redirect('karyawan');

                   
            }

        $data = array('judul' => 'Halaman Edit Profile' ,
                      'data' => $this->m_auth->data_karyawan($id_karyawan),
                      'isi'  => 'v_edit_karyawan');
        $this->load->view('layout/v_wrapper_karyawan', $data, FALSE);
    }

}