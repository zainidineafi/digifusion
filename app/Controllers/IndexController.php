<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use App\Models\ProfileModel;
use App\Models\ArticleModel;
use App\Models\PartnershipModel; 
use App\Models\KomentarModel;
use App\Models\KeunggulanModel;

class IndexController extends BaseController
{
    // Method untuk menampilkan halaman utama
    public function index()
{
    $profilModel = new ProfileModel();
    $profil = $profilModel->findAll();
    
    $keunggulanModel = new KeunggulanModel();
    $keunggulan = $keunggulanModel->findAll();

    // Tambahkan slug untuk setiap keunggulan
    foreach ($keunggulan as &$item) {
        $item['slug'] = url_title($item['judul'], '-', true); // Ganti 'judul' dengan field yang sesuai
    }
    
    $articleModel = new ArticleModel();
    
    // Ambil hanya 3 artikel terbaru
    $artikel = $articleModel->orderBy('created_at', 'DESC')->findAll(3);

    // Tambahkan slug untuk setiap artikel
    foreach ($artikel as &$article) {
        $article['slug'] = url_title($article['judul_artikel'], '-', true);
    }

    // Ambil data komentar untuk ditampilkan di halaman utama
    $komentarModel = new KomentarModel();
    $komentar = $komentarModel->findAll(); // Mengambil semua data komentar

    // Tambahkan slug atau data lain yang dibutuhkan
    foreach ($komentar as &$item) {
        $item['slug'] = url_title($item['nama'], '-', true);
    }

    // Kirim data ke view
    return view('tampil/index', [
        'profil' => $profil,
        'artikel' => $artikel,
        'komentar' => $komentar,
        'keunggulan' => $keunggulan // Pastikan keunggulan dikirim ke view
    ]);
}
    // Method untuk menampilkan halaman about
    public function about()
    {
        $profilModel = new ProfileModel();
        $profil = $profilModel->findAll(); 
        return view('tampil/about', ['profil' => $profil]);
    }

    // Method untuk menampilkan halaman produk
    public function product()
    {
        $profilModel = new ProfileModel();
        $profil = $profilModel->findAll();
        $model = new ProductModel(); // Membuat instance dari ProductModel
        $produk = $model->findAll(); // Mengambil semua produk dari tabel tb_produk
        foreach($produk as &$item) {
            $item['slug'] = url_title($item['nama_produk_in'], '-', true);
        }
        $data['products'] = $produk;
        $data['profil'] = $profil;
        return view('tampil/product', $data); // Memuat view dan mengirimkan data produk
    }

    // Method untuk menampilkan detail produk
    public function productDetail($slug)
    {
        helper('text');
        $model = new ProductModel();
        $modelProfil = new ProfileModel();
        // Mencari produk berdasarkan slug
        $product = $model->findAll();
        $profil = $modelProfil->findAll();
        $produk = null;
        foreach($product as $item) {
            $data['slug'] = url_title($item['nama_produk_in'], '-', true);
            if ($data['slug'] === $slug) {
                $produk = $item;
                break;
            }
        }
        $data['product'] = $produk;
        $data['profil'] = $profil;
        return view('tampil/product_detail', $data);
    }

    // Method untuk menampilkan halaman news atau artikel
    public function artikel()
    {
        $profilModel = new ProfileModel();
        $profil = $profilModel->findAll();
        $data['articles'] = $this->getArticlesWithSlugs();
        $data['profil'] = $profil;
        return view('tampil/artikel', $data);
    }
   
    // Method untuk detail artikel
    public function articleDetail($slug)
    {
        $articles = $this->getArticlesWithSlugs();
        $modelProfil = new ProfileModel();
        $profil = $modelProfil->findAll();

        // Temukan artikel berdasarkan slug
        foreach ($articles as $article) {
            if ($article['slug'] === $slug) {
                $data['article'] = $article;
                $data['profil'] = $profil;

                // Ambil artikel terkait secara acak selain artikel yang sedang dibaca
                $related_articles = array_filter($articles, function($item) use ($article) {
                    return $item['id_artikel'] !== $article['id_artikel']; // Menghindari artikel yang sama
                });

                // Acak artikel terkait
                shuffle($related_articles);

                // Batasi jumlah artikel terkait, misalnya hanya 3
                $data['related_articles'] = array_slice($related_articles, 0, 3);

                break;
            }
        }

        if (!isset($data['article'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Article not found');
        }

        return view('tampil/detail_artikel', $data);
    }

    // Method untuk mengambil artikel dengan slug
    private function getArticlesWithSlugs()
    {
        $articleModel = new \App\Models\ArticleModel();
        $articles = $articleModel->findAll();

        // Tambahkan slug ke setiap artikel
        foreach ($articles as &$article) {
            $article['slug'] = url_title($article['judul_artikel'], '-', true);
        }

        return $articles;
    }

    // Method untuk halaman partnership
    public function partnership()
    {
        // Load model
        $profilModel = new ProfileModel();
        $partnershipModel = new PartnershipModel();
        $keunggulanModel = new KeunggulanModel();
    
        // Ambil data dari database
        $profil = $profilModel->findAll();
        $partnerships = $partnershipModel->findAll();
        $keunggulan = $keunggulanModel->findAll();
    
        // Tambahkan slug ke data partnership
        foreach ($partnerships as &$item) {
            $item['slug'] = url_title($item['nama_perusahaan'], '-', true);
        }
    
        // Kirim data ke view
        $data['profil'] = $profil;
        $data['partnerships'] = $partnerships;
        $data['keunggulan'] = $keunggulan; // Tambahkan data keunggulan
    
        return view('tampil/partnership', $data);
    }
    
    // Method untuk halaman kontak
    public function contactUs()
    {
        $profilModel = new ProfileModel();
        $profileModel = new ProfileModel();
        $profil = $profilModel->findAll();
        $data['profile'] = $profileModel->first();
        $data['profil'] = $profil;
        return view('tampil/contact_us', $data);
    }

    // Method untuk halaman komentar
    public function komentar()
    {
        $komentarModel = new KomentarModel();
        $komentar = $komentarModel->findAll(); // Mengambil semua data komentar

        foreach ($komentar as &$item) {
            $item['slug'] = url_title($item['nama'], '-', true);
        }

        $profilModel = new ProfileModel();
        $profil = $profilModel->findAll(); 

        $data['komentar'] = $komentar;
        $data['profil'] = $profil;
        
        return view('tampil/komentar', $data); 
    }
}    
