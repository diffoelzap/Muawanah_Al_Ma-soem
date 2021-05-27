<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class m_reseller extends CI_Model {

    public function add($data){
        $this->db->insert('tbl_reseller', $data);
    }
}

/* End of file ModelName.php */