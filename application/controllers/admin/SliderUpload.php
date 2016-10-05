<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SliderUpload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Slider_model');
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

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/pages/slider_ekle',$data);
		$this->load->view('admin/footer');
	}
}

  public function ekle()
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
  		$this->load->view('admin/pages/slider_ekle',$data);
  		$this->load->view('admin/footer');
	}
}
	public function duzenle()
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
		$query=$this->db->get('slider');
		$data['veri']=$query->result();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/pages/slider_duzenle',$data);
		$this->load->view('admin/footer');
	}
}
	public function do_upload()
	{
		$config['upload_path']='./assets/images/';
    $config['allowed_types']='gif|jpg|png';
	
		$this->load->library('upload');
  	$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('slider_ekle', $error);
                }
                else
                {
						            $data = array('upload_data' => $this->upload->data());
												$upload_data = $this->upload->data();
												$file_name =   $upload_data['file_name'];
												// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
												$data=array(
													'src' => $file_name,
													'alt'=>$this->input->post('alt'),
													'description'=>$this->input->post('description')
												);

												// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
												$this->Slider_model->slider_insert($data); //  fonksiypnua dataları id ile  gönder
												$this->index();
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
		$query=$this->db->get_where('slider',array("id"=>$id));
		$data['veri']=$query->result();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/pages/slider_guncelle',$data);
		$this->load->view('admin/footer');
	}
	}
	public function update()
	{
		$config['upload_path']='./assets/images/';
    $config['allowed_types']='gif|jpg|png';
		$config['max_size']=1000;
		$config['max_width']=1600;
		$config['max_height']=1200;
		$id=$this->uri->segment('4');
		$this->load->library('upload');
  	$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('userfile'))
        {
							$veri=array('alt'=>$this->input->post('alt'),'description'=>$this->input->post('description'));
		  				$this->Slider_Model->slider_update($veri,$id);
							$this->duzenle();
	      }
    else
        {
            $data = array('upload_data' => $this->upload->data());
		    		$upload_data = $this->upload->data();
						$file_name =   $upload_data['file_name'];
						// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor

						$data=array(
							'src' => $file_name,
							'alt'=>$this->input->post('alt'),
							'description'=>$this->input->post('description'));

						// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
						$this->Slider_Model->slider_update($data,$id); //  fonksiypnua dataları id ile  gönder
						$this->duzenle();

       }
	}
	public function sil()
	{
		$id=$this->uri->segment('4');
		$this->Slider_model->delete($id);
		$this->duzenle();
	}

}
