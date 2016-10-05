<?php
class Haber_ekle_model extends CI_Model{

	function __construct() {
		parent::__construct();
	}

	public function haber_ekle($baslik,$onyazi,$icerik,$url,$title,$keywords,$description)
	{
		$this->db->set('haber_baslik', $baslik);
		$this->db->set('haber_onyazi', $onyazi);
		$this->db->set('haber_icerik', $icerik);
		$this->db->set('title', $title);
		$this->db->set('keywords', $keywords);
		$this->db->set('description', $description);
		$this->db->set('haber_resim', $url);
		$this->db->insert('haber_tbl'); // Öğrenciler tablosuna dataları ekle
		{
			return true;
		}
	}
	public function haber_sil($id)
	{
		if ($this->db->delete("haber_tbl","haber_id=".$id)) // Öğrenciler tablosundan belirtilen "id" li datayı siler
		{
			return true;
		}
	}
	public function update_haber($data,$id)  // İd si ve datası gönderileb verileri günceller
	{
		$this->db->where('haber_id', $id);
		$this->db->update('haber_tbl' ,$data);

		return true;
	}
	function update_hit($id)
{
	$this->db->where('haber_id',$id);
	$this->db->set('hit','hit+1',FALSE);
	$this->db->update('haber_tbl');
	return true;
}
}

?>
