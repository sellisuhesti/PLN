<?php

class Kp_model extends CI_model{
	public function getAllData(){
		return $this->db->get('km')->result_array(); //Mengambil data dari database dari tabel km
	}

	public function tambahfile(){
		$data = array(
			"tahun" => $this->input->post('tahun',true),
			"nama_file" => $this->input->post('nama_file',true),
			"file" =>  $_FILES['file']['name']
		);
		$this->db->insert('km',$data);	
	}
     
	public function hapusfile($id){
		$this->db->where('id',$id);
		$this->db->delete('km');
	}


// function untuk melihat data
	public function getDataById($id ){
		return $this->db->get_where('km', array('id' => $id))->row_array();
	}




	public function cariData(){
		$keyword = $this->input->post('keyword',true);
		$this->db->like('nama_file',$keyword);
		$this->db->or_like('tahun',$keyword);
		$this->db->or_like('file',$keyword);
		return $this->db->get('km')->result_array();
	}


	public function getAllData3(){
		return $this->db->get('datapengusaha')->result_array(); //Mengambil data dari database dari tabel km
	}

	public function tambahfile3(){
		$data = array(
			"tahun" => $this->input->post('tahun',true),
			"bulan" => $this->input->post('bulan',true),
			"nama_file" => $this->input->post('nama_file',true),
			"file" =>  $_FILES['file']['name']
		);
		$this->db->insert('datapengusaha',$data);	
	}
 
	public function hapusfile3($id){
		$this->db->where('id',$id);
		$this->db->delete('datapengusaha');
	}


// function untuk melihat data
	public function getDataById3($id ){
		return $this->db->get_where('datapengusaha', array('id' => $id))->row_array();
	}


	public function cariData3(){
		$keyword = $this->input->post('keyword',true);
		$this->db->like('nama_file',$keyword);
		$this->db->or_like('tahun',$keyword);
		$this->db->or_like('bulan',$keyword);
		$this->db->or_like('file',$keyword);
		return $this->db->get('datapengusaha')->result_array();
	}


public function getAllData4(){
		return $this->db->get('realisasi_kinerja')->result_array(); //Mengambil data dari database dari tabel realisasi_kinerja
	}



	public function tambahfile4(){
		$data = array(
			"tahun" => $this->input->post('tahun',true),
			"bulan" => $this->input->post('bulan',true),
			"nama_file" => $this->input->post('nama_file',true),
			"file" =>  $_FILES['file']['name']
		);
		$this->db->insert('realisasi_kinerja',$data);	
	}
 
	public function hapusfile4($id){
		$this->db->where('id',$id);
		$this->db->delete('realisasi_kinerja');
	}




// function untuk melihat data
	public function getDataById4($id ){
		// return $this->db->get_where('realisasi_kinerja', array('id' => $id))->row_array();
		return $this->db->get_where('realisasi_kinerja', array('id' => $id))->row_array();
	}

		public function getDataById5($file){
		// return $this->db->get_where('realisasi_kinerja', array('id' => $id))->row_array();
		return $this->db->get_where('realisasi_kinerja', array('file' => $file))->row_array();
	}


	


	public function cariData4(){
		$keyword = $this->input->post('keyword',true);
		$this->db->like('nama_file',$keyword);
		$this->db->or_like('tahun',$keyword);
		$this->db->or_like('bulan',$keyword);
		$this->db->or_like('file',$keyword);
		return $this->db->get('realisasi_kinerja')->result_array();
	}



// REALISASI KINERJA PEMASARAN
	public function getAllData2(){
		return $this->db->get('realisasi')->result_array(); //Mengambil data dari  dari tabel realisasi
	}

	
	public function get_relasi(){
		$this->db->select('*');
		$this->db->from('pemasaran');
		$this->db->join('niaga','niaga.id_pem=pemasaran.id_pem');
		$this->db->join('transaksi_energi','transaksi_energi.id_te=niaga.id_te');
		$this->db->join('jaringan','jaringan.id_jar=transaksi_energi.id_jar');
		$this->db->join('konstruksi','konstruksi.id_jar=jaringan.id_jar');
		$this->db->join('ksa','ksa.id_k=konstruksi.id_k');
		$query = $this->db->get();
		return $query->result();
 		// return $this->db->get()->result_array();	
	}

 

	public function pencarian_d($bulan,$tahun){
		
		$this->db->where('bulan',$bulan);
	    $this->db->where('tahun',$tahun);	  
	    return $this->db->get('realisasi');
    }


    public function pencarian_d2($bagian){
	    $this->db->where('bagian',$bagian);
	  
	    return $this->db->get('realisasi');
    }

    public function cariData2(){
		$keyword = $this->input->post('keyword',true);
		$this->db->like('bagian',$keyword);
		
		return $this->db->get('realisasi')->result_array();
	}



// INPUT PEMASARAN

	public function tambahbagian(){
		$data = array(
			'bulan'						=> $this->input->post('bulan',true),
			'tahun' 					=> $this->input->post('tahun',true),
			'penjualan'					=> $this->input->post('penjualan',true),
			'penjualan_lk' 				=> $this->input->post('penjualan_lk',true),
			'jml_plg' 					=> $this->input->post('jml_plg',true),
			'rupiah_pendapatan' 		=> $this->input->post('rupiah_pendapatan',true),
			'penambahan_plg_premium' 	=> $this->input->post('penambahan_plg_premium',true),
			'ice' 						=> $this->input->post('ice',true),
			'jml_komplain' 				=> $this->input->post('jml_komplain',true),
			'aging_komplain' 			=> $this->input->post('aging_komplain',true)
			
		);
		
		$this->db->insert('realisasi',$data);
	}

	

	public function tambahniaga(){
		$data = array(	
			'saldo_pal'				=> $this->input->post('saldo_pal',true),
			'saldo_ts' 				=> $this->input->post('saldo_ts',true)
		);
		$this->db->insert('realisasi',$data);	
	}

	public function tambahte(){
		$data = array(
			 'susut' 					=> $this->input->post('susut',true),
			 'p2tl' 					=> $this->input->post('p2tl',true)
		
		);
		$this->db->insert('realisasi',$data);	
	}


	public function tambahjar(){
		$data = array(
			 'jml_durasi_padam' 		=> $this->input->post('jml_durasi_padam',true),
			 'kali_padam' 				=> $this->input->post('kali_padam',true),
			 'penurunan_ens' 			=> $this->input->post('penurunan_ens',true),
		
		);
		$this->db->insert('realisasi',$data);	
	}

	public function tambahkonstruksi(){
		$data = array(
			 'progres_fisik' 		=> $this->input->post('progres_fisik',true)
		);
		$this->db->insert('realisasi',$data);	
	}
	 
	public function tambahksa(){
		$data = array(
			 'hcr' 			=> $this->input->post('hcr',true),
			 'ocr' 			=> $this->input->post('ocr',true),
			 'jml_pegawai' 	=> $this->input->post('jml_pegawai',true)


		);
		$this->db->insert('realisasi',$data);	
	}


	public function tambahren(){
		$data = array(
			 'mle' 			=> $this->input->post('mle',true)
			
		);
		$this->db->insert('realisasi',$data);	
	}


    public function tampil_data(){
    	return $this->db->get('realisasi');
    }


    public function getDataById2($id ){
		return $this->db->get_where('realisasi', array('id' => $id))->row_array();
		
	}
	

}

