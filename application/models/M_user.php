<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class m_user extends CI_Model {

    public function get_slide(){
        $this->db->select('*');
        $this->db->from('tbl_slide');
        $this->db->order_by('id_slide', 'asc');
        return $this->db->get()->result();
    }

    public function data_slide($id_slide){
        $this->db->select('*');
        $this->db->from('tbl_slide');
        $this->db->where(array('id_slide' => $id_slide));
        return $this->db->get()->row();
    }
    public function get_pegawai(){
        $this->db->select('*');
        $this->db->from('tbl_pegawai');
        $this->db->order_by('id_pegawai', 'asc');
        return $this->db->get()->result();
    }
    public function get_video(){
        $this->db->select('*');
        $this->db->from('tbl_video');
        $this->db->order_by('id_video', 'asc');
        return $this->db->get()->row();
    }
    public function edit_slide($data){
        $this->db->where('id_slide', $data['id_slide']);
        $this->db->update('tbl_slide', $data);
    }
}
