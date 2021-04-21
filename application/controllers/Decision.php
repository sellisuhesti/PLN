<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Decision extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Kp_model');
		$this->load->library('form_validation');



	}

	public function profil()
	{
		
		
		$data['title'] = 'Dashboard UID Banten';
		$data['judul'] = 'Decision Supporting Data-Profil Risiko';
		$data['namafile']  = $this->Kp_model->getAllData2();
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array(); 

		if ($this->input->post('keyword')){
			$data['namafile'] = $this->Kp_model->cariData2();
		}
		$this->load->view('Template/Header',$data);
		$this->load->view('Template/sidebar',$data);
		$this->load->view('Template/topbar',$data);
		$this->load->view('Decision/profil',$data);
		$this->load->view('Template/Footer');
		
		
	}	
	


	public function tambah(){
		$data['title'] = 'Dashboard UID Banten';
		$data['judul'] = 'Decision Supporting Data-Profil Risiko';
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();


		$this->form_validation->set_rules('nama_file','Nama_File','required');
		if($this->form_validation->run()== FALSE){
			$this->load->view('Template/Header',$data);
			$this->load->view('Template/sidebar',$data); 
			$this->load->view('Template/topbar',$data); 
			$this->load->view('Decision/tambah'); 
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

			$this->Kp_model->tambahfile2();
			$this->session->set_flashdata('flash','Ditambahkan');
			redirect('Decision/profil');
		}
	}

   public function hapus($id){
		$this->Kp_model->hapusfile2($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('Decision/profil');
	}

	public function lihatfile($id){
		$data['title'] = 'Dashboard UID Banten';
		$data['judul'] = 'Decision Supporting Data-Profil Risiko';
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();
		$data['profilrisiko'] = $this->Kp_model->getDataById2($id);
		$this->load->view('Template/Header',$data);
		$this->load->view('Template/sidebar',$data); 
		$this->load->view('Template/topbar',$data); 
				
		$this->load->view('Decision/lihatfile',$data); 
		$this->load->view('Template/Footer');

	}


// REALISASI KERJA MANAJEMEN
	public function realisasi()
	{
		$data['title'] = 'Dashboard UID Banten';
		$data['judul'] = 'Decision Supporting Data-Rencana Kerja Manajemen';
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();
		$this->load->view('Template/Header',$data);
		$this->load->view('Template/sidebar',$data);
		$this->load->view('Template/topbar',$data);
		$this->load->view('Decision/realisasi',$data);
		$this->load->view('Template/Footer');
		
		
		
	}

// TAB KEPEGAWAIAN
	public function absensi()
	{
		$data['title'] = 'Dashboard UID Banten';
		$data['judul'] = 'Kepegawaian-Absensi Pegawai';
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();
		$this->load->view('Template/Header',$data);
		$this->load->view('Template/sidebar',$data);
		$this->load->view('Template/topbar',$data);
		$this->load->view('Decision/absensi',$data);
		$this->load->view('Template/Footer');
		
		
		
	}


}

