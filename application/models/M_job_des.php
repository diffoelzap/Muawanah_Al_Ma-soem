<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class m_job_des extends CI_Model {

    public function add($data){
        $this->db->insert('tbl_job_des', $data);
    }
    public function get_data($noreg)
    {
        
        $this->db->select('*');
        $this->db->from('tbl_job_des');
        $this->db->where('noreg',$noreg);
        $this->db->order_by('id_job_des', 'desc');
        return $this->db->get()->result();
        
    }
    public function edit($data)
    {
        $this->db->where('id_job_des', $data['id_job_des']);
        $this->db->update('tbl_job_des', $data);
        
    }
}

/* End of file ModelName.php */
