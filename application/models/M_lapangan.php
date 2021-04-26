
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lapangan extends CI_Model {

    public function add($data)
    {
        $this->db->insert('tbl_tugas_lapangan', $data);
    }

    public function get_data($noreg)
    {
        
        $this->db->select('*');
        $this->db->from('tbl_tugas_lapangan');
        $this->db->where('noreg',$noreg);
        $this->db->order_by('id_tugas_lapangan', 'desc');
        return $this->db->get()->result();
        
    }
    public function edit($data)
    {
        $this->db->where('id_tugas_lapangan', $data['id_tugas_lapangan']);
        $this->db->update('tbl_tugas_lapangan', $data);
        
    }
    public function delete($data)
    {
        $this->db->where('id_tugas_lapangan', $data['id_tugas_lapangan']);
        $this->db->delete('tbl_tugas_lapangan', $data);        
    }
    

}

/* End of file ModelName.php */
?>