<?php
namespace App\Models;
use CodeIgniter\Model;

class ProfileModel extends Model
{
    protected $table            = 'tb_profil';
    protected $primaryKey       = 'id_profil';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_perusahaan', 'logo_perusahaan', 'deskripsi_perusahaan_in', 'alamat','no_hp', 'email','link_,maps','link_whatsapp','teks_footer'];
}
