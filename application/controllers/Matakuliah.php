<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {
    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('kode', 'Kode Matakuliah', 'required|min_length[3]', [
            'required' => 'Kode matakuliah harus diisi',
            'min_length' => 'Kode terlalu pendek',
        ]);
        $this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required|min_length[3]', [
            'required' => 'Nama matakuliah harus diisi',
            'min_length' => 'Nama terlalu pendek',
        ]);
        
        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-matakuliah');
        } else {
            $data = $this->input->post(['kode', 'nama', 'sks']);

            $this->load->view('view-data-matakuliah', $data);
        }
    }
}
