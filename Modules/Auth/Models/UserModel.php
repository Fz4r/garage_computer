<?php

namespace Modules\Auth\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users'; // Nama tabel di database
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['username', 'password']; // Kolom yang boleh diisi manual
    protected $useTimestamps    = true; // Otomatis mengisi created_at & updated_at
}