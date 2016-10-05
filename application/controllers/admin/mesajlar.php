<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class mesajlar extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

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
    $query = $this->db->query('SELECT * FROM ziyaretci_mesaj ORDER BY tarih DESC');
    $data['veri']=$query->result();
	$this->load->view('admin/header');
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/pages/mesajlar',$data);
		$this->load->view('admin/footer');
	}
}
public function mesaj_gonder(){
  if (!$this->session->userdata('logged_in'))
  {
    $this->load->view('admin/admin_login');
  }
  else
  {
       $session_data = $this->session->userdata('logged_in');
       $data['adi'] = $session_data['adi'];
       $data['email'] = $session_data['email'];
       $id=$this->uri->segment('4');
       $query = $this->db->get_where("ziyaretci_mesaj",array("id"=>$id));
       $data['veri'] = $query->result();
       $this->load->view('admin/header');
       $this->load->view('admin/sidebar',$data);
       $this->load->view('admin/pages/mesaj_gonder',$data);
       $this->load->view('admin/footer');
}
}
public function gonder(){
	$query = $this->db->query('SELECT * FROM firma_setting');
	$data=$query->result();
  $adsoy=$this->input->post('ad_soy');
  $email=$this->input->post('kime');
  $mesajim=$this->input->post('mesajim');
  $config = Array(
		'protocol' => 'smtp',
		'smtp_host' => $data[0]->smtp_server,
		'smtp_port' => $data[0]->smtp_port,
		'smtp_user' => $data[0]->email,
		'smtp_pass' => $data[0]->password,
		'mailtype' => 'html',
		'charset' => 'utf-8',
		'wordwrap' => TRUE
		);
		$mesaj="Sayın ". $adsoy." öncelikle ilginizden dolayı teşekkür ederiz . <br><br>" . $mesajim ." <br><br><br>";
    $mesaj.=$data[0]->firma_adi ."<br>";
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from($data[0]->email);
		$this->email->to($email);
		$this->email->subject('Baskent Ece Emlak & Insaat Cevap');
		$this->email->message($mesaj);
         if($this->email->send())
			$this->session->set_flashdata("email_sent","Email başarı ile gönderildi.");
         else
		 {
		  $this->session->set_flashdata("email_sent","Email Gondermede Hata Oluştu.");
		 }
		  redirect('admin/mesajlar');
	}
	public function delete(){

		$this->load->model('contact_model');
		$id = $this->uri->segment('4');
		$this->contact_model->delete($id);
		redirect("admin/mesajlar");
	}
}
