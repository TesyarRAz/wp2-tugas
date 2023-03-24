<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {
    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }

    public function cetak()
    {
        $data = $this->input->post(['kode', 'nama', 'sks']);

        $this->load->view('view-data-matakuliah', $data);
    }
}
