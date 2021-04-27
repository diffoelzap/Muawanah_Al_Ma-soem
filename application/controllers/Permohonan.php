<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Permohonan extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('m_auth');
        $this->load->model('m_cuti');
                
    }
    

    public function cuti()  
    {
        
        $id_karyawan = $this->session->userdata('id_karyawan');
        $noreg = $this->session->userdata('noreg');

        $cutiDari = strtotime($this->input->post('tanggal_awal'));
        $cutiSampai = strtotime($this->input->post('tanggal_akhir'));

        $timeDiff = abs($cutiSampai - $cutiDari);
        $numberDays = $timeDiff/86400;
        $numberDays = intval($numberDays);

        $this->form_validation->set_rules('jenis_cuti', 'Jenis Cuti', 'required',
        array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('tanggal_awal', 'Tanggal Awal Cuti', 'required',
        array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('tanggal_akhir', 'Tanggal Akhir Cuti', 'required',
        array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required',
        array('required' => '%s Harus diisi'));

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'noreg' => $this->input->post('noreg'),
                'jenis_cuti'       => $this->input->post('jenis_cuti'),
                'tanggal_awal'   => $this->input->post('tanggal_awal'),
                'tanggal_akhir'   => $this->input->post('tanggal_akhir'),
                'lama_cuti'   => $numberDays,
                'status'   => 0,
                'keterangan'   => $this->input->post('keterangan')
            );
            $this->m_cuti->add($data);
            $this->session->set_flashdata('pesan', 'Data berhasil ditambahkan');
            redirect('permohonan/cuti');
        }

        $data = array('judul' => 'Permohonana Cuti',
                      'data' => $this->m_auth->data_karyawan($id_karyawan),
                      'cuti' => $this->m_cuti->get_data($noreg),
                      'isi' => 'v_permohonan_cuti' );
        $this->load->view('layout/v_wrapper_karyawan', $data, FALSE);
    }
    public function edit_cuti($id_cuti = NULL)
    {
        $id_karyawan = $this->session->userdata('id_karyawan');
        $noreg = $this->session->userdata('noreg');

        $cutiDari = strtotime($this->input->post('tanggal_awal'));
        $cutiSampai = strtotime($this->input->post('tanggal_akhir'));

        $timeDiff = abs($cutiSampai - $cutiDari);
        $numberDays = $timeDiff/86400;
        $numberDays = intval($numberDays);

        $this->form_validation->set_rules('jenis_cuti', 'Jenis Cuti', 'required',
        array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('tanggal_awal', 'Tanggal Awal Cuti', 'required',
        array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('tanggal_akhir', 'Tanggal Akhir Cuti', 'required',
        array('required' => '%s Harus diisi'));
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required',
        array('required' => '%s Harus diisi'));

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'id_cuti' => $id_cuti,
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'noreg' => $this->input->post('noreg'),
                'jenis_cuti'       => $this->input->post('jenis_cuti'),
                'tanggal_awal'   => $this->input->post('tanggal_awal'),
                'tanggal_akhir'   => $this->input->post('tanggal_akhir'),
                'lama_cuti'   => $numberDays,
                'status'   => 0,
                'keterangan'   => $this->input->post('keterangan')
            );
            $this->m_cuti->edit($data);
            $this->session->set_flashdata('pesan', 'Data berhasil diedit');
            redirect('permohonan/cuti');
        }

        $data = array('judul' => 'Permohonana Cuti',
                      'data' => $this->m_auth->data_karyawan($id_karyawan),
                      'cuti' => $this->m_cuti->get_data($noreg),
                      'isi' => 'v_permohonan_cuti' );
        $this->load->view('layout/v_wrapper_karyawan', $data, FALSE);


    }
    public function delete_cuti($id_cuti = NULL)
    {
        $data = array('id_cuti' => $id_cuti);
        $this->m_cuti->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
                    redirect('permohonan/cuti');
    }

    public function peminjaman()
    {
        $id_karyawan = $this->session->userdata('id_karyawan');

        $data = array('judul' => 'Peminjaman Mobil',
                      'data' => $this->m_auth->data_karyawan($id_karyawan),
                      'isi' => 'v_peminjaman_mobil' );
        $this->load->view('layout/v_wrapper_karyawan', $data, FALSE);
    }
    

}

/* End of file Controllername.php */
?>