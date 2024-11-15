<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TeamSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'      => 'John Doe',
                'position'  => 'Project Manager',
                'photo'     => 'k1.jpeg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'      => 'Jane Smith',
                'position'  => 'Lead Developer',
                'photo'     => 'k4.jpeg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'      => 'Emily Johnson',
                'position'  => 'UI/UX Designer',
                'photo'     => 'k3.jpeg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Insert data ke tabel tb_team
        $this->db->table('tb_team')->insertBatch($data);
    }
}
