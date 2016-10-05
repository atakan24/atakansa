<?php
class Kitap_ekle_model extends CI_Model{

	function __construct() {
		parent::__construct();
	}

	public function kitap_ekle($ktp_isbn,$ktp_adi,$ktp_yazaradi,$ktp_yayin_tarih,$ktp_icerik)
	{
		$this->db->set('ktp_isbn', $ktp_isbn);
		$this->db->set('ktp_adi', $ktp_adi);
		$this->db->set('ktp_yazaradi', $ktp_yazaradi);
		$this->db->set('ktp_yayin_tarih', $ktp_yayin_tarih);
		$this->db->set('ktp_icerik', $ktp_icerik);
		$this->db->insert('ktp_tbl'); // Öğrenciler tablosuna dataları ekle
		{
			return true;
		}
	}
	public function kitap_sil($id)
	{
		if ($this->db->delete("ktp_tbl","id=".$id)) // Öğrenciler tablosundan belirtilen "id" li datayı siler
		{
			return true;
		}
	}
	public function update_kitap($data,$id)  // İd si ve datası gönderileb verileri günceller
	{
		$this->db->where('id', $id);
		$this->db->update('ktp_tbl' ,$data);

		return true;
	}
}

?>
