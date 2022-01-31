<?php  

	class Model_Admin extends CI_Model{
		public function show_data(){
			return $this->db->get('barang');
		}

		public function delete_data($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

		public function insert($data,$table){
		     $this->db->insert($table,$data);
		}


		public function edit_data($where,$table){
			return $this->db->get_where($table,$where);
		}

		public function update($data,$table,$where){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

	}