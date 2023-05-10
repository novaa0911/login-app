<?php

namespace App\Controllers;

class ForgotPasswordController extends BaseController 
{
    
    public function index() {
        return view('forgot_password');
    }
    
    public function process() {
        // Proses logika pemulihan password
        // Anda dapat menambahkan logika pemulihan password di sini, misalnya mengirim email dengan tautan reset password ke pengguna
        
        // Contoh logika sederhana
        $email = $this->input->post('email');
        
        // Lakukan validasi email dan kirim tautan reset password ke email jika email valid
        
        // Contoh validasi sederhana
        if ($email == 'user@example.com') {
            // Kirim email ke email pengguna dengan tautan reset password
            // Anda dapat menggunakan library email CI atau library email lainnya untuk mengirim email
            // Misalnya, menggunakan library email CI:
            
            $this->load->library('email');
            
            $this->email->from('your@example.com', 'Your Name');
            $this->email->to($email);
            
            $this->email->subject('Reset Password');
            $this->email->message('Klik tautan berikut untuk mereset password Anda: ' . site_url('reset-password'));
            
            if ($this->email->send()) {
                // Email terkirim
                $data['message'] = 'Tautan reset password telah dikirim ke email Anda.';
                $this->load->view('forgot_password', $data);
            } else {
                // Gagal mengirim email
                $data['error'] = 'Gagal mengirim email reset password. Silakan coba lagi.';
                $this->load->view('forgot_password', $data);
            }
        } else {
            // Email tidak valid
            $data['error'] = 'Email tidak valid. Silakan masukkan email yang valid.';
            $this->load->view('forgot_password', $data);
        }
    }
    
}
