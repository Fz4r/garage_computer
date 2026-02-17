<?php

namespace Modules\Admin\Models;

use CodeIgniter\Model;

class ServiceModel extends Model
{
    protected $table            = 'services';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['customer', 'device', 'description', 'status'];
    protected $useTimestamps    = true;
}