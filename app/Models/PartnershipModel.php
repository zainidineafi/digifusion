<?php

namespace App\Models;

use CodeIgniter\Model;

class PartnershipModel extends Model
{
    protected $table      = 'tb_partnership';
    protected $primaryKey = 'id';
    
    // Kolom-kolom yang dapat diisi
    protected $allowedFields = ['nama_perusahaan', 'deskripsi_perusahaan', 'kolaborasi', 'masa', 'logo'];
}
