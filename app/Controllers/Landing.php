<?php

namespace App\Controllers;

class Landing extends BaseController
{
    <a href="<?php echo base_url('logout'); ?>">Logout</a>
    public function logout()
    {
        // Hapus data session untuk logout
        session()->remove('logged_in');
        return redirect()->to('login');
    }
}
