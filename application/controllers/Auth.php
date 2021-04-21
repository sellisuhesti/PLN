<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		
	}
	public function index(){
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','trim|required');
		if($this->form_validation->run ()== false){
			$data['title'] = 'Login Page';
			$this->load->view('Template/Header',$data);
			$this->load->view('auth/login');
			$this->load->view('Template/Footer');
		}else{
			//validasi sukses
			$this->_login();
		}
		
	}
	

	private function _login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', array('email' => $email))->row_array();

		if($user){ 
			//user ada
			if(password_verify($password,$user['password'])){
				$data = array('email' => $user['email']);
				$this->session->set_userdata($data);
				redirect('Home');
			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
	  			wrong password !
				</div>');
				redirect('auth');
			}
		}else{
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
  			Email is not Registered !
			</div>');
			redirect('auth');
		}
	}


	public function registrasi(){
		$this->form_validation->set_rules('name','Name','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password1','Password','required|trim|min_length[6]|matches[password2]');
		$this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');
		
		if($this->form_validation->run() == false){
			$data['title'] = 'User Registration';
			$this->load->view('Template/Header',$data);
			$this->load->view('auth/registrasi');
			$this->load->view('Template/Footer');
		}else{
			$data =  array(
				'name' => htmlspecialchars($this->input->post('name',true)),
				'email' => htmlspecialchars($this->input->post('email',true)),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'date_created' => time()
			
			);
			
				

			$this->db->insert('user',$data);
			$this->session->set_flashdata('message','<div class="alert alert-secondary" role="alert">
  			Congratulation your account has been created. Please Login !
			</div>');
			redirect('auth');
		}
	
	}

	public function logout(){
		$this->session->unset_userdata('email');
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
  			You have been logged out! !
			</div>');
			redirect('auth');
	}
}
