
	<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
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
		$this->load->view('admin/index');
		$this->load->view('admin/footer');
	}
}
	public function login()
	{
		$user=$this->input->post('adi');
		$sifre=$this->input->post('password');
		$result = $this->admin_model->login($user,$sifre);
		if($result) {
             $sess_array = array();
             foreach($result as $row) {
                 $sess_array = array(
				 'id' => $row->id,
				 'adi' => $row->adi,
				 'email' => $row->email
				 );
                 $this->session->set_userdata('logged_in', $sess_array);
				 $this->index();
                 }
          		return TRUE;
          }
		  else
		  {
            $hata= 'Invalid username or password';
			$this->load->view('admin/pages/admin_login');
            return FALSE;
          }
	}
	function logout() {
				$this->session->unset_userdata('logged_in');
				$this->session->sess_destroy();
				$this->index();
		}
}
