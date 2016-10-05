<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Site_Ekle_Model');
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
		$query=$this->db->get("site_ayar");
		$data['site_ad']=$query->result();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/pages/site_liste',$data);
		$this->load->view('admin/footer');
	}
}
	public function yeni_site_ekle(){
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
		$this->load->view('admin/pages/site_ekle');
		$this->load->view('admin/footer');

	}}
	public function site_adi_ekle()
	{
		$this->load->model('Site_Ekle_Model'); // Kayıt işleminin yapılacağı model


		$site_adi = $_POST["site_adi"];
		$site_slogan = $_POST["site_slogan"];

		$this->Site_Ekle_Model->site_ekle($site_adi,$site_slogan); // ekleme fonk. dataları gönder

		redirect("admin/Site_Controller");
	}

	public function site_sil(){

		$this->load->model('Site_Ekle_Model');
		$id = $this->uri->segment('4');
		$this->Site_Ekle_Model->site_sil($id);
		redirect("admin/Site_controller");
	}
	public function site_duzenle() // Düzenleme formuna bilgi gönderme
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
		$this->load->view('admin/pages/site_duzenle',$data); // Dataları belirtilen view dosyasına gönder
		$this->load->view('admin/footer');
	}
}
	public function site_guncelle() // Düzenleme formundan gelen verileri güncelleme
	{
		$id = $this->uri->segment('4'); // Parametre ile gönderilen "id" yi al
		$this->load->model('Site_Ekle_Model');
		// Kayıt işleminin yapılacağı model


		// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
		$data=array(
			'site_adi' => $this->input->post('site_adi'),
			'site_slogan' => $this->input->post('site_slogan'),



		);

		// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
		$this->Site_Ekle_Model->update_site($data,$id); //  fonksiypnua dataları id ile  gönder

		//redirect("ogrenci"); // Öğrenci ana sayfasına gönder
		$this->index();

	}
}




?>
