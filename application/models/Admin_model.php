<?php
class admin_model extends CI_Model {
	function __construct() {
         parent::__construct();
      }
	 function login($username,$password)
	  {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('adi', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get();
        if($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
     }
		 
}
