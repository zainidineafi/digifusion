<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAboutTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'content' => [
                'type'       => 'TEXT',
                'null'       => true,
                'comment'    => 'Content for about section',
            ],
            'brand_value' => [
                'type'       => 'TEXT',
                'null'       => true,
                'comment'    => 'Brand values',
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('tb_about');
    }

    public function down()
    {
        $this->forge->dropTable('tb_about');
    }
}
