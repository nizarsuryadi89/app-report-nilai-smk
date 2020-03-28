<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Siswa extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('Project_model');
			$this->load->library('session');

			if ($this->session->userdata('masuk') == TRUE){

			}
			else{
				redirect('login');
			}

		}

		public function index(){
			$data = array(
					'judul' => 'Halaman Utama'
			);

			echo "hello";
			
		}

		public function gantipassword(){

			
				if ($this->input->post()){
					$username = $this->session->userdata('username');
					
					$post['password'] = $this->input->post('passwordbaru');
					 
					$id = $this->Project_model->gantipassword($username, $post);

					$where = array(
						'siswa_nis' => $this->session->userdata('username')
						);

					$data = array(
						'judul' 	=> 'Halaman Utama',
						'datasiswa' => $this->Project_model->datasiswa('tbl_siswa', $where)
					);
						
					$this->load->view('siswa/view_index', $data);


				}
		

		}

		public function updatedatasiswa(){
			if ($this->session->userdata('masuk') == TRUE){
				if ($this->input->post()){
					$username = $this->session->userdata('username');
					$post['siswa_nama'] = $this->input->post('namasiswa');
					$post['siswa_tempatlahir'] = $this->input->post('tempatlahir');
					$post['siswa_tanggallahir'] = $this->input->post('tgllahir');
					$post['siswa_jk'] = $this->input->post('jk');
					$post['siswa_alamat'] = $this->input->post('alamat');
					$post['siswa_hp'] = $this->input->post('nohp');
					$post['siswa_asalsekolah'] = $this->input->post('asalsekolah');
					$post['siswa_email'] = $this->input->post('email');

					$id = $this->Project_model->updatedatasiswa($username, $post);


					$where = array(
						'siswa_nis' => $this->session->userdata('username')
						);

					$data = array(
						'judul' 	=> 'Halaman Utama',
						'datasiswa' => $this->Project_model->datasiswa('tbl_siswa', $where)
					);

					 $this->load->view('siswa/view_index', $data);
				}
			}else{
				echo "Anda Tidak Berhak MASUK HALAMAN INI";
			}
		}

		public function logout(){
			$this->session->set_flashdata('pesanLogout', '<div class="alert alert-danger">Anda Sudah Berhasil Logout</div>');
			$this->session->sess_destroy();
			redirect('login/');

		}

		public function dashboard(){
			
			$username = $this->session->userdata('username');
	
			$data = array(	'nis'		=> $username,
			);

			$where = array(
				'siswa_nis' => $this->session->userdata('username')
			);

			$data = array(
				'judul' 	=> 'Halaman Utama',
				'datasiswa' => $this->Project_model->datasiswa('tbl_siswa', $where)
			);


			 $this->load->view('siswa/view_index', $data);
				
		}
		public function nilai(){
			

			$username = $this->session->userdata('username');
			$where = array(
				'siswa_nis' => $this->session->userdata('username')
			);

			$data = array(	
							'judul'     => 'Nilai Per Semester',
							'datasiswa' => $this->Project_model->datasiswa('tbl_siswa', $where),
							'nis'		=> 'username',
			);

			$this->load->view('nilai/daftar-nilai', $data);
			
		}

		public function nilaisemester($kode){
			
				$where = array(
								'siswa_nis' => $this->session->userdata('username')
				);

				$data = array(	
								'judul'     => 'Nilai Per Semester',
								'semester' 	=> $kode, 
								'datasiswa' => $this->Project_model->datasiswa('tbl_siswa', $where),
								'nis'		=> 'username',
				);

				$where = array(
					'siswa_nis' => $this->session->userdata('username')
				);

				if ($kode == '1'){

					$data['daftarnilai'] = $this->Project_model->daftarnilaisms1('tbl_transkrip_sms1', $where);
					$data['jmldata'] 	 = $this->Project_model->jumlahdata('tbl_transkrip_sms1',$where);
					$data['jmlP'] 	 	= $this->Project_model->jumlahnilaipengetahuan('tbl_transkrip_sms1',$where);
					$data['jmlK'] 	 	= $this->Project_model->jumlahnilaiketerampilan('tbl_transkrip_sms1',$where);
					$data['deskS'] 	 	= $this->Project_model->daftarnilaisikap('tbl_transkrip_sms1',$where);
					
				}
				elseif ($kode == '2'){

					$data['daftarnilai'] = $this->Project_model->daftarnilaisms2('tbl_transkrip_sms2', $where);
					$data['jmldata'] 	 = $this->Project_model->jumlahdata('tbl_transkrip_sms2',$where);
					$data['jmlP'] 	 	= $this->Project_model->jumlahnilaipengetahuan('tbl_transkrip_sms2',$where);
					$data['jmlK'] 	 	= $this->Project_model->jumlahnilaiketerampilan('tbl_transkrip_sms2',$where);
					$data['deskS'] 	 	= $this->Project_model->daftarnilaisikap('tbl_transkrip_sms2',$where);
					
				}
				elseif ($kode == '3'){

					$data['daftarnilai'] = $this->Project_model->daftarnilaisms3('tbl_transkrip_sms3', $where);
					$data['jmldata'] 	 = $this->Project_model->jumlahdata('tbl_transkrip_sms3',$where);
					$data['jmlP'] 	 	= $this->Project_model->jumlahnilaipengetahuan('tbl_transkrip_sms3',$where);
					$data['jmlK'] 	 	= $this->Project_model->jumlahnilaiketerampilan('tbl_transkrip_sms3',$where);
					$data['deskS'] 	 	= $this->Project_model->daftarnilaisikap('tbl_transkrip_sms3',$where);


					
				}
				elseif ($kode == '4'){

					$data['daftarnilai'] = $this->Project_model->daftarnilaisms4('tbl_transkrip_sms4', $where);
					$data['jmldata'] 	 = $this->Project_model->jumlahdata('tbl_transkrip_sms4',$where);
					$data['jmlP'] 	 	= $this->Project_model->jumlahnilaipengetahuan('tbl_transkrip_sms4',$where);
					$data['jmlK'] 	 	= $this->Project_model->jumlahnilaiketerampilan('tbl_transkrip_sms4',$where);
					$data['deskS'] 	 	= $this->Project_model->daftarnilaisikap('tbl_transkrip_sms4',$where);
					
				}
				elseif ($kode == '5'){

					$data['daftarnilai'] = $this->Project_model->daftarnilaisms5('tbl_transkrip_sms5', $where);
					$data['jmldata'] 	 = $this->Project_model->jumlahdata('tbl_transkrip_sms5',$where);
					$data['jmlP'] 	 	= $this->Project_model->jumlahnilaipengetahuan('tbl_transkrip_sms5',$where);
					$data['jmlK'] 	 	= $this->Project_model->jumlahnilaiketerampilan('tbl_transkrip_sms5',$where);
					$data['deskS'] 	 	= $this->Project_model->daftarnilaisikap('tbl_transkrip_sms5',$where);
					
				}
				elseif ($kode == '6'){

					$data['daftarnilai'] = $this->Project_model->daftarnilaisms6('tbl_transkrip_sms6', $where);
					$data['jmldata'] 	 = $this->Project_model->jumlahdata('tbl_transkrip_sms6',$where);
					$data['jmlP'] 	 	= $this->Project_model->jumlahnilaipengetahuan('tbl_transkrip_sms6',$where);
					$data['jmlK'] 	 	= $this->Project_model->jumlahnilaiketerampilan('tbl_transkrip_sms6',$where);
					$data['deskS'] 	 	= $this->Project_model->daftarnilaisikap('tbl_transkrip_sms6',$where);
					
				}
				

				 $this->load->view('nilai/nilaisemester', $data);
			
		}

		
	}
