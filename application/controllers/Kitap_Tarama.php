<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kitap_Tarama extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function index()
	{
		if (!$this->session->userdata('logged_in'))
		{
			$this->load->view('login');
		}
		else
		{
			$session_data = $this->session->userdata('logged_in');
			$data['uye_tc'] = $session_data['uye_tc'];
			$data['uye_sifre'] = $session_data['uye_sifre'];
			$query=$this->db->get('ktp_tbl');
			$data['kitaplar']=$query->result();
			$this->load->view('pages/kitap_tarama',$data);

	}
}
public function kitap_detay()
{
	$query=$this->db->get('iletisim');
	$data['iletisim']=$query->result();

	$query=$this->db->get('haber_tbl');
	$data['veri']=$query->result();

	$id=$this->uri->segment('3');
	$query=$this->db->get_where('ktp_tbl',array("id"=>$id));
	$data['kitap_detay']=$query->result();

	$query=$this->db->get('hakkimizda');
	$data['hakkimizda']=$query->result();

	$this->load->view('header',$data);
	$this->load->view('pages/kitap_detay',$data);
	$this->load->view('sidebar',$data);
	$this->load->view('footer');

}
}
