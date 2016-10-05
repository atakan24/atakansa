<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uye_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Uye_ekle_model');
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
		$query=$this->db->get("uye_tbl");
		$data['veri']=$query->result();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/pages/Uyeler/uye_liste',$data);
		$this->load->view('admin/footer');
	}
}
	public function yeni_uye_ekle(){
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
		$this->load->view('admin/pages/Uyeler/uye_ekle');
		$this->load->view('admin/footer');

	}}
	public function uye_ekle()
	{
		$this->load->model('Uye_ekle_model'); // Kayıt işleminin yapılacağı model


		$uye_tc = $_POST["uye_tc"];
		$uye_adi = $_POST["uye_adi"];
		$uye_soyadi = $_POST["uye_soyadi"];
    $uye_sifre = $_POST["uye_sifre"];



		$this->Uye_ekle_model->uye_ekle($uye_tc,$uye_adi,$uye_soyadi,$uye_sifre); // ekleme fonk. dataları gönder

		redirect("admin/Uye_Controller");
	}

	public function uye_sil(){

		$this->load->model('Uye_ekle_model');
		$id = $this->uri->segment('4');
		$this->Uye_ekle_model->uye_sil($id);
		redirect("admin/Uye_controller");
	}
	public function uye_duzenle() // Düzenleme formuna bilgi gönderme
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
		$query = $this->db->get_where("uye_tbl",array("uye_id"=>$id)); // Veritabanından ilgili kaydı sorgula getir
		$data['veri'] = $query->result(); //Sonuçları $data değişkenine ata

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/pages/Uyeler/uye_duzenle',$data); // Dataları belirtilen view dosyasına gönder
		$this->load->view('admin/footer');
	}
}
	public function Uye_guncelle() // Düzenleme formundan gelen verileri güncelleme
	{
		$id = $this->uri->segment('4'); // Parametre ile gönderilen "id" yi al
		$this->load->model('Uye_ekle_model');
		// Kayıt işleminin yapılacağı model


		// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
		$data=array(
			'uye_tc' => $this->input->post('uye_tc'),
			'uye_adi' => $this->input->post('uye_adi'),
			'uye_soyadi' => $this->input->post('uye_soyadi'),
      'uye_sifre' => $this->input->post('uye_sifre'),


		);

		// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
		$this->Uye_ekle_model->update_uye($data,$id); //  fonksiypnua dataları id ile  gönder

		//redirect("ogrenci"); // Öğrenci ana sayfasına gönder
		$this->index();

	}
}




?>
