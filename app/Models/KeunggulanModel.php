<?php namespace App\Models;

use CodeIgniter\Model;

class KeunggulanModel extends Model {
    protected $table = 'tb_keunggulan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul','clickbait' ,'deskripsi', 'logo'];
}
