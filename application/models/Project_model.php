<?php
	class Project_model extends CI_Model{

		public function login($table,$where){
			$this->db->select('*');
			$this->db->from($table);
			$this->db->where($where);
			return $query = $this->db->get();
		}


		public function jumlahdata($table, $nis){
			$this->db->select('count(siswa_nis) as jumlah');
			$this->db->from($table);
			$this->db->where($nis);
			return $query = $this->db->get()->row_array();
		}

		public function jumlahnilaipengetahuan($table, $nis){
			$this->db->select('sum((nh_sms1*0.6)+(pts_sms1*0.2)+(pas_sms1*0.2)) as jumlah');
			$this->db->from($table);
			$this->db->where($nis);
			return $query = $this->db->get()->row_array();
		}

		public function jumlahnilaiketerampilan($table, $nis){
			$this->db->select('sum((nPraktik_sms1+nProyek_sms1+nProduk_sms1)/3) as jumlah');
			$this->db->from($table);
			$this->db->where($nis);
			return $query = $this->db->get()->row_array();
		}

		public function daftarnilaisikap($table, $nis){
			$this->db   ->select('deskS_sms1')
						->from($table)
						->where($nis)
						->or_where('mapel_id = 2');
			return $query = $this->db->get()->row_array();
		}

		public function daftarnilaisms1($table, $nis){

			$this->db->select('*');
			$this->db->from($table);
			$this->db->join('tbl_mapel' ,  'tbl_mapel.mapel_id = tbl_transkrip_sms1.mapel_id');
			$this->db->join('tbl_guru', 'tbl_guru.guru_id = tbl_transkrip_sms1.guru_sms1');
			$this->db->where($nis);
			$this->db->order_by('mapel_urut', 'asc');

			return $query = $this->db->get()->result_array();
		}


		public function daftarnilaisms2($table, $nis){

			$this->db->select('*');
			$this->db->from($table);
			$this->db->join('tbl_mapel' ,  'tbl_mapel.mapel_id = tbl_transkrip_sms2.mapel_id');
			$this->db->join('tbl_guru', 'tbl_guru.guru_id = tbl_transkrip_sms2.guru_sms1');
			$this->db->where($nis);
			$this->db->order_by('mapel_urut', 'asc');

			return $query = $this->db->get()->result_array();
		}

		public function daftarnilaisms3($table, $nis){

			$this->db->select('*');
			$this->db->from($table);
			$this->db->join('tbl_mapel' ,  'tbl_mapel.mapel_id = tbl_transkrip_sms3.mapel_id');
			$this->db->join('tbl_guru', 'tbl_guru.guru_id = tbl_transkrip_sms3.guru_sms1');
			$this->db->where($nis);
			$this->db->order_by('mapel_urut', 'asc');

			return $query = $this->db->get()->result_array();
		}

		public function daftarnilaisms4($table, $nis){

			$this->db->select('*');
			$this->db->from($table);
			$this->db->join('tbl_mapel' ,  'tbl_mapel.mapel_id = tbl_transkrip_sms4.mapel_id');
			$this->db->join('tbl_guru', 'tbl_guru.guru_id = tbl_transkrip_sms4.guru_sms1');
			$this->db->where($nis);
			$this->db->order_by('mapel_urut', 'asc');

			return $query = $this->db->get()->result_array();
		}
		
		public function daftarnilaisms5($table, $nis){

			$this->db->select('*');
			$this->db->from($table);
			$this->db->join('tbl_mapel' ,  'tbl_mapel.mapel_id = tbl_transkrip_sms5.mapel_id');
			$this->db->join('tbl_guru', 'tbl_guru.guru_id = tbl_transkrip_sms5.guru_sms1');
			$this->db->where($nis);
			$this->db->order_by('mapel_urut', 'asc');

			return $query = $this->db->get()->result_array();
		}

		public function daftarnilaisms6($table, $nis){

			$this->db->select('*');
			$this->db->from($table);
			$this->db->join('tbl_mapel' ,  'tbl_mapel.mapel_id = tbl_transkrip_sms6.mapel_id');
			$this->db->join('tbl_guru', 'tbl_guru.guru_id = tbl_transkrip_sms6.guru_sms1');
			$this->db->where($nis);
			$this->db->order_by('mapel_urut', 'asc');

			return $query = $this->db->get()->result_array();
		}

		public function datasiswa($table, $nis){
			$this->db->select('*');
			$this->db->from($table);
			$this->db->where($nis);

			return $query = $this->db->get()->row_array();

		}

		public function gantipassword($nis,$post){
			$this->db->where('username', $nis);
			$this->db->update('user_siswa', $post);
			return $this->db->affected_rows();
		}

		public function updatedatasiswa($username, $post){
			$this->db->where('siswa_nis', $username);
			$this->db->update('tbl_siswa', $post);
			return $this->db->affected_rows();
		}

	}

?>
