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
        $this->db->order_by('id_tugas_harian', 'desc');
        return $this->db->get()->result();
        
    }
    public function get_data_lapangan()
    {
        $this->db->select('*');
        $this->db->from('tbl_tugas_lapangan');    
        $this->db->order_by('id_tugas_lapangan', 'desc');
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
}

/* End of file ModelName.php */
?>