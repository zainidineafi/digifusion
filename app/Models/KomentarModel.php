<?php namespace App\Models;

use CodeIgniter\Model;

class KomentarModel extends Model
{
    protected $table = 'tb_komentar';
    protected $allowedFields = ['nama', 'jabatan', 'perusahaan', 'komentar', 'foto'];

    public function getKomentar()
    {
        return $this->findAll();
    }
}
