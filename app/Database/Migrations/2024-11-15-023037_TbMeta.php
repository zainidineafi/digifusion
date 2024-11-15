<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbMeta extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_seo' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_halaman' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'meta_title_id' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'meta_description_id' => [
                'type'       => 'LONGTEXT',
                'constraint' => '255',
                'null'       => true,
            ],
            'meta_title_en' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'meta_description_en' => [
                'type'       => 'LONGTEXT',
                'constraint' => '255',
                'null'       => true,
            ],
           
        ]);

        $this->forge->addKey('id_seo', true); 
        $this->forge->createTable('tb_meta');
    }

    public function down()
    {
        $this->forge->dropTable('tb_meta');
    }
}
