<?php
class Uye_model extends CI_Model {
	function __construct() {
         parent::__construct();
      }
	 function login($username,$password)
	  {
        $this->db->select('*');
        $this->db->from('uye_tbl');
        $this->db->where('uye_tc', $username);
        $this->db->where('uye_sifre', $password);
        $this->db->limit(1);
        $query = $this->db->get();
        if($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
     }

}
