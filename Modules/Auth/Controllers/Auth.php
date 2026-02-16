<?php

namespace Modules\Auth\Controllers;

use App\Controllers\BaseController;
use Modules\Auth\Models\UserModel; // Import Model 

class Auth extends BaseController
{
    public function login()
    {
        // Memanggil login.php di dalam ciews
        return view('Modules\Auth\Views\index');
    }

    public function process()
    {
        $session = session();
        $model = new UserModel();

        $username = $this->request->getPost("username");
        $password = $this->request->getPost("password");

        // Cari data user di DB 
        $user = $model->where('username', $username)->first();

        if ($user) {
            // Cek password user
            if (password_verify($password, $user['password'])) {
                
                // Set session (Tanda kalau user sudah login)
                $session->set([
                    'user_id'    => $user['id'],
                    'username'   => $user['username'],
                    'isLoggedIn' => true,
                ]);

                return redirect()->to('/admin');
            } else {
                $session->setFlashdata('msg', 'Password Salah!');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Username tidak ditemukan!');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('msg', 'Anda telah berhasil keluar.');
    }
}