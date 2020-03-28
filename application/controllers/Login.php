<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Login extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('Project_model');
			$this->load->library('session');

		}

		public function index(){
			$this->load->view('siswa/view_login');
			
		}

		public function auth(){
			if ($this->input->post('username')){
				$username = $this->input->post('username');
				$password = $this->input->post('password');

				$where 	= array(
					'username' => $username,
					'password' => $password
				);
				$ceklogin = $this->Project_model->login('user_siswa', $where);

				if ($ceklogin->num_rows() > 0){
					
					$data = $ceklogin->row_array();
				
					$login = array(
						'masuk' 	=> TRUE,
						'status'	=> '1',
						'username'	=> $data['username']
					);

					$this->session->set_userdata($login);

					 redirect('siswa/dashboard');
				}else{
					$this->session->set_flashdata('pesanLogin', '<div class="alert alert-danger">login gagal, Username/Password Salah</div>');
					 redirect('login');
				}
			}
		
		}
	}
			