<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cuti extends CI_Model {

    public function add($data)
    {
        $this->db->insert('tbl_cuti', $data);
    }
    public function get_data($noreg)
    {
        
        $this->db->select('*');
        $this->db->from('tbl_cuti');
        $this->db->where('noreg',$noreg);
        $this->db->order_by('id_cuti', 'desc');
        return $this->db->get()->result();
        
    }
    public function edit($data)
    {
        $this->db->where('id_cuti', $data['id_cuti']);
        $this->db->update('tbl_cuti', $data);
        
    }
    public function delete($data)
    {
        $this->db->where('id_cuti', $data['id_cuti']);
        $this->db->delete('tbl_cuti', $data);        
    }
    
}

/* End of file ModelName.php */
?>