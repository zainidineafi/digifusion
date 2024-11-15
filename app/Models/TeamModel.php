<?php

namespace App\Models;

use CodeIgniter\Model;

class TeamModel extends Model
{
    protected $table = 'tb_team';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'name', 'position', 'photo'];

    // Fungsi untuk mendapatkan anggota tim secara acak (limit 3)
    public function getRandomTeamMembers($limit = 3)
    {
        return $this->orderBy('RAND()')->findAll($limit); // Mengambil 3 anggota tim secara acak
    }
}
