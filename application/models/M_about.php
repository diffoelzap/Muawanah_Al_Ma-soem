<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_about extends CI_Model {
    
    public function add($data)
    {
        $this->db->insert('tbl_saran', $data);
    }
    
}

/* End of file ModelName.php */
?>