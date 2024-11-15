<?php

namespace App\Models;

use CodeIgniter\Model;

class AboutModel extends Model
{
    protected $table = 'tb_about';
    protected $primaryKey = 'id';
    protected $allowedFields = ['value'];  // Pastikan field sesuai dengan tabel tb_about

    // Method untuk mengambil semua data brand value
    public function findAllBrandValues()
    {
        return $this->findAll();
    }

    // Method untuk mengambil konten tentang digifusion
    public function findAboutContent()
    {
        return $this->first(); // Mengambil data pertama, bisa disesuaikan
    }
}
