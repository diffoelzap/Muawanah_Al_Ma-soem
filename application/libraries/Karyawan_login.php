<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_login
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->model('m_auth');
    }

    public function login($username,$password)
    {
        $cek = $this->ci->m_auth->login_karyawan($username,$password);

        if($cek)
        {   
            //jika benar
            $username = $cek->username;
            $nik = $cek->nik;
            $noreg = $cek->noreg;
            $nama_lengkap = $cek->nama_lengkap;
            $nama_panggilan = $cek->nama_panggilan;
            $tempat_lahir = $cek->tempat_lahir;
            $tanggal_lahir = $cek->tanggal_lahir;
            $jenis_kelamin = $cek->jenis_kelamin;
            $agama = $cek->agama;
            $suku_bangsa = $cek->suku_bangsa;
            $status_perkawinan = $cek->status_perkawinan;
            $status_karyawan = $cek->status_karyawan;
            $tanggal_masuk = $cek->tanggal_masuk;
            $lokasi = $cek->lokasi;
            $direktorat = $cek->direktorat;
            $divisi = $cek->divisi;
            $unit = $cek->unit;
            $jabatan = $cek->jabatan;
            $golongan = $cek->golongan;
            $rumah = $cek->rumah;
            $tinggal = $cek->tinggal;
            //buat session
            
            $this->ci->session->set_userdata('username', $username);
            $this->ci->session->set_userdata('nik', $nik);
            $this->ci->session->set_userdata('noreg', $noreg);
            $this->ci->session->set_userdata('nama_lengkap', $nama_lengkap);
            $this->ci->session->set_userdata('nama_panggilan', $nama_panggilan);
            $this->ci->session->set_userdata('tempat_lahir', $tempat_lahir);
            $this->ci->session->set_userdata('tanggal_lahir', $tanggal_lahir);
            $this->ci->session->set_userdata('jenis_kelamin', $jenis_kelamin);
            $this->ci->session->set_userdata('agama', $agama);
            $this->ci->session->set_userdata('suku_bangsa', $suku_bangsa);
            $this->ci->session->set_userdata('status_perkawinan', $status_perkawinan);
            $this->ci->session->set_userdata('status_karyawan', $status_karyawan);
            $this->ci->session->set_userdata('tanggal_masuk', $tanggal_masuk);
            $this->ci->session->set_userdata('lokasi', $lokasi);
            $this->ci->session->set_userdata('direktorat', $direktorat);
            $this->ci->session->set_userdata('divisi', $divisi);
            $this->ci->session->set_userdata('unit', $unit);
            $this->ci->session->set_userdata('jabatan', $jabatan);
            $this->ci->session->set_userdata('golongan', $golongan);
            $this->ci->session->set_userdata('rumah', $rumah);
            $this->ci->session->set_userdata('tinggal', $tinggal);
            
            //redirect ke admin
            redirect('karyawan');
        }else{
            //jika salah
            $this->ci->session->set_flashdata('error','Username atau Password Salah');
            //redirect ke login
            redirect('auth/login');
            
        }
        
    }
    public function proteksi_halaman()
    {
        if ($this->ci->session->userdata('username') == '') {
            $this->ci->session->set_flashdata('error','Anda Belum Login');
            redirect('auth/login');
        }
    }

    public function logout()
    {
        $this->ci->session->unset_userdata('username');
            $this->ci->session->unset_userdata('nik');
            $this->ci->session->unset_userdata('noreg');
            $this->ci->session->unset_userdata('nama_lengkap');
            $this->ci->session->unset_userdata('nama_panggilan');
            $this->ci->session->unset_userdata('tempat_lahir');
            $this->ci->session->unset_userdata('tanggal_lahir');
            $this->ci->session->unset_userdata('jenis_kelamin');
            $this->ci->session->unset_userdata('agama');
            $this->ci->session->unset_userdata('suku_bangsa');
            $this->ci->session->unset_userdata('status_perkawinan');
            $this->ci->session->unset_userdata('status_karyawan');
            $this->ci->session->unset_userdata('tanggal_masuk');
            $this->ci->session->unset_userdata('lokasi');
            $this->ci->session->unset_userdata('direktorat');
            $this->ci->session->unset_userdata('divisi');
            $this->ci->session->unset_userdata('unit');
            $this->ci->session->unset_userdata('jabatan');
            $this->ci->session->unset_userdata('golongan');
            $this->ci->session->unset_userdata('rumah');
            $this->ci->session->unset_userdata('tinggal');
            
        $this->ci->session->set_flashdata('pesan','Anda Berhasil Logout');
        redirect('auth/login');
    }

    

}

/* End of file LibraryName.php */
