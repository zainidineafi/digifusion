<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPenulisAndSinopsisToTbBlog extends Migration

    {
        public function up()
        {
            $this->forge->addColumn('tb_blog', [
                'penulis' => [
                    'type' => 'VARCHAR',
                    'constraint' => 100,
                    'null' => true,
                ],
                'sinopsis' => [
                    'type' => 'VARCHAR',
                    'constraint' => 255,
                    'null' => true,
                ],
            ]);
        }
    
        public function down()
        {
            $this->forge->dropColumn('tb_blog', 'penulis');
            $this->forge->dropColumn('tb_blog', 'sinopsis');
        }
    }

