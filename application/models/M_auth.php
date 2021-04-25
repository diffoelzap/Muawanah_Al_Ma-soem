<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {
    
    public function login_karyawan($username,$password)
    {
        $this->db->select('*');
        $this->db->from('tbl_karyawan');
        $this->db->where(array('username' => $username,
                               'password' => $password 
                              ));
        return $this->db->get()->row();
        
    }
    public function data_karyawan($id_karyawan)
    {
        $this->db->select('*');
        $this->db->from('tbl_karyawan');
        $this->db->where(array('id_karyawan' => $id_karyawan));
        return $this->db->get()->row();
        
    }
    public function add($data)
    {
        $this->db->insert('tbl_karyawan', $data);
        
    }
    public function edit($data)
    {
        $this->db->where('id_karyawan', $data['id_karyawan']);
        $this->db->update('tbl_karyawan', $data);
        
    }
}

/* End of file ModelName.php */
?>