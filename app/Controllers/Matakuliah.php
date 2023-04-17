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
        $validation = \Config\Services::validation();
        $validation->setRules([
            'kode' => [
                'label'  => 'Kode Matakuliah',
                'rules'  => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Kode Matakuliah Harus diisi',
                    'min_length' => 'Kode terlalu pendek'
                ]
            ],
            'nama' => [
                'label'  => 'Nama Matakuliah',
                'rules'  => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Nama Matakuliah Harus diisi',
                    'min_length' => 'Nama terlalu pendek'
                ]
            ],
            'sks' => [
                'label'  => 'SKS',
                'rules'  => 'required|numeric',
                'errors' => [
                    'required' => 'SKS harus diisi',
                    'numeric' => 'SKS harus diisi dengan angka'
                ]
            ]
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return view('view-form-matakuliah', [
                'validation' => $validation
            ]);
        }

        $data = [
            'kode' => $this->request->getPost('kode'),
            'nama' => $this->request->getPost('nama'),
            'sks' => $this->request->getPost('sks')
        ];

        return view('view-data-matakuliah', $data);
    }
}
