<?php

namespace App\Controllers;

use App\Models\Model_latihan1;
use CodeIgniter\Controller;

class Latihan1 extends Controller
{
    public function index()
    {
        echo "Selamat Datang.. selamat belajar Web Programming";
        //$this->load->view('view-latihan1');
    }

    public function penjumlahan($n1, $n2)
    {
        $model = new Model_latihan1();
        $hasil = $model->jumlah($n1, $n2);
        echo "Hasil Penjumlahan dari " . $n1 . " + " . $n2 . " = " . $hasil;
    }
}
