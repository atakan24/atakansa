<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iletisim extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$query=$this->db->get('iletisim');
		$data['iletisim']=$query->result();
		$query=$this->db->get('hakkimizda');
		$data['hakkimizda']=$query->result();
		$queryThird=$this->db->order_by('hit', 'DESC')->get('haber_tbl');
		$dataTwo['veri']=$queryThird->result();
		$this->load->view('header',$data);
		$this->load->view('pages/iletisim',$data);
		$this->load->view('sidebar',$dataTwo);
		$this->load->view('footer',$data);
	}
}
