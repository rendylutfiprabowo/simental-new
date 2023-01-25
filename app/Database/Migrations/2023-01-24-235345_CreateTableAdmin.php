<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableAdmin extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'role' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],

        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('admin', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('admin');
    }
}
