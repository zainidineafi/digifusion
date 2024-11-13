<?php
namespace App\Models;
use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $table            = 'tb_berita';
    protected $primaryKey       = 'id_artikel';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['judul_artikel', 'foto_artikel','deskripsi_artikel','created_at'];
}
