<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableAgen extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_agen' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'jumlah_customer' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],

        ]);
        $this->forge->addKey('id_agen', true);
        $this->forge->createTable('agen');
    }

    public function down()
    {
        $this->forge->dropTable('agen');
    }
}
