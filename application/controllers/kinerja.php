<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// Load library phpspreadsheet
require('./excel/vendor/autoload.php');

// use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
// End load library phpspreadsheet



class Kinerja extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');  
        $this->load->helper('download');  
		$this->load->model('Kp_model');
		$this->load->library('form_validation');
	
	}

	public function index()
	{
		$data['title'] = 'Dashboard UP3 Cikupa';
		$data['judul'] = 'Kinerja-Kontrak Manajemen';
		$data['namafile']  = $this->Kp_model->getAllData();
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array(); 

		if ($this->input->post('keyword')){
			$data['namafile'] = $this->Kp_model->cariData();
		}

		$this->load->view('Template/Header',$data);
		$this->load->view('Template/sidebar',$data);
		$this->load->view('Template/topbar',$data);
		$this->load->view('Kinerja/index',$data);
		$this->load->view('Template/Footer');		
	}	

	// function untuk menambah file di tab kinerja-kontrak management
	
	public function tambah(){
		$data['title'] = 'Dashboard UP3 Cikupa';
		$data['judul'] = 'Kinerja-Kontrak Manajemen';
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();
		
		$config['upload_path']          = './assets/pdf';
        $config['allowed_types']        = 'pdf';
     
        $this->load->library('upload', $config);

        if ( !$this->upload->do_upload('file'))
         {
            $error = array('error' => $this->upload->display_errors());
         }
         else
         {
           $data = array('upload_data' => $this->upload->data());
         }
		$this->form_validation->set_rules('nama_file','Nama_File','required');
		if($this->form_validation->run()== FALSE){
			
			$this->load->view('Template/Header',$data);
			$this->load->view('Template/sidebar',$data); 
			$this->load->view('Template/topbar',$data); 
			$this->load->view('Kinerja/tambah'); 
			$this->load->view('Template/Footer');

		}else{
			
			$this->Kp_model->tambahfile();
			$this->session->set_flashdata('flash','Ditambahkan');
			redirect('Kinerja');
        }	
    }
	

	public function hapus($id){
		$this->Kp_model->hapusfile($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('Kinerja');
	}
	
	public function lihatfile($id){
		$data['title'] = 'Dashboard UP3 Cikupa';
		$data['judul'] = 'Kinerja-Kontrak Manajemen';
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();
		// $data['km'] = $this->Kp_model->getDataById($id);

		$detail = $this->Kp_model->getDataById($id);
		$data['detail'] =$detail;
		
		$this->load->view('Template/Header',$data);
		$this->load->view('Template/sidebar',$data); 
		$this->load->view('Template/topbar',$data); 		
		$this->load->view('Kinerja/lihatfile',$data); 
		$this->load->view('Template/Footer');
	}


		// INPUT KINERJA
	public function input()
	{
		$data['title'] = 'Dashboard UP3 Cikupa';
		$data['judul'] = 'Kinerja-Input Data Kinerja';
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();		
		$this->load->view('Template/Header',$data);
		$this->load->view('Template/sidebar',$data); 
		$this->load->view('Template/topbar',$data); 
		$this->load->view('Kinerja/inputdata',$data); 
		$this->load->view('Template/Footer');
	}


	public function realisasi()
	{
		$data['title'] = 'Dashboard UP3 Cikupa';
		$data['judul'] = 'Kinerja-Realisasi Kinerja';
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array(); 
		$data['realisasi']  = $this->Kp_model->getAllData2();
		$this->load->view('Template/Header',$data);
		$this->load->view('Template/sidebar',$data);
		$this->load->view('Template/topbar',$data);
		$this->load->view('Kinerja/realisasi');
		$this->load->view('Template/Footer');		
	}	


// function untuk mencari sesuai bulan dan tahun pada tab realisasi
	public function pencarian(){
		$data['title'] = 'Dashboard UP3 Cikupa';
		$data['judul'] = 'Kinerja-Realisasi Kinerja';
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();
	    $bulan =$this->input->post('bulan');
	    $tahun =$this->input->post('tahun');    
	    // $data['realisasi'] = $this->Kp_model->pencarian_d($bulan,$tahun);
	    $data['realisasi'] = $this->Kp_model->pencarian_d($bulan,$tahun)->result_array();
	    $this->load->view('Template/Header',$data);
		$this->load->view('Template/sidebar',$data); 
		$this->load->view('Template/topbar',$data); 
		$this->load->view('Kinerja/datarealisasi'); 
		$this->load->view('Template/Footer'); 
    }


	public function inputbag()
	{
		$data['title'] = 'Dashboard UP3 Cikupa';
		$data['judul'] = 'Kinerja-Input Bagian';
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array(); 
		// $data['realisasi']  = $this->Kp_model->getAllData2();
		$this->load->view('Template/Header',$data);
		$this->load->view('Template/sidebar',$data);
		$this->load->view('Template/topbar',$data);
		$this->load->view('Kinerja/inputbag');
		$this->load->view('Template/Footer');		
	}

	// public function pencarian2(){
	// 	$data['title'] = 'Dashboard UP3 Cikupa';
	// 	$data['judul'] = 'Kinerja-Kontrak Manajemen';
	// 	$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();
	//     $bagian =$this->input->post('bagian');
	//     $data['bagian'] = $this->Kp_model->pencarian_d2($bagian)->result_array();
	//     $this->load->view('Template/Header',$data);
	// 	$this->load->view('Template/sidebar',$data); 
	// 	$this->load->view('Template/topbar',$data); 
	// 	$this->load->view('Kinerja/datainputbag'); 
	// 	$this->load->view('Template/Footer'); 
 //    }


    // function untuk export pdf
    public function pdf(){
    	
    	$this->load->library('dompdf_gen');
    	$data['realisasi'] = $this->Kp_model->tampil_data('realiasi')->result();
		$this->load->view('Kinerja/laporan_pdf',$data); 
		$paper_size = 'A4';
		$orientation = 'potrait';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size,$orientation) ;
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream('laporan_kinerja.pdf',array('Attachment' =>0));

    }

// input pemasaran

	public function inputbagian()
	{
		$data['title'] = 'Dashboard UP3 Cikupa';
		$data['judul'] = 'Kinerja-Input Pemasaran';
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();

		$this->form_validation->set_rules('penjualan','Penjualan','numeric');
		$this->form_validation->set_rules('rupiah_pendapatan','Rupiah_Pendapatan','numeric');
		$this->form_validation->set_rules('penambahan_plg_premium','Penambahan_plg_premium','numeric');
		$this->form_validation->set_rules('ice','Ice','numeric');
		$this->form_validation->set_rules('jml_komplain','Jml_komplain','numeric');
		$this->form_validation->set_rules('aging_komplain','Aging_komplain','numeric');
		if($this->form_validation->run() == FALSE){
			$this->load->view('Template/Header',$data);
			$this->load->view('Template/sidebar',$data); 
			$this->load->view('Template/topbar',$data); 
			$this->load->view('Kinerja/inputbag'); 
			$this->load->view('Template/Footer');
		}

		else {
			$this->Kp_model->tambahbagian();
			redirect('Kinerja/inputbag');
		}
		
	}



	public function inputniaga()
	{
		$data['title'] = 'Dashboard UP3 Cikupa';
		$data['judul'] = 'Kinerja-Input Niaga';
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();

		$this->form_validation->set_rules('saldo_pal','Saldo_pal','numeric');
		$this->form_validation->set_rules('saldo_ts','Saldo_ts','numeric');
		
		if($this->form_validation->run() == FALSE){
			$this->load->view('Template/Header',$data);
			$this->load->view('Template/sidebar',$data); 
			$this->load->view('Template/topbar',$data); 
			$this->load->view('Kinerja/inputbag'); 
			$this->load->view('Template/Footer');
		}

		else {
			$this->Kp_model->tambahniaga();
			redirect('Kinerja/inputbag');
		}
		
	}


	public function inputte()
	{
		$data['title'] = 'Dashboard UP3 Cikupa';
		$data['judul'] = 'Kinerja-Input Transaksi Energi';
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();

		$this->form_validation->set_rules('susut','Susut','numeric');
		$this->form_validation->set_rules('p2tl','P2tl','numeric');
		
		if($this->form_validation->run() == FALSE){
			$this->load->view('Template/Header',$data);
			$this->load->view('Template/sidebar',$data); 
			$this->load->view('Template/topbar',$data); 
			$this->load->view('Kinerja/inputbag'); 
			$this->load->view('Template/Footer');
		}

		else {
			$this->Kp_model->tambahte();
			redirect('Kinerja/inputbag');
		}
		
	}


	public function inputjar()
	{
		$data['title'] = 'Dashboard UP3 Cikupa';
		$data['judul'] = 'Kinerja-Input Jaringan';
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();

		$this->form_validation->set_rules('jml_durasi_padam','Jml_durasi_padam','numeric');
		$this->form_validation->set_rules('kali_padam','Kali_padam','numeric');
		$this->form_validation->set_rules('penurunan_ens','penurunan_ens','numeric');
		if($this->form_validation->run() == FALSE){
			$this->load->view('Template/Header',$data);
			$this->load->view('Template/sidebar',$data); 
			$this->load->view('Template/topbar',$data); 
			$this->load->view('Kinerja/inputbag'); 
			$this->load->view('Template/Footer');
		}

		else {
			$this->Kp_model->tambahjar();
			redirect('Kinerja/inputbag');
		}
		
	}


	public function inputkonstruksi()
	{
		$data['title'] = 'Dashboard UP3 Cikupa';
		$data['judul'] = 'Kinerja-Input Konstruksi';
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();

		$this->form_validation->set_rules('progres_fisik','Progres_fisik','numeric');
		
		if($this->form_validation->run() == FALSE){
			$this->load->view('Template/Header',$data);
			$this->load->view('Template/sidebar',$data); 
			$this->load->view('Template/topbar',$data); 
			$this->load->view('Kinerja/inputbag'); 
			$this->load->view('Template/Footer');
		}

		else {
			$this->Kp_model->tambahkonstruksi();
			redirect('Kinerja/inputbag');
		}
		
	}


	public function inputksa()
	{
		$data['title'] = 'Dashboard UP3 Cikupa';
		$data['judul'] = 'Kinerja-Input KSA';
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();

		$this->form_validation->set_rules('hcr','HCR','numeric');
		$this->form_validation->set_rules('ocr','OCR','numeric');
		$this->form_validation->set_rules('jml_pegawai','Jml_pegawai','numeric');
		
		if($this->form_validation->run() == FALSE){
			$this->load->view('Template/Header',$data);
			$this->load->view('Template/sidebar',$data); 
			$this->load->view('Template/topbar',$data); 
			$this->load->view('Kinerja/inputbag'); 
			$this->load->view('Template/Footer');
		}

		else {
			$this->Kp_model->tambahksa();
			redirect('Kinerja/inputbag');
		}
		
	}

	public function inputren()
	{
		$data['title'] = 'Dashboard UP3 Cikupa';
		$data['judul'] = 'Kinerja-Input Perencanaan';
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();

		$this->form_validation->set_rules('mle','MLE','numeric');
		if($this->form_validation->run() == FALSE){
			$this->load->view('Template/Header',$data);
			$this->load->view('Template/sidebar',$data); 
			$this->load->view('Template/topbar',$data); 
			$this->load->view('Kinerja/inputbag'); 
			$this->load->view('Template/Footer');
		}

		else {
			$this->Kp_model->tambahren();
			redirect('Kinerja/inputbag');
		}
		
	}


	public function pencarian2(){
		$data['title'] = 'Dashboard UP3 Cikupa';
		$data['judul'] = 'Kinerja-Input Bagian';
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();
	    $bagian =$this->input->post('bagian');
	    
	    // $data['realisasi'] = $this->Kp_model->pencarian_d($bulan,$tahun);
	    $data['bagian'] = $this->Kp_model->pencarian_d2($bagian)->result_array();
	    $this->load->view('Template/Header',$data);
		$this->load->view('Template/sidebar',$data); 
		$this->load->view('Template/topbar',$data); 
		$this->load->view('Kinerja/inputbagian'); 
		$this->load->view('Template/Footer'); 
    }


    // DATA PENGUSAHAAN
    public function datap()
	{
		$data['title'] = 'Dashboard UP3 Cikupa';
		$data['judul'] = 'Data Pengusaha-Buku Pengusaha';
		$data['namafile']  = $this->Kp_model->getAllData3();
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array(); 

		if ($this->input->post('keyword')){
			$data['namafile'] = $this->Kp_model->cariData3();
		}

		$this->load->view('Template/Header',$data);
		$this->load->view('Template/sidebar',$data);
		$this->load->view('Template/topbar',$data);
		$this->load->view('Kinerja/datapengusaha',$data);
		$this->load->view('Template/Footer');		
	}	



	public function tambahdatap(){
		$data['title'] = 'Dashboard UP3 Cikupa';
		$data['judul'] = 'Data Pengusaha-Buku Pengusaha';
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();

		$config['upload_path']          = './assets/pdf';
        $config['allowed_types']        = 'pdf';
     
        $this->load->library('upload', $config);

        if ( !$this->upload->do_upload('file'))
         {
            $error = array('error' => $this->upload->display_errors());
         }
        else
         {
           $data = array('upload_data' => $this->upload->data());
         }
		$this->form_validation->set_rules('nama_file','Nama_File','required');
		if($this->form_validation->run()== FALSE){	
			$this->load->view('Template/Header',$data);
			$this->load->view('Template/sidebar',$data); 
			$this->load->view('Template/topbar',$data); 
			$this->load->view('Kinerja/tambahdatap'); 
			$this->load->view('Template/Footer');
		}else{
			$this->Kp_model->tambahfile3();
			$this->session->set_flashdata('flash','Ditambahkan');
			redirect('Kinerja/datap');
        }	
    }
	

	public function hapusdatap($id){
		$this->Kp_model->hapusfile3($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('Kinerja/datap');
	}
	
	

	public function lihatdatap($id){
		$data['title'] = 'Dashboard UP3 Cikupa';
		$data['judul'] = 'Data Pengusaha-Buku Pengusaha';
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();
		$detail = $this->Kp_model->getDataById3($id);
		$data['detail'] =$detail;
		
		$this->load->view('Template/Header',$data);
		$this->load->view('Template/sidebar',$data); 
		$this->load->view('Template/topbar',$data); 		
		$this->load->view('Kinerja/lihatdatap',$data); 
		$this->load->view('Template/Footer');
	}



	// REALISASI KINERJA
	 public function realisasiKinerja()
	{
		$data['title'] = 'Dashboard UP3 Cikupa';
		$data['judul'] = 'Kinerja-Realisasi Kinerja';
		$data['namafile']  = $this->Kp_model->getAllData4();
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array(); 

		if ($this->input->post('keyword')){
			$data['namafile'] = $this->Kp_model->cariData4();
		}

		$this->load->view('Template/Header',$data);
		$this->load->view('Template/sidebar',$data);
		$this->load->view('Template/topbar',$data);
		$this->load->view('Kinerja/realisasikinerja',$data);
		$this->load->view('Template/Footer');		
	}	



	public function tambahrealisasi(){
		$data['title'] = 'Dashboard UP3 Cikupa';
		$data['judul'] = 'Kinerja-Realisasi Kinerja';
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();
		
		$config['upload_path']          = './assets/pdf';
        $config['allowed_types']        = 'pdf|xls|xlsx|csv';
     
        $this->load->library('upload', $config);

        if ( !$this->upload->do_upload('file'))
         {
            $error = array('error' => $this->upload->display_errors());
         }
         else
         {
           $data = array('upload_data' => $this->upload->data());
       //     $full_path = $data['upload_data']['full_path'];
       //     $reader = IOFactory::createReader('Xlsx');
       //     $spreadsheet = $reader->load($full_path);
       //     $writer = IOFactory::createWriter($spreadsheet, 'Html');
  		   // $message = $writer->save('php://output');
  		   
         }

		$this->form_validation->set_rules('nama_file','Nama_File','required');
		if($this->form_validation->run()== FALSE){
			
			$this->load->view('Template/Header',$data);
			$this->load->view('Template/sidebar',$data); 
			$this->load->view('Template/topbar',$data); 
			$this->load->view('Kinerja/tambahrealisasi'); 
			$this->load->view('Template/Footer');

		}else{
			
			$this->Kp_model->tambahfile4();
			$this->session->set_flashdata('flash','Ditambahkan');
			redirect('Kinerja/realisasikinerja');
        }	
    }
	

	public function hapusrealisasi($id){
		$this->Kp_model->hapusfile4($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('Kinerja/realisasikinerja');
	}


	public function lihatrealisasi($id){
		$data['title'] = 'Dashboard UP3 Cikupa';
		$data['judul'] = 'Kinerja-Realisasi Kinerja';
		$data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();
		$detail = $this->Kp_model->getDataById4($id);
		$data['detail'] = $detail;
		
		// $reader = IOFactory::createReader('Xlsx');
		// $spreadsheet = $reader->load();
		// // $spreadsheet = $reader->load('./assets/pdf/tubes_Ai.xlsx');
		
  //       $writer = IOFactory::createWriter($spreadsheet, 'Html');
  // 		$message = $writer->save('php://output');
	
		$this->load->view('Template/Header',$data);
		$this->load->view('Template/sidebar',$data); 
		$this->load->view('Template/topbar',$data); 		
		$this->load->view('Kinerja/lihatrealisasi'); 
		$this->load->view('Template/Footer');

		
	}

	public function read_excel(){
		// $detail = $this->Kp_model->getDataById4($id);
		// $data['detail'] = $detail;
		
		$reader = IOFactory::createReader('Xlsx');
	    // $spreadsheet = $reader->load($file);
		// $spreadsheet = $rea$objDrawing->setPath('images/logo.jpg');der->load('./assets/pdf/'.$detail);
		// $spreadsheet = $reader->load('./assets/pdf/'.$detail['file']);

		$spreadsheet = $reader->load('./assets/pdf/rekap_kinerja.xlsx');

		
        $writer = IOFactory::createWriter($spreadsheet, 'Html');
  		$message = $writer->save('php://output');

	}

	public function download(){
		 // $name = 'proker_sekben.xlsx'; 
		 $detail = $this->Kp_model->getDataById4($id);
		 $data['detail'] = $detail;
		 
         // $data = file_get_contents('./assets/pdf/'.$name);  
        
         force_download($detail);   
         $this->load->view('Template/Header',$data);
		 $this->load->view('Template/sidebar',$data); 
		 $this->load->view('Template/topbar',$data); 		
		 $this->load->view('Kinerja/lihatrealisasi'); 
		 $this->load->view('Template/Footer');
	}

	



}

