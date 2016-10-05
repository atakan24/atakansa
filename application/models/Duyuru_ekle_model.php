<?php
class Duyuru_ekle_model extends CI_Model{

	function __construct() {
		parent::__construct();
	}

	public function duyuru_ekle($baslik,$onyazi,$icerik,$url)
	{
		$this->db->set('duyuru_baslik', $baslik);
		$this->db->set('duyuru_onyazi', $onyazi);
		$this->db->set('duyuru_icerik', $icerik);
		$this->db->set('duyuru_resim', $url);
		$this->db->insert('duyuru_tbl'); // Öğrenciler tablosuna dataları ekle
		{
			return true;
		}
	}
	public function duyuru_sil($id)
	{
		if ($this->db->delete("duyuru_tbl","duyuru_id=".$id)) // Öğrenciler tablosundan belirtilen "id" li datayı siler
		{
			return true;
		}
	}
	public function update_duyuru($data,$id)  // İd si ve datası gönderileb verileri günceller
	{
		$this->db->where('duyuru_id', $id);
		$this->db->update('duyuru_tbl' ,$data);

		return true;
	}
}

?>
