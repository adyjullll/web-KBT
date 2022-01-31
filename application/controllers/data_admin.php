<?php

class Data_Admin extends CI_Controller
{
	public function index()
	{
		$data['barang'] = $this->model_admin->show_data()->result();
		$this->load->view('template-admin/header');
		$this->load->view('template-admin/sidebar');
		$this->load->view('admin/data_barang', $data);
		$this->load->view('template-admin/footer');
	}

	public function insert_data()
	{
		$nama_brg		= $this->input->post('nama_brg');
		$keterangan		= $this->input->post('keterangan');
		$kategori 		= $this->input->post('kategori');
		$harga			= $this->input->post('harga');
		$stok			= $this->input->post('stok');
		$telepon		= $this->input->post('telepon');

		$gambar = $_FILES['gambar'];

		if ($gambar = '') {
		} else {
			$config['upload_path'] = './uploads';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				echo "Gambar gagal diupload";
				die();
			} else {
				$gambar = $this->upload->data('file_name');
			}
		}

		$data 	= array(
			'nama_brg' => $nama_brg,
			'keterangan'  => $keterangan,
			'kategori' => $kategori,
			'harga' => $harga,
			'stok' => $stok,
			'telepon' => $telepon,
			'gambar' => $gambar
		);

		$table = 'barang';

		$this->model_admin->insert($data, $table);
		redirect('http://localhost/toko-online/data_admin/index');
	}

	public function delete($id)
	{
		$where = array('id_brg' => $id);

		$table = 'barang';
		$this->model_admin->delete_data($where, $table);
		redirect('https://localhost/toko-online/data_admin/index');
	}

	public function edit_data($id)
	{
		$where = array('id_brg' => $id);
		$table = 'barang';
		$data['barang'] = $this->model_admin->edit_data($where, $table)->result_array();

		$this->load->view('template-admin/header');
		$this->load->view('template-admin/sidebar');
		$this->load->view('admin/update_barang', $data);
		$this->load->view('template-admin/footer');
	}

	public function update_data($id)
	{
		$nama_brg		= $this->input->post('nama_brg');
		$keterangan		= $this->input->post('keterangan');
		$kategori 		= $this->input->post('kategori');
		$harga			= $this->input->post('harga');
		$stok			= $this->input->post('stok');
		$telepon		= $this->input->post('telepon');

		$gambar = $_FILES['gambar'];
		var_dump($gambar);

		if ($gambar = '') {
		} else {
			$config['upload_path'] = './uploads';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				echo "Gambar gagal diupload";
				die();
			} else {
				$gambar = $this->upload->data('file_name');
			}
		}

		$data 	= array(
			'nama_brg' => $nama_brg,
			'keterangan'  => $keterangan,
			'kategori' => $kategori,
			'harga' => $harga,
			'stok' => $stok,
			'telepon' => $telepon,
			'gambar' => $gambar
		);

		$table = 'barang';
		$where = array('id_brg' => $id);

		$this->model_admin->update($data, $table, $where);
		redirect('https://localhost/toko-online/data_admin/index');
	}
}
