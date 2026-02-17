<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateServicesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'customer'    => ['type' => 'VARCHAR', 'constraint' => '100'],
            'device'      => ['type' => 'VARCHAR', 'constraint' => '100'],
            'description' => ['type' => 'TEXT'],
            'status'      => [
                'type'       => 'ENUM',
                'constraint' => ['Pending', 'Proses', 'Selesai'],
                'default'    => 'Pending'
            ],
            'created_at'  => ['type' => 'DATETIME', 'null' => true],
            'updated_at'  => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('services');
    }

    public function down()
    {
        //
    }
}
