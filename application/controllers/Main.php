<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct()
{
	parent::__construct();
$this->load->model('Haber_ekle_model');
}



	public function index()
	{


		$query=$this->db->get('slider');
		$data['veri']=$query->result();
		$queryHaberHit=$this->db->order_by('hit','DESC')->get('haber_tbl');
		$dataHaberHit['veri']=$queryHaberHit->result();
		$query=$this->db->get('hakkimizda');
		$data['hakkimizda']=$query->result();
		$query=$this->db->get('iletisim');
		$data['iletisim']=$query->result();




		$this->load->view('header',$data);
		$this->load->view('slider',$data);
		$this->load->view('index',$dataHaberHit);
		$this->load->view('sidebar');
		$this->load->view('footer',$data);
	}
	public function haber_detay()
	{
		$query=$this->db->get('iletisim');
    $data['iletisim']=$query->result();

		$query=$this->db->get('hakkimizda');
		$data['hakkimizda']=$query->result();

		$id=$this->uri->segment('3');
		$this->Haber_ekle_model->update_hit($id);
		$query=$this->db->get_where('haber_tbl',array("haber_id"=>$id));
		$data['haber_detay']=$query->result(); //haberin detayı için
		$data['veri']=$query->result();//sidebarda haberin başlığı için
		$this->load->view('header',$data);
		$this->load->view('pages/detay',$data);
		$this->load->view('sidebar',$data);
		$this->load->view('footer');

	}

}
