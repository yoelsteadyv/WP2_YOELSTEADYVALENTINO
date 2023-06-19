<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;

class Autentifikasi extends BaseController
{
    public function index()
    {
        // $session = session();
        
        // Jika statusnya sudah login, maka tidak bisa mengakses halaman login alias dikembalikan ke tampilan user
        /*if ($session->get('email')) {
            return redirect()->to('user');
        }

        $validation = \Config\Services::validation();
        $data['judul'] = 'Login';
        $data['user'] = '';

        // Validasi form
        $validation->setRules([
            'email' => 'required|trim|valid_email',
            'password' => 'required|trim'
        ]);
*/
        // if (!$validation->withRequest($this->request)->run()) {
            // echo view('templates/aute_header');
            // echo view('autentifikasi/login');
            // echo view('templates/aute_footer');

            echo view ('autentifikasi/coba');
            echo view ('autentifikasi/coba2'); 
        // } else {
        //     $this->_login();
        // }
    }
}
