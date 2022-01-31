<?php  

	class Model_Kategori extends CI_Model{

		public function data_anak(){
			return $this->db->get_where('barang',array('kategori' => 'Baju Anak'));
		}

		public function data_dewasa(){
			return $this->db->get_where('barang',array('kategori'=>'Baju Dewasa'));
		}

		public function data_sepatu(){
			return $this->db->get_where('barang',array('kategori'=>'sepatu'));
		}

		public function data_jam(){
			return $this->db->get_where('barang',array('kategori'=>'Jam Tangan'));
		}

		public function data_celana(){
			return $this->db->get_where('barang',array('kategori'=>'celana'));
		}

		

	}