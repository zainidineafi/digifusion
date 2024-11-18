<?php
namespace App\Controllers;

use App\Models\AboutModel;
use App\Models\FounderModels;
use App\Models\MetaModel;
use App\Models\ProfileModel; // Tambahkan ini untuk mengambil profil/logo perusahaan

class AboutController extends BaseController
{
    protected $aboutModel;
    
    protected $profilModel;

    public function __construct()
    {
        $this->aboutModel = new AboutModel();
       
        $this->profilModel = new ProfileModel(); // Pastikan ProfilModel ada dan berfungsi
    }

    public function about()
    {
        $metamodel = new MetaModel();
        $meta = $metamodel->where('nama_halaman', 'Partnership')->first();
        
         // Load Founder Model
         $founderModel = new FounderModels();

         // Perform a join between Founder and LinkFounder tables
         $founderData = $founderModel
             ->select('tb_founder.*, tb_link_founder.*')  // Select all columns from both tables
             ->join('tb_link_founder', 'tb_link_founder.id_founder = tb_founder.id_founder', 'left')  // Left join
             ->findAll();  // Get all records
 
         // Process data to group links by founder
         $founder = [];
         foreach ($founderData as $item) {
             // Check if the founder already exists in the array
             if (!isset($founder[$item->id_founder])) {
                 $founder[$item->id_founder] = (object) [
                     'id_founder' => $item->id_founder,
                     'nama_founder' => $item->nama_founder,
                     'jabatan_founder' => $item->jabatan_founder,
                     'foto_founder' => $item->foto_founder,
                     'deskripsi_founder' => $item->deskripsi_founder,
                     'links' => [] // Initialize an empty array for links
                 ];
             }
 
             // If there is a link, add it to the founder's links
             if (!empty($item->id_link_founder)) {
                 $founder[$item->id_founder]->links[] = (object) [
                     'link_founder' => $item->link_founder,
                     'icon_link_founder' => $item->icon_link_founder,
                     'nama_link_founder' => $item->nama_link_founder,
                 ];
             }
         }
 
         // Convert the associative array back to a numerically indexed array
         $founder = array_values($founder);
         
        // Ambil data brand values dan konten tentang Digifusion
        $brandValues = $this->aboutModel->findAllBrandValues();
        $aboutContent = $this->aboutModel->findAboutContent();
        
       

        // Ambil data profil (logo perusahaan)
        $profil = $this->profilModel->findAll(); 

        // Kirim semua data ke view
        return view('tampil/about', [
            'meta' => $meta, 
            'founder' => $founder,
            'brandValues' => $brandValues, 
            'aboutContent' => $aboutContent, 
           
            'profil' => $profil // Pastikan ini ditambahkan ke view untuk logo
        ]);
    }
}
