<?php 
	
	class Dashboard_Admin extends CI_Controller{
		public function index(){
			$this->load->view('template-admin/header');
			$this->load->view('template-admin/sidebar');
			$this->load->view('admin/dashboard');
			$this->load->view('template-admin/footer');
		}
	}