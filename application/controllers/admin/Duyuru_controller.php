<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Duyuru_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Duyuru_ekle_model');
		$this->load->database();
	}

	public function index()
	{		if (!$this->session->userdata('logged_in'))
			{
				$this->load->view('admin/pages/admin_login');
			}
			else
			{
			$session_data = $this->session->userdata('logged_in');
			$data['adi'] = $session_data['adi'];
	    $data['email'] = $session_data['email'];
		$query=$this->db->get("duyuru_tbl"); // ogrenciler tablasonu veritananından çek
		$data['veri']=$query->result();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/pages/duyurular/duyuru_liste',$data);
		$this->load->view('admin/footer');
	}
}
	public function yeni_duyuru_ekle(){
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
		$this->load->view('admin/pages/duyurular/duyuru_ekle');
		$this->load->view('admin/footer');
}
	}
	public function duyuru_ekle()
	{
		$this->load->model('Duyuru_ekle_model'); // Kayıt işleminin yapılacağı model

		$url = $this->do_upload();
		$baslik = $_POST["duyuru_baslik"];
		$onyazi = $_POST["duyuru_onyazi"];
		$icerik = $_POST["duyuru_icerik"];



		$this->Duyuru_ekle_model->duyuru_ekle($baslik,$onyazi,$icerik,$url); // ekleme fonk. dataları gönder

		redirect("admin/Duyuru_controller");
	}
	private function do_upload(){
		$type = explode('.', $_FILES["resim"]["name"]);
		$type = strtolower($type[count($type)-1]);
		$url = "./images/".uniqid(rand()).'.'.$type;
		if(in_array($type, array("jpg", "jpeg", "gif", "png")))
		if(is_uploaded_file($_FILES["resim"]["tmp_name"]))
		if(move_uploaded_file($_FILES["resim"]["tmp_name"],$url))
		return $url;
		return "";

	}
	public function duyuru_sil(){

		$this->load->model('Duyuru_ekle_model');
		$id = $this->uri->segment('4');
		$this->Duyuru_ekle_model->duyuru_sil($id);
		redirect("admin/Duyuru_controller");
	}
	public function duyuru_duzenle() // Düzenleme formuna bilgi gönderme
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
		$query = $this->db->get_where("duyuru_tbl",array("duyuru_id"=>$id)); // Veritabanından ilgili kaydı sorgula getir
		$data['veri'] = $query->result(); //Sonuçları $data değişkenine ata

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/pages/duyurular/duyuru_duzenle',$data); // Dataları belirtilen view dosyasına gönder
		$this->load->view('admin/footer');
	}
}
	public function duyuru_guncelle() // Düzenleme formundan gelen verileri güncelleme
	{
		$id = $this->uri->segment('4'); // Parametre ile gönderilen "id" yi al
		$this->load->model('Duyuru_ekle_model');
		// Kayıt işleminin yapılacağı model


		// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
		$data=array(
			'duyuru_baslik' => $this->input->post('duyuru_baslik'),
			'duyuru_onyazi' => $this->input->post('duyuru_onyazi'),
			'duyuru_icerik' => $this->input->post('duyuru_icerik'),
			'duyuru_resim'  => $url = $this->do_upload(),

		);

		// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
		$this->Duyuru_ekle_model->update_duyuru($data,$id); //  fonksiypnua dataları id ile  gönder

		//redirect("ogrenci"); // Öğrenci ana sayfasına gönder
		redirect("admin/Duyuru_controller");

	}
}




?>
