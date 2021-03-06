<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

    public function login_admin($username,$password)
    {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where(array('username' => $username,
                               'password' => $password 
                              ));
        return $this->db->get()->row();
        
    }
    public function data_admin($id_admin)
    {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where(array('id_admin' => $id_admin));
        return $this->db->get()->row();
        
    }
    public function get_data_harian()
    {
        $this->db->select('*');
        $this->db->from('tbl_tugas_harian');    
        $this->db->order_by('tanggal_harian', 'desc');
        $this->db->order_by('jam_harian', 'desc');
        return $this->db->get()->result();
        
    }
    public function get_data_job()
    {
        $this->db->select('*');
        $this->db->from('tbl_job_des');    
        $this->db->order_by('tanggal', 'desc');
        return $this->db->get()->result();
        
    }
    public function get_data_lapangan()
    {
        $this->db->select('*');
        $this->db->from('tbl_tugas_lapangan');    
        $this->db->order_by('tanggal_lapangan', 'desc');
        $this->db->order_by('jam_lapangan', 'desc');
        return $this->db->get()->result();
        
    }
    public function get_data_cuti()
    {
        $this->db->select('*');
        $this->db->from('tbl_cuti');
        $this->db->order_by('id_cuti', 'desc');
        return $this->db->get()->result();
    }
    public function get_data_peminjaman()
    {
        $this->db->select('*');
        $this->db->from('tbl_peminjaman');
        $this->db->order_by('id_peminjaman', 'desc');
        return $this->db->get()->result();
    }
    public function get_data_reseller()
    {
        $this->db->select('*');
        $this->db->from('tbl_reseller');
        $this->db->order_by('id_reseller', 'desc');
        return $this->db->get()->result();
    }
    public function get_data_first_brand()
    {
        $this->db->select('*');
        $this->db->from('tbl_brand');   
        $this->db->where('kategori_brand=1');
        $this->db->order_by('id_brand', 'desc');
        return $this->db->get()->result();
    }
    public function get_data_second_brand()
    {
        $this->db->select('*');
        $this->db->from('tbl_brand');   
        $this->db->where('kategori_brand=2');
        $this->db->order_by('id_brand', 'desc');
        return $this->db->get()->result();
    }
    public function get_data_karyawan(){
        $this->db->select('*');
        $this->db->from('tbl_karyawan');
        $this->db->order_by('id_karyawan', 'desc');
        return $this->db->get()->result();
    }
    public function get_data_pegawai(){
        $this->db->select('*');
        $this->db->from('tbl_pegawai');
        $this->db->order_by('id_pegawai', 'desc');
        return $this->db->get()->result();
    }
    public function get_data_video(){
        $this->db->select('*');
        $this->db->from('tbl_video');
        $this->db->order_by('id_video', 'desc');
        return $this->db->get()->result();
    }
    public function edit_cuti($data)
    {
        $this->db->where('id_cuti', $data['id_cuti']);
        $this->db->update('tbl_cuti', $data);
    }
    public function edit_pinjam($data)
    {
        $this->db->where('id_peminjaman', $data['id_peminjaman']);
        $this->db->update('tbl_peminjaman', $data);
    }
    public function edit_brand($data)
    {
        $this->db->where('id_brand', $data['id_brand']);
        $this->db->update('tbl_brand', $data);
    }
    public function edit_video($data)
    {
        $this->db->where('id_video', $data['id_video']);
        $this->db->update('tbl_video', $data);
    }
}

/* End of file ModelName.php */
?>