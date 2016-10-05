<?php


class Hakkimizda_model extends CI_MODEL{

  function __construct()
  {
    parent::__construct();
  }
  function hakkimizda_insert($data)
  {
    if($this->db->insert('hakkimizda',$data));
    {
      return true;
    }
  }
  function hakkimizda_update($data,$id)
  {
    $this->db->where('id',$id);
    $this->db->update('hakkimizda',$data);
    return true;
  }
  function delete($id)
  {
    $this->db->where('id',$id);
    $this->db->delete('hakkimizda');
    return true;
  }
}
   ?>
