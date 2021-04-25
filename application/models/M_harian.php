
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
    

}

/* End of file ModelName.php */
?>