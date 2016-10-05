<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Haber_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Haber_ekle_model');
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
		$query=$this->db->get("haber_tbl"); // haber tablosu tablasonu veritananından çek
		$data['veri']=$query->result();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/pages/haberler/haber_liste',$data);
		$this->load->view('admin/footer');
	}
}
	public function yeni_haber_ekle(){
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
		$this->load->view('admin/pages/haberler/haber_ekle');
		$this->load->view('admin/footer');

	}}
	public function haber_ekle()
	{
		$this->load->model('Haber_ekle_model'); // Kayıt işleminin yapılacağı model

		$url = $this->do_upload();
		$baslik = $_POST["haber_baslik"];
		$onyazi = $_POST["haber_onyazi"];
		$icerik = $_POST["haber_icerik"];
		$title = $_POST["title"];
		$keywords = $_POST["keywords"];
		$description = $_POST["description"];



		$this->Haber_ekle_model->haber_ekle($baslik,$onyazi,$icerik,$url,$title,$keywords,$description); // ekleme fonk. dataları gönder

		redirect("admin/Haber_controller");
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
	public function haber_sil(){

		$this->load->model('Haber_ekle_model');
		$id = $this->uri->segment('4');
		$this->Haber_ekle_model->haber_sil($id);
		redirect("admin/Haber_controller");
	}
	public function haber_duzenle() // Düzenleme formuna bilgi gönderme
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
		$query = $this->db->get_where("haber_tbl",array("haber_id"=>$id)); // Veritabanından ilgili kaydı sorgula getir
		$data['veri'] = $query->result(); //Sonuçları $data değişkenine ata

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/pages/haberler/haber_duzenle',$data); // Dataları belirtilen view dosyasına gönder
		$this->load->view('admin/footer');
	}
}
	public function haber_guncelle() // Düzenleme formundan gelen verileri güncelleme
	{
		$id = $this->uri->segment('4'); // Parametre ile gönderilen "id" yi al
		$this->load->model('Haber_ekle_model');
		// Kayıt işleminin yapılacağı model


		// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
		$data=array(
			'haber_baslik' => $this->input->post('haber_baslik'),
			'haber_onyazi' => $this->input->post('haber_onyazi'),
			'haber_icerik' => $this->input->post('haber_icerik'),
			'title' => $this->input->post('title'),
			'keywords' => $this->input->post('keywords'),
			'description' => $this->input->post('description'),
			'haber_resim'  => $url = $this->do_upload(),

		);

		// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
		$this->Haber_ekle_model->update_haber($data,$id); //  fonksiypnua dataları id ile  gönder

		//redirect("ogrenci"); // Öğrenci ana sayfasına gönder
		$this->index();

	}
}




?>
