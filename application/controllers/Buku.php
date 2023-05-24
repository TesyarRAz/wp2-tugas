<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{
    public function index()
    {
        $data['buku'] = $this->ModelBuku->getBuku()->result_array();

        $this->template->render_admin('admin/buku/index', $data);
    }

    public function create()
    {
        $data['kategori'] = $this->ModelBuku->getKategori()->result_array();

        $this->template->render_admin('admin/buku/create', $data);
    }

    public function store()
    {
        $data = $this->input->post([
            'judul_buku', 'id_kategori', 'pengarang', 'penerbit', 'tahun_terbit', 'isbn', 'stok', 'dipinjam', 'dibooking',
        ]);

        $this->ModelBuku->simpanBuku($data);

        $this->session->set_flashdata('message', 'Berhasil simpan data');

        redirect('buku/index');
    }

    public function edit($id)
    {
        $data = $this->ModelBuku->bukuWhere(['id' => $id])->row_array();
        $data['kategori'] = $this->ModelBuku->getKategori()->result_array();

        $this->template->render_admin('admin/buku/edit', $data);
    }

    public function update($id)
    {
        $data = $this->input->post([
            'judul_buku', 'id_kategori', 'pengarang', 'penerbit', 'tahun_terbit', 'isbn', 'stok', 'dipinjam', 'dibooking',
        ]);

        $this->ModelBuku->updateBuku($data, ['id' => $id]);

        $this->session->set_flashdata('message', 'Berhasil simpan data');

        redirect('buku/index');
    }

    public function destroy($id)
    {
        $this->ModelBuku->hapusBuku(['id' => $id]);

        $this->session->set_flashdata('message', 'Berhasil hapus data');

        redirect('buku/index');
    }
}
