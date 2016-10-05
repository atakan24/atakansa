<?php
class Site_Ekle_Model extends CI_Model{

	function __construct() {
		parent::__construct();
	}

	public function site_ekle($site_adi,$site_slogan)
	{
		$this->db->set('site_adi', $site_adi);
		$this->db->set('site_slogan', $site_slogan);

		$this->db->insert('site_ayar');
		{
			return true;
		}
	}
	public function site_sil($id)
	{
		if ($this->db->delete("site_ayar","id=".$id)) // Öğrenciler tablosundan belirtilen "id" li datayı siler
		{
			return true;
		}
	}
	public function update_site($data,$id)  // İd si ve datası gönderileb verileri günceller
	{
		$this->db->where('id', $id);
		$this->db->update('site_ayar' ,$data);

		return true;
	}
}

?>
