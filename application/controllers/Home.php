<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		
	}
	public function index()
	{
		$data['title'] = 'Dashboard UID Banten';
		$data['judul'] = '';
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();
		$this->load->view('Template/Header',$data);
		$this->load->view('Template/sidebar',$data);
		$this->load->view('Template/topbar',$data);
		$this->load->view('Home/index',$data);
		$this->load->view('Template/Footer');
		
		
		
	}




}

