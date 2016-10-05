<?php
class contact_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	public function save($adi,$telefon,$email,$mesaj)
	{
	if(	$this->db->set('adi', $adi) &&
		$this->db->set('telefon', $telefon) &&
				$this->db->set('email', $email) &&
					$this->db->set('mesaj', $mesaj) &&
		$this->db->insert('ziyaretci_mesaj'))
		return true;
    else {
      return false;
    }
	}
	public function delete($id)
	{
		if ($this->db->delete("ziyaretci_mesaj","id=".$id)) // Öğrenciler tablosundan belirtilen "id" li datayı siler
		{
			return true;
		}
	}
}
