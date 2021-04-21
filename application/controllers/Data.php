<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Kp_model');
		$this->load->library('form_validation');



	}

	public function index()
	{
		
		
		$data['title'] = 'Dashboard UID Banten';
		$data['judul'] = 'Data Pengusahaan-Buku Pengusahaan';
		$data['namafile']  = $this->Kp_model->getAllData1();
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array(); 

		if ($this->input->post('keyword')){
			$data['namafile'] = $this->Kp_model->cariData1();
		}
		$this->load->view('Template/Header',$data);
		$this->load->view('Template/sidebar',$data);
		$this->load->view('Template/topbar',$data);
		$this->load->view('Data/index',$data);
		$this->load->view('Template/Footer');
		
		
	}	
	


	public function tambah(){
		$data['title'] = 'Dashboard UID Banten';
		$data['judul'] = 'Data Pengusahaan-Buku Pengusahaan';
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();


		$this->form_validation->set_rules('nama_file','Nama_File','required');
		if($this->form_validation->run()== FALSE){
			$this->load->view('Template/Header',$data);
			$this->load->view('Template/sidebar',$data); 
			$this->load->view('Template/topbar',$data); 
			$this->load->view('Data/tambah'); 
			$this->load->view('Template/Footer');

		}else{
			
			$config['upload_path'] ='./assets/pdf';
		    $config['allowed_types'] ='pdf|jpg|jpeg|gif';
            
		    $this->load->library('upload',$config);
		    if(!$this->upload->do_upload('file')){
				// echo "Upload Gagal" ; die();
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
	  			wrong password !
				</div>');
		 	}
		   else{
				$data=array('',$this->upload->data());
				
			}

			$this->Kp_model->tambahfile1();
			$this->session->set_flashdata('flash','Ditambahkan');
			redirect('Data');
		}
	}

   public function hapus($id){
		$this->Kp_model->hapusfile1($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('Data');
	}

	public function lihatfile($id){
		$data['title'] = 'Dashboard UID Banten';
		$data['judul'] = 'Data Pengusahaan-Buku Pengusahaan';
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();
		$data['km'] = $this->Kp_model->getDataById1($id);
		$this->load->view('Template/Header',$data);
		$this->load->view('Template/sidebar',$data); 
		$this->load->view('Template/topbar',$data); 
				
		$this->load->view('Data/lihatfile',$data); 
		$this->load->view('Template/Footer');

	}


// PENJUALAN TREN
	public function tren()
	{
		$data['title'] = 'Dashboard UID Banten';
		$data['judul'] = 'Data Pengusahaan -Penjualan Tren';
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();
		$this->load->view('Template/Header',$data);
		$this->load->view('Template/sidebar',$data);
		$this->load->view('Template/topbar',$data);
		$this->load->view('Data/tren',$data);
		$this->load->view('Template/Footer');
		
		
		
	}

// PENJUALAN KOMPOSISI
	public function komposisi()
	{
		$data['title'] = 'Dashboard UID Banten';
		$data['judul'] = 'Data Pengusahaan -Penjualan Komposisi';
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();
		$this->load->view('Template/Header',$data);
		$this->load->view('Template/sidebar',$data);
		$this->load->view('Template/topbar',$data);
		$this->load->view('Data/komposisi',$data);
		$this->load->view('Template/Footer');
		
		
		
	}

// LISTRIK PEDESAAN
	public function listrik()
	{
		$data['title'] = 'Dashboard UID Banten';
		$data['judul'] = 'Data Pengusahaan-Listrik Pedesaan';
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();
		$this->load->view('Template/Header',$data);
		$this->load->view('Template/sidebar',$data);
		$this->load->view('Template/topbar',$data);
		$this->load->view('Data/listrik',$data);
		$this->load->view('Template/Footer');
		
		
		
	}

}

