<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hakkimizda_controller extends CI_Controller {
  function __construct()
	{
		parent::__construct();
    $this->load->model('Hakkimizda_model');
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
    $this->load->view('admin/pages/hakkimizda');
    $this->load->view('admin/footer');
  }

  }
  public function hakkimizda_ekle()
  {

												// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
												$data=array(
                          'keywords'=>$this->input->post('keyword'),
                          'title'=>$this->input->post('title'),
                          'description'=>$this->input->post('description'),
													'baslik'=>$this->input->post('baslik'),
													'konu'=>$this->input->post('konu'));

												// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
												$this->Hakkimizda_model->hakkimizda_insert($data); //  fonksiypnua dataları id ile  gönder
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
    $query=$this->db->get('hakkimizda');
    $data['veri']=$query->result();
    $this->load->view('admin/header');
    $this->load->view('admin/sidebar',$data);
    $this->load->view('admin/pages/hakkimizda_duzenle',$data);
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
		$query=$this->db->get_where('hakkimizda',array("id"=>$id));
		$data['veri']=$query->result();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/pages/hakkimizda_guncelle',$data);
		$this->load->view('admin/footer');
  }
	}
  public function update()
  {
    $id=$this->uri->segment('4');
		$query=$this->db->get_where('hakkimizda',array("id"=>$id));
		$data['veri']=$query->result();
            // form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
            $data=array(
              'keywords'=>$this->input->post('keyword'),
              'description'=>$this->input->post('description'),
              'baslik'=>$this->input->post('baslik'),
              'konu'=>$this->input->post('konu'),
            );

            // Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
            $this->Hakkimizda_model->hakkimizda_update($data,$id); //  fonksiypnua dataları id ile  gönder
            $this->duzenle();


  }
  public function sil()
  {
    $id=$this->uri->segment('4');
    $this->Hakkimizda_model->delete($id);
    $this->duzenle();
  }
}
