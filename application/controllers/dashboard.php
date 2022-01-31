<?php

class Dashboard extends CI_Controller
{
	public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();
		// $this->load->view('template/header');
		// $this->load->view('template/sidebar');
		// $this->load->view('dashboard',$data);
		// $this->load->view('template/footer');

		$this->load->view('detail', $data);
	}

	public function getDataID()
	{
		$id = $this->uri->segment(3);
		$data['data'] = $this->model_barang->find($id);
		Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
		Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
		Header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE'); //method allowed
		header('Access-Control-Allow-Origin: *');
		echo json_encode($data['data']);

		// return $this->output
		//     ->set_content_type('application/json')
		//     ->set_status_header(500)
		//     ->set_output(json_encode($data));
	}

	// public function detail_keranjang(){
	// 	$this->load->view('template/header');
	// 	$this->load->view('template/sidebar');
	// 	$this->load->view('keranjang');
	// 	$this->load->view('template/footer');			
	// }
}
