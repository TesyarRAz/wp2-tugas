<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		if ($this->session->has_userdata('email'))
		{
			redirect('welcome/user');
		}

		$this->load->view('page-utama');
	}

	public function user()
	{
		$data['jumlah_anggota'] = $this->ModelUser->totalUser();
		$data['stok_buku_terdaftar'] = $this->ModelBuku->totalStokBukuTerdaftar();
		$data['buku_yang_dipinjam'] = $this->ModelBuku->totalBukuDipinjam();
		$data['buku_yang_dibooking'] = $this->ModelBuku->totalBukuDibooking();

		$this->template->render_admin('admin/index', $data);
	}
}
