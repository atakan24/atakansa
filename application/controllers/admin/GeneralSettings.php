<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GeneralSettings extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('general_model');

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

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/pages/general_settings');
		$this->load->view('admin/footer');
	}
}
public function firmaekle(){
		if (!$this->session->userdata('logged_in'))
		{
			$this->load->view('admin/admin_login');
		}
		else
		{
		$session_data = $this->session->userdata('logged_in');
		$data['adi'] = $session_data['adi'];
		$data['email'] = $session_data['email'];
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/firma_ekle');
		$this->load->view('admin/footer');


	}
}
public function firmaekle1(){
	$settings = array(
	'title' => $this->input->post('title'),
	'keywords' => $this->input->post('keywords'),
	'description' => $this->input->post('description'),
	'firma_adi' => $this->input->post('firma_adi'),
	'email' => $this->input->post('email'),
		'password' => $this->input->post('password'),
			'smtp_server' => $this->input->post('smtp_server'),
				'smtp_port' => $this->input->post('smtp_port')
);
$this->general_model->insert_firma($settings);
redirect('admin/GeneralSettings');
}
public function firmaduzenle(){
	if (!$this->session->userdata('logged_in'))
	{
		$this->load->view('admin/admin_login');
	}
	else
	{
	$session_data = $this->session->userdata('logged_in');
	$data['adi'] = $session_data['adi'];
	$data['email'] = $session_data['email'];
	$query=$this->db->get("firma_setting");
			$data['veri']=$query->result();
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar',$data);
			$this->load->view('admin/pages/firma_duzenle',$data);
			$this->load->view('admin/footer');
}
}
public function firmaduzenle1(){
	$settings = array(
		'title' => $this->input->post('title'),
		'keywords' => $this->input->post('keywords'),
		'description' => $this->input->post('description'),
		'firma_adi' => $this->input->post('firma_adi'),
		'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
				'smtp_server' => $this->input->post('smtp_server'),
					'smtp_port' => $this->input->post('smtp_port')
);
$this->general_model->firma_update($settings);
redirect('admin/GeneralSettings');
}

}
