
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_harian extends CI_Model {

    public function add($data)
    {
        $this->db->insert('tbl_tugas_harian', $data);
    }

    public function get_data($noreg)
    {
        
        $this->db->select('*');
        $this->db->from('tbl_tugas_harian');
        $this->db->where('noreg',$noreg);
        $this->db->order_by('id_tugas_harian', 'desc');
        return $this->db->get()->result();
        
    }
    public function edit($data)
    {
        $this->db->where('id_tugas_harian', $data['id_tugas_harian']);
        $this->db->update('tbl_tugas_harian', $data);
        
    }
    public function delete($data)
    {
        $this->db->where('id_tugas_harian', $data['id_tugas_harian']);
        $this->db->delete('tbl_tugas_harian', $data);        
    }
    

}

/* End of file ModelName.php */
?>