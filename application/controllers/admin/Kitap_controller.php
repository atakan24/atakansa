<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kitap_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Kitap_ekle_model');
		$this->load->database();
	}

	public function index()
	{
		if (!$this->session->userdata('logged_in'))
		{
			$this->load->view('admin/pages/admin_login');
		}
		else
		{
		$session_data = $this->session->userdata('logged_in');
		$data['adi'] = $session_data['adi'];
		$data['email'] = $session_data['email'];
		$query=$this->db->get("ktp_tbl"); // ogrenciler tablasonu veritananından çek
		$data['veri']=$query->result();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/pages/Kitaplar/kitap_liste',$data);
		$this->load->view('admin/footer');
	}
}
	public function yeni_kitap_ekle(){
		if (!$this->session->userdata('logged_in'))
		{
			$this->load->view('admin/pages/admin_login');
		}
		else
		{
		$session_data = $this->session->userdata('logged_in');
		$data['adi'] = $session_data['adi'];
    $data['email'] = $session_data['email'];
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/pages/Kitaplar/kitap_ekle');
		$this->load->view('admin/footer');
}
	}
	public function kitap_ekle()
	{
		$this->load->model('Kitap_ekle_model'); // Kayıt işleminin yapılacağı model


		$ktp_isbn = $_POST["ktp_isbn"];
		$ktp_adi = $_POST["ktp_adi"];
		$ktp_yazaradi = $_POST["ktp_yazaradi"];
    $ktp_yayin_tarih = $_POST["ktp_yayin_tarih"];
		$ktp_icerik = $_POST["ktp_icerik"];



		$this->Kitap_ekle_model->kitap_ekle($ktp_isbn,$ktp_adi,$ktp_yazaradi,$ktp_yayin_tarih,$ktp_icerik); // ekleme fonk. dataları gönder

		redirect("admin/Kitap_Controller");
	}

	public function kitap_sil(){

		$this->load->model('Kitap_ekle_model');
		$id = $this->uri->segment('4');
		$this->Kitap_ekle_model->kitap_sil($id);
		redirect("admin/Kitap_controller");
	}
	public function kitap_duzenle() // Düzenleme formuna bilgi gönderme
	{
		if (!$this->session->userdata('logged_in'))
		{
			$this->load->view('admin/pages/admin_login');
		}
		else
		{
		$session_data = $this->session->userdata('logged_in');
		$data['adi'] = $session_data['adi'];
		$data['email'] = $session_data['email'];
		$id = $this->uri->segment('4'); // Parametre ile gönderilen "id" yi al
		$query = $this->db->get_where("ktp_tbl",array("id"=>$id)); // Veritabanından ilgili kaydı sorgula getir
		$data['veri'] = $query->result(); //Sonuçları $data değişkenine ata

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/pages/kitaplar/kitap_duzenle',$data); // Dataları belirtilen view dosyasına gönder
		$this->load->view('admin/footer');
	}
}
	public function kitap_guncelle() // Düzenleme formundan gelen verileri güncelleme
	{
		$id = $this->uri->segment('4'); // Parametre ile gönderilen "id" yi al
		$this->load->model('Kitap_ekle_model');
		// Kayıt işleminin yapılacağı model


		// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
		$data=array(
			'ktp_isbn' => $this->input->post('ktp_isbn'),
			'ktp_adi' => $this->input->post('ktp_adi'),
			'ktp_yazaradi' => $this->input->post('ktp_yazaradi'),
      'ktp_yayin_tarih' => $this->input->post('ktp_yayin_tarih'),
			'ktp_icerik' => $this->input->post('ktp_icerik'),


		);

		// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
		$this->Kitap_ekle_model->update_kitap($data,$id); //  fonksiypnua dataları id ile  gönder

		//redirect("ogrenci"); // Öğrenci ana sayfasına gönder
		$this->index();

	}
}




?>
