<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username'   => 'admin',
            // Kita gunakan password_hash agar password tersimpan dengan aman (terenkripsi)
            'password'   => password_hash('admin123', PASSWORD_DEFAULT),
            'created_at' => date('Y-m-d H:i:s'),
        ];

        // Masukkan data ke tabel users
        $this->db->table('users')->insert($data);
    }
}
