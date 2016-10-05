<?php


class Iletisim_model extends CI_MODEL{

  function __construct()
  {
    parent::__construct();
  }
  function iletisim_insert($data)
  {
    if($this->db->insert('iletisim',$data));
    {
      return true;
    }
  }
  function iletisim_update($data,$id)
  {
    $this->db->where('id',$id);
    $this->db->update('iletisim',$data);
    return true;
  }
  function delete($id)
  {
    $this->db->where('id',$id);
    $this->db->delete('iletisim');
    return true;
  }
}
   ?>
