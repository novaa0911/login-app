<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\Files\UploadedFile;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function process()
    {
        // Ambil data dari input
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Lakukan proses validasi dan autentikasi sesuai kebutuhan
        session()->set('logged_in', true);

        // Ambil data dari database
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM tb_user WHERE email = '$email'");
        $result = $query->getResultArray();

        // Simpan data untuk ditampilkan di halaman landing
        if (!empty($result)) {
            // Data ditemukan, simpan data untuk ditampilkan di halaman landing
            $profilePic = isset($result[0]['profile_pic']) ? $result[0]['profile_pic'] : '';

            $data = [
                'email' => $email,
                'name' => isset($result[0]['nama']) ? $result[0]['nama'] : '', // Misalnya, kolom 'nama' dari tabel 'users'
                'profilePic' => $profilePic // Misalnya, kolom 'profile_pic' dari tabel 'users'
            ];

            return view('landing', $data);
        }
    }
    
    public function logout()
    {
        // Hapus data session untuk logout
        session()->remove('logged_in');

        return redirect()->to('login');
    }
}
