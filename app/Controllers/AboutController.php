<?php
namespace App\Controllers;

use App\Models\AboutModel;
use App\Models\TeamModel;
use App\Models\ProfileModel; // Tambahkan ini untuk mengambil profil/logo perusahaan

class AboutController extends BaseController
{
    protected $aboutModel;
    protected $teamModel;
    protected $profilModel;

    public function __construct()
    {
        $this->aboutModel = new AboutModel();
        $this->teamModel = new TeamModel();
        $this->profilModel = new ProfileModel(); // Pastikan ProfilModel ada dan berfungsi
    }

    public function about()
    {
        // Ambil data brand values dan konten tentang Digifusion
        $brandValues = $this->aboutModel->findAllBrandValues();
        $aboutContent = $this->aboutModel->findAboutContent();
        
        // Ambil data anggota tim
        $teamMembers = $this->teamModel->findAll();

        // Ambil data profil (logo perusahaan)
        $profil = $this->profilModel->findAll(); 

        // Kirim semua data ke view
        return view('tampil/about', [
            'brandValues' => $brandValues, 
            'aboutContent' => $aboutContent, 
            'teamMembers' => $teamMembers,
            'profil' => $profil // Pastikan ini ditambahkan ke view untuk logo
        ]);
    }
}
