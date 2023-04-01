<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Matakuliah extends Controller
{
    public function index()
    {
        return view('view-form-matakuliah');
    }

    public function cetak()
    {
        $data = [
            'kode' => $this->request->getPost('kode'),
            'nama' => $this->request->getPost('nama'),
            'sks' => $this->request->getPost('sks')
        ];

        return view('view-data-matakuliah', $data);
    }
}
