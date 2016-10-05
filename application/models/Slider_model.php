<?php
class Slider_model extends CI_MODEL{

  function __construct()
  {
    parent::__construct();
  }
  function slider_insert($data)
  {
    if($this->db->insert("slider",$data))
    {
      return true;
    }
  }
  function slider_update($data,$id)
  {
    $this->db->where('id',$id);
    $this->db->update('slider',$data);
    return true;
  }
  function delete($id)
  {
    $this->db->where('id',$id);
    $this->db->delete('slider');
    return true;
  }
}
