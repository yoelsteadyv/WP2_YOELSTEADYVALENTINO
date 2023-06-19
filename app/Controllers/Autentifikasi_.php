<?php

namespace App\Controllers;

use App\Models\ModelUser;
//use CodeIgniter\Controller;

class Autentifikasi extends Controller
{
    public function index()
    {
        /*$session = session();
        
        // Jika statusnya sudah login, maka tidak bisa mengakses halaman login alias dikembalikan ke tampilan user
        if ($session->get('email')) {
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

        if (!$validation->withRequest($this->request)->run()) {
            return view('templates/aute_header', $data) .
                view('autentifikasi/login') .
                view('templates/aute_footer');
        } else {
            $this->_login();
        }*/
        return view('templates/aute_header') /*.
                view('autentifikasi/login') .
                view('templates/aute_footer')*/;
    }

    /*private function _login()
    {
        $session = session();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $modelUser = new ModelUser();

        // Cek data user berdasarkan email
        $user = $modelUser->where('email', $email)->first();

        // Jika user ada
        if ($user) {
            // Jika user sudah aktif
            if ($user['is_active'] == 1) {
                // Cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $session->set($data);

                    if ($user['role_id'] == 1) {
                        return redirect()->to('admin');
                    } else {
                        if ($user['image'] == 'default.jpg') {
                            $session->setFlashdata('pesan', '<div class="alert alert-info alert-message" role="alert">Silahkan Ubah Profile Anda untuk Ubah Photo Profil</div>');
                        }
                        return redirect()->to('user');
                    }
                } else {
                    $session->setFlashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password salah!!</div>');
                    return redirect()->to('autentifikasi');
                }
            } else {
                $session->setFlashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">User belum diaktifasi!!</div>');
                return redirect()->to('autentifikasi');
            }
        } else {
            $session->setFlashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Email tidak terdaftar!!</div>');
            return redirect()->to('autentifikasi');
        }
    }*/
}
