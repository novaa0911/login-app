<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Register extends BaseController
{
    public function index()
    {
        return view('register');
    }

    public function process()
    {
        // Validasi input
        $this->validate([
            'email' => 'required|valid_email',
            'name' => 'required',
            'password' => 'required',
            'profile_pic' => 'uploaded[profile_pic]|max_size[profile_pic,512]|is_image[profile_pic]'
        ]);

        // Ambil data dari input
        $email = $this->request->getPost('email');
        $name = $this->request->getPost('name');
        $password = $this->request->getPost('password');
        
        // Menggunakan koneksi MySQL yang sudah tersedia sebelumnya
        $db = \Config\Database::connect();

        // Simpan foto profil di direktori tertentu
        $profilePic = $this->request->getFile('profile_pic');
        $newName = $profilePic->getRandomName();
        $extension = $profilePic->getClientExtension();
        $newNameWithExtension = $newName . '.' . $extension;
        $profilePic->move(ROOTPATH . 'public/uploads', $newNameWithExtension);

        // Mengubah nama file sesuai ID AI pada MySQL
        $query = $db->query("SELECT LAST_INSERT_ID() AS id");
        $result = $query->getRow();
        $id = $result->id;
        $newFileName = $id . '_' . $newNameWithExtension;

        // Mengganti nama file gambar
        rename(ROOTPATH . 'public/uploads/' . $newNameWithExtension, ROOTPATH . 'public/uploads/' . $newFileName);

        // Lakukan proses pendaftaran, misalnya menyimpan data ke database
        // Membuat array data untuk disimpan ke tabel
        $data = [
            'email' => $email,
            'nama' => $name,
            'password' => $password,
            'profile_pic' => $newFileName
        ];

        $db->table('tb_user')->insert($data);

        // Tampilkan pesan sukses
        echo "Pendaftaran berhasil!";

        // Redirect ke halaman lain jika diperlukan
        return view('login');
    }
}
