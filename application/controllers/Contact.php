<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('contact_model');
	}
	public function index()
	{
		$query=$this->db->get('hakkimizda');
		$data['hakkimizda']=$query->result();
		$query=$this->db->get('iletisim');
		$data['iletisim']=$query->result();
		$query=$this->db->get("firma_setting");
		$setting['veri']=$query->result();
		
		$this->load->view('header',$data);
		$this->load->view('pages/contact');
		$this->load->view('footer',$data);
	}
	public function mesaj_ekle(){
		date_default_timezone_set('Europe/Istanbul');
		$adi = $_POST["adi"];
		$telefon = $_POST["telefon"];
		$email = $_POST["email"];
		$mesaj = $_POST["mesaj"];

  $this->contact_model->save($adi,$telefon,$email,$mesaj);
	$this->session->set_flashdata("mesaj_sent","Mesajınız başarılı bir şekilde alindi. Firmamıza gösterdiğiniz ilgi icin teşekkür ederiz.");
	redirect("contact");
	}
}
