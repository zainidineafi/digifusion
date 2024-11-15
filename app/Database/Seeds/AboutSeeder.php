<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AboutSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'content'     => 'Digifusion is a leading company in digital solutions, focused on delivering top-notch technology and innovation to drive businesses forward.',
                'value' => 'Diggers is an integration platform that helps connect various applications and systems within a company, ensuring seamless communication and smooth operations. More than just a platform, Diggers acts as your learning partner, supporting your growth and adaptation in the digital world. With a constantly evolving digital platform, Diggers stays with you every step of the way, offering long-term support to meet the ever-changing needs of your business.',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ]
        ];

        // Pastikan bahwa kolom-kolom yang akan diinsert sudah benar
        $this->db->table('tb_about')->insertBatch($data);
    }
}
