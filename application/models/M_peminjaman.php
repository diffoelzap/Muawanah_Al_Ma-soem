
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_peminjaman extends CI_Model {

    public function add($data)
    {
        $this->db->insert('tbl_peminjaman', $data);
    }
    public function get_data($noreg)
    {
        
        $this->db->select('*');
        $this->db->from('tbl_peminjaman');
        $this->db->where('noreg',$noreg);
        $this->db->order_by('id_peminjaman', 'desc');
        return $this->db->get()->result();
        
    }
    public function edit($data)
    {
        $this->db->where('id_peminjaman', $data['id_peminjaman']);
        $this->db->update('tbl_peminjaman', $data);
        
    }
    public function delete($data)
    {
        $this->db->where('id_peminjaman', $data['id_peminjaman']);
        $this->db->delete('tbl_peminjaman', $data);        
    }
}

/* End of file ModelName.php */

?>