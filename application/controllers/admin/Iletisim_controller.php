<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iletisim_controller extends CI_Controller {
  function __construct()
	{
		parent::__construct();
    $this->load->model('Iletisim_model');
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
    $this->load->view('admin/pages/iletisim');
    $this->load->view('admin/footer');
  }

  }
  public function iletisim_ekle()
  {

												// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
												$data=array(
                          'adres'=>$this->input->post('adres'),
                          'telefon'=>$this->input->post('telefon'),
                          'email'=>$this->input->post('email'));


												// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
												$this->Iletisim_model->iletisim_insert($data); //  fonksiypnua dataları id ile  gönder
												$this->index();
  }
  public function duzenle()
  {	if (!$this->session->userdata('logged_in'))
		{
			$this->load->view('admin/pages/admin_login');
		}
		else
		{
		$session_data = $this->session->userdata('logged_in');
		$data['adi'] = $session_data['adi'];
		$data['email'] = $session_data['email'];
    $query=$this->db->get('iletisim');
    $data['veri']=$query->result();
    $this->load->view('admin/header');
    $this->load->view('admin/sidebar',$data);
    $this->load->view('admin/pages/iletisim_duzenle',$data);
    $this->load->view('admin/footer');
  }
  }
  public function guncelle()
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
		$id=$this->uri->segment('4');
		$query=$this->db->get_where('iletisim',array("id"=>$id));
		$data['veri']=$query->result();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/pages/iletisim_guncelle',$data);
		$this->load->view('admin/footer');
  }
	}
  public function update()
  {
    $id=$this->uri->segment('4');
		$query=$this->db->get_where('iletisim',array("id"=>$id));
		$data['veri']=$query->result();
            // form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
            $data=array(
              'adres'=>$this->input->post('adres'),
              'telefon'=>$this->input->post('telefon'),
              'email'=>$this->input->post('email'),
            );

            // Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
            $this->Iletisim_model->iletisim_update($data,$id); //  fonksiypnua dataları id ile  gönder
            $this->duzenle();


  }
  public function sil()
  {
    $id=$this->uri->segment('4');
    $this->Iletisim_model->delete($id);
    $this->duzenle();
  }
}
