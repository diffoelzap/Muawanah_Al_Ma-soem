<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('m_admin');
        $this->load->model('m_user');
        
        
    }
    
    public function index()
    {
        $id_admin = $this->session->userdata('id_admin');

        $data = array('judul' => 'Halaman Dasboard' ,
                      'data' => $this->m_admin->data_admin($id_admin),
                      'slide' => $this->m_user->get_slide(),
                      'karyawan' => $this->m_admin->get_data_karyawan(),
                      'first_brand' => $this->m_admin->get_data_first_brand(),
                      'second_brand' => $this->m_admin->get_data_second_brand(), 
                      'video' => $this->m_admin->get_data_video(),
                      'isi'  => 'v_admin');
        $this->load->view('layout/v_wrapper_admin', $data, FALSE);
    }

    public function job_des(){
        $id_admin = $this->session->userdata('id_admin');

        $data = array('judul' => 'Job Des' ,
                      'data' => $this->m_admin->data_admin($id_admin),
                      'job_des' => $this->m_admin->get_data_job(),
                      'isi'  => 'v_admin_job');
        $this->load->view('layout/v_wrapper_admin', $data, FALSE);
    }

    public function permohonan_cuti(){
        $id_admin = $this->session->userdata('id_admin');

        $data = array('judul' => 'Job Des' ,
                      'data' => $this->m_admin->data_admin($id_admin),
                      'cuti' => $this->m_admin->get_data_cuti(),
                      'isi'  => 'v_admin_cuti');
        $this->load->view('layout/v_wrapper_admin', $data, FALSE);
    }

    public function reseller(){
        $id_admin = $this->session->userdata('id_admin');

        $data = array('judul' => 'Reseller' ,
                      'data' => $this->m_admin->data_admin($id_admin),
                      'reseller' => $this->m_admin->get_data_reseller(),
                      'isi'  => 'v_admin_reseller');
        $this->load->view('layout/v_wrapper_admin', $data, FALSE);
    }
    public function edit_slide($id_slide = null){
        $id_admin = $this->session->userdata('id_admin');

           
            $config['upload_path'] = './assets/slide/';
            $config['allowed_types'] = 'jpg|png|jpeg|ico';
            $config['max_size']     = '2000';

            // Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
                $this->upload->initialize($config);
                $field_name = "gambar";
                if(!$this->upload->do_upload($field_name)){
                     
                    $data = array(
                        'judul'           => 'Halaman Dashboard',
                        'data' => $this->m_admin->data_admin($id_admin),
                        'slide' => $this->m_user->get_slide(),
                        'karyawan' => $this->m_admin->get_data_karyawan(),
                        'first_brand' => $this->m_admin->get_data_first_brand(),
                        'second_brand' => $this->m_admin->get_data_second_brand(), 
                        'video' => $this->m_admin->get_data_video(),
                        'isi'  => 'v_admin',
                        'error_upload'    => $this->upload->display_errors()
                    );
                    $this->load->view('layout/v_wrapper_admin', $data, FALSE);
                    
                } else {
                    //hapus gambar

                    $slide = $this->m_user->data_slide($id_slide);
                    
                    if($slide->foto_slide != ""){
                        unlink('./assets/slide/'.$slide->foto_slide);
                    }
                    //end hapus gambar
                    $upload_data = array('uploads' => $this->upload->data());
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './assets/slide/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib',$config);
                    
                    $data = array(
                                'id_slide' => $id_slide,
                                'foto_slide'      => $upload_data['uploads']['file_name'],
                               
                                        
                    );
                    $this->m_user->edit_slide($data);
                    $this->session->set_flashdata('pesan', 'Data berhasil diedit');
                    redirect('admin');
                }
               
        
    }
    public function edit_karyawan($id_karyawan){
        $id_admin = $this->session->userdata('id_admin');

                $config['upload_path'] = './assets/gambar_profile/';
                $config['allowed_types'] = 'jpg|png|jpeg|ico';
                $config['max_size']     = '2000';

                // Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
                    $this->upload->initialize($config);
                    $field_name = "gambar";
                    if(!$this->upload->do_upload($field_name)){
                         
                        $data = array(
                            'judul'           => 'Halaman Dashboard',
                            'data' => $this->m_admin->data_admin($id_admin),
                            'slide' => $this->m_user->get_slide(),
                            'karyawan' => $this->m_admin->get_data_karyawan(),
                            'first_brand' => $this->m_admin->get_data_first_brand(),
                            'second_brand' => $this->m_admin->get_data_second_brand(), 
                            'video' => $this->m_admin->get_data_video(),
                            'isi'  => 'v_admin',
                            'error_upload'    => $this->upload->display_errors()
                        );
                        $this->load->view('layout/v_wrapper_admin', $data, FALSE);
                        
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
                                    'nama_lengkap'   => $this->input->post('nama_lengkap'),
                                    'jabatan'   => $this->input->post('jabatan'),
                                    'foto_profil'      => $upload_data['uploads']['file_name'],
                                   
                                            
                        );
                        $this->m_auth->edit($data);
                        $this->session->set_flashdata('pesan', 'Data berhasil diedit');
                        redirect('admin');
                    }

                    $data = array(
                        'id_karyawan' => $id_karyawan,
                        'nama_lengkap'   => $this->input->post('nama_lengkap'),
                        'jabatan'   => $this->input->post('jabatan'),
                                
                        );
                        $this->m_auth->edit($data);
                        $this->session->set_flashdata('pesan', 'Data berhasil diedit');
                        redirect('admin');


    }
    public function edit_top($id_brand){
        $id_admin = $this->session->userdata('id_admin');

        $config['upload_path'] = './assets/brand/';
        $config['allowed_types'] = 'jpg|png|jpeg|ico';
        $config['max_size']     = '2000';

        // Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
            $this->upload->initialize($config);
            $field_name = "gambar";
            if(!$this->upload->do_upload($field_name)){
                 
                $data = array(
                    'judul'           => 'Halaman Dashboard',
                    'data' => $this->m_admin->data_admin($id_admin),
                    'slide' => $this->m_user->get_slide(),
                    'karyawan' => $this->m_admin->get_data_karyawan(),
                    'first_brand' => $this->m_admin->get_data_first_brand(),
                    'second_brand' => $this->m_admin->get_data_second_brand(), 
                    'video' => $this->m_admin->get_data_video(),
                    'isi'  => 'v_admin',
                    'error_upload'    => $this->upload->display_errors()
                );
                $this->load->view('layout/v_wrapper_admin', $data, FALSE);
                
            } else {
                //hapus gambar

                $brand = $this->m_auth->data_brand($id_brand);
                
                if($brand->foto_brand != ""){
                    unlink('./assets/brand/'.$brand->foto_profil);
                }
                //end hapus gambar
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/brand/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib',$config);
                
                $data = array(
                            'id_brand' => $id_brand,
                            'nama_brand'   => $this->input->post('nama_brand'),
                            'deskripsi_brand'   => $this->input->post('deskripsi_brand'),
                            'foto_brand'      => $upload_data['uploads']['file_name'],
                           
                                    
                );
                $this->m_admin->edit_brand($data);
                $this->session->set_flashdata('pesan', 'Data berhasil diedit');
                redirect('admin');
            }
                $data = array(
                    'id_brand' => $id_brand,
                    'nama_brand'   => $this->input->post('nama_brand'),
                    'deskripsi_brand'   => $this->input->post('deskripsi_brand'),
                            
                    );
                    $this->m_admin->edit_brand($data);
                    $this->session->set_flashdata('pesan', 'Data berhasil diedit');
                    redirect('admin');
            

           
    }
    public function edit_video($id_video){
        $id_admin = $this->session->userdata('id_admin');

        $config['upload_path'] = './assets/video/';
        $config['allowed_types'] = 'mp4';
        $config['max_size'] = '10000';
        $config['max_width'] = '10240';
        $config['max_height'] = '7680';
        
        $this->load->library('upload',$config);

        // Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('video')){
                 
                $data = array(
                    'judul'           => 'Halaman Dashboard',
                    'data' => $this->m_admin->data_admin($id_admin),
                    'slide' => $this->m_user->get_slide(),
                    'karyawan' => $this->m_admin->get_data_karyawan(),
                    'first_brand' => $this->m_admin->get_data_first_brand(),
                    'second_brand' => $this->m_admin->get_data_second_brand(),
                    'video' =>  $this->m_admin->get_data_video(),
                    'isi'  => 'v_admin',
                    'error_upload'    => $this->upload->display_errors()
                );
                $this->load->view('layout/v_wrapper_admin', $data, FALSE);
                
            } else {
                //hapus video

                $video = $this->m_auth->data_video($id_video);
                
                if($video->video_profile != ""){
                    unlink('./assets/video/'.$video->video_profile);
                }
                //end hapus video
                $img 	= $this->upload->data();
                $video	= $img['file_name'];
                
                $data = array(
                            'id_video' => $id_video,
                            'video_profile'      => $video,
                                    
                );
                $this->m_admin->edit_video($data);
                $this->session->set_flashdata('pesan', 'Data berhasil diedit');
                redirect('admin');
            }
           
    }
    public function edit_second($id_brand){
        $id_admin = $this->session->userdata('id_admin');

        $config['upload_path'] = './assets/brand/';
        $config['allowed_types'] = 'jpg|png|jpeg|ico';
        $config['max_size']     = '2000';

        // Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
            $this->upload->initialize($config);
            $field_name = "gambar";
            if(!$this->upload->do_upload($field_name)){
                 
                $data = array(
                    'judul'           => 'Halaman Dashboard',
                    'data' => $this->m_admin->data_admin($id_admin),
                    'slide' => $this->m_user->get_slide(),
                    'karyawan' => $this->m_admin->get_data_karyawan(),
                    'first_brand' => $this->m_admin->get_data_first_brand(),
                    'second_brand' => $this->m_admin->get_data_second_brand(), 
                    'video' => $this->m_admin->get_data_video(),
                    'isi'  => 'v_admin',
                    'error_upload'    => $this->upload->display_errors()
                );
                $this->load->view('layout/v_wrapper_admin', $data, FALSE);
                
            } else {
                //hapus gambar

                $brand = $this->m_auth->data_brand($id_brand);
                
                if($brand->foto_brand != ""){
                    unlink('./assets/brand/'.$brand->foto_profil);
                }
                //end hapus gambar
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/brand/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib',$config);
                
                $data = array(
                            'id_brand' => $id_brand,
                            'nama_brand'   => $this->input->post('nama_brand'),
                            'deskripsi_brand'   => $this->input->post('deskripsi_brand'),
                            'foto_brand'      => $upload_data['uploads']['file_name'],
                           
                                    
                );
                $this->m_admin->edit_brand($data);
                $this->session->set_flashdata('pesan', 'Data berhasil diedit');
                redirect('admin');
            }
                $data = array(
                    'id_brand' => $id_brand,
                    'nama_brand'   => $this->input->post('nama_brand'),
                    'deskripsi_brand'   => $this->input->post('deskripsi_brand'),
                            
                    );
                    $this->m_admin->edit_brand($data);
                    $this->session->set_flashdata('pesan', 'Data berhasil diedit');
                    redirect('admin');
            

           
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
    public function logout_admin()
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