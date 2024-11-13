<?php namespace App\Models;

use CodeIgniter\Model;

class ValueModel extends Model {
    protected $table = 'tb_value';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul','clickbait' ,'deskripsi', 'logo'];
}
