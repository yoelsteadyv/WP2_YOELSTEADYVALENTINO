<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBuku extends Model
{
    // manajemen buku
    public function getBuku()
    {
        return $this->db->table('buku')->get()->getResultArray();
    }

    public function bukuWhere($where)
    {
        return $this->db->table('buku')->getWhere($where)->getRowArray();
    }

    public function simpanBuku($data = null)
    {
        return $this->db->table('buku')->insert($data);
    }

    public function updateBuku($data = null, $where = null)
    {
        return $this->db->table('buku')->update($data, $where);
    }

    public function hapusBuku($where = null)
    {
        return $this->db->table('buku')->delete($where);
    }

    public function total($field, $where)
    {
        $this->db->selectSum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }
        $query = $this->db->get('buku');
        $row = $query->getRowArray();
        return $row[$field];
    }

    // manajemen kategori
    public function getKategori()
    {
        return $this->db->table('kategori')->get()->getResultArray();
    }

    public function kategoriWhere($where)
    {
        return $this->db->table('kategori')->getWhere($where)->getRowArray();
    }

    public function simpanKategori($data = null)
    {
        return $this->db->table('kategori')->insert($data);
    }

    public function hapusKategori($where = null)
    {
        return $this->db->table('kategori')->delete($where);
    }

    public function updateKategori($where = null, $data = null)
    {
        return $this->db->table('kategori')->update($data, $where);
    }

    // join
    public function joinKategoriBuku($where)
    {
        $this->db->select('buku.id_kategori,kategori.kategori');
        $this->db->from('buku');
        $this->db->join('kategori', 'kategori.id = buku.id_kategori');
        $this->db->where($where);
        return $this->db->get()->getResultArray();
    }
}
