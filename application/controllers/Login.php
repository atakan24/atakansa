
	<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
			$this->load->model('Uye_model');
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
	public function login()
	{
		$user=$this->input->post('uye_tc');
		$sifre=$this->input->post('uye_sifre');
		$result = $this->Uye_model->login($user,$sifre);
		if($result) {
             $sess_array = array();
             foreach($result as $row) {
                 $sess_array = array(
				 'uye_id' => $row->uye_id,
				 'uye_tc' => $row->uye_tc,
				 'uye_sifre' => $row->uye_sifre
				 );
       	 $this->session->set_userdata('logged_in', $sess_array);
				 $this->index();
                 }
          		return TRUE;
          }
		  else
		  {
            $hata= 'Invalid username or password';
			$this->load->view('login');
            return FALSE;
          }
	}
	function logout() {
				$this->session->unset_userdata('logged_in');
				$this->session->sess_destroy();
				$this->index();
		}
}
