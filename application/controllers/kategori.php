<?php  

class Kategori extends CI_Controller{
	public function baju_anak(){
	$data['baju_anak'] = $this->model_kategori->data_anak()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('baju_anak',$data);
		$this->load->view('template/footer');	
	}

	public function baju_dewasa(){
		$data['baju_dewasa'] = $this->model_kategori->data_dewasa()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('baju_dewasa',$data);
		$this->load->view('template/footer');	
	}

	public function sepatu(){
		$data['sepatu'] = $this->model_kategori->data_sepatu()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('sepatu',$data);
		$this->load->view('template/footer');	
	}

	public function jam_tangan(){
		$data['jam_tangan'] = $this->model_kategori->data_jam()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('jam_tangan',$data);
		$this->load->view('template/footer');	
	}

	public function celana(){
		$data['celana'] = $this->model_kategori->data_celana()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('celana',$data);
		$this->load->view('template/footer');	
	}
}