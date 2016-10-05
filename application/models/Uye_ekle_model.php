<?php
class Uye_ekle_model extends CI_Model{

	function __construct() {
		parent::__construct();
	}

	public function uye_ekle($uye_tc,$uye_adi,$uye_soyadi,$uye_sifre)
	{
		$this->db->set('uye_tc', $uye_tc);
		$this->db->set('uye_adi', $uye_adi);
		$this->db->set('uye_soyadi', $uye_soyadi);
		$this->db->set('uye_sifre', $uye_sifre);
		$this->db->insert('uye_tbl'); // Öğrenciler tablosuna dataları ekle
		{
			return true;
		}
	}
	public function uye_sil($id)
	{
		if ($this->db->delete("uye_tbl","uye_id=".$id)) // Öğrenciler tablosundan belirtilen "id" li datayı siler
		{
			return true;
		}
	}
	public function update_uye($data,$id)  // İd si ve datası gönderileb verileri günceller
	{
		$this->db->where('uye_id', $id);
		$this->db->update('uye_tbl' ,$data);

		return true;
	}
}

?>
