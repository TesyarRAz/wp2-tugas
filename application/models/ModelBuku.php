<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelBuku extends CI_Model
{
    //manajemen buku
    public function getBuku()
    {
        $this->db->select('buku.*, kategori.nama_kategori');
        $this->db->join('kategori', 'kategori.id_kategori = buku.id_kategori');
        return $this->db->get('buku');
    }
    public function bukuWhere($where)
    {
        return $this->db->get_where('buku', $where);
    }
    public function simpanBuku($data = null)
    {
        $this->db->insert('buku', $data);
    }
    public function updateBuku($data = null, $where = null)
    {
        $this->db->update('buku', $data, $where);
    }
    public function hapusBuku($where = null)
    {
        $this->db->delete('buku', $where);
    }
    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }
        $this->db->from('buku');
        return $this->db->get()->row($field);
    }
    //manajemen kategori
    public function getKategori()
    {
        return $this->db->get('kategori');
    }
    public function kategoriWhere($where)
    {
        return $this->db->get_where('kategori', $where);
    }
    public function simpanKategori($data = null)
    {
        $this->db->insert('kategori', $data);
    }
    public function hapusKategori($where = null)
    {
        $this->db->delete('kategori', $where);
    }
    public function updateKategori($where = null, $data = null)
    {
        $this->db->update('kategori', $data, $where);
    }
    //join
    public function joinKategoriBuku($where)
    {
        $this->db->select('buku.id_kategori,kategori.kategori');
        $this->db->from('buku');
        $this->db->join('kategori', 'kategori.id_kategori = buku.id_kategori');
        $this->db->where($where);
        return $this->db->get();
    }

    public function totalStokBukuTerdaftar()
    {
        $this->db->select('SUM(stok) AS stok_buku_terdaftar');

        return $this->db->get('buku')->row()->stok_buku_terdaftar;
    }

    public function totalBukuDipinjam()
    {
        $this->db->select('COUNT(id) AS buku_dipinjam');
        $this->db->where('dipinjam', true);

        return $this->db->get('buku')->row()->buku_dipinjam;
    }

    public function totalBukuDibooking()
    {
        $this->db->select('COUNT(id) AS buku_dibooking');
        $this->db->where('dibooking', true);

        return $this->db->get('buku')->row()->buku_dibooking;
    }
}
