<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MetaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_halaman' => 'Home',
                'meta_title_id' => 'Beranda',
                'meta_description_id' => 'Selamat datang di situs resmi kami, temukan informasi terkini tentang layanan kami di sini.',
                'meta_title_en' => 'Home',
                'meta_description_en' => 'Welcome to our official website, find the latest information about our services here.'
            ],
            [
                'nama_halaman' => 'About Us',
                'meta_title_id' => 'Tentang Kami',
                'meta_description_id' => 'Ketahui lebih lanjut tentang sejarah, misi, dan visi perusahaan kami serta tim profesional kami.',
                'meta_title_en' => 'About Us',
                'meta_description_en' => 'Learn more about our company\'s history, mission, vision, and our professional team.'
            ],
            [
                'nama_halaman' => 'Services',
                'meta_title_id' => 'Layanan',
                'meta_description_id' => 'Jelajahi layanan berkualitas yang kami tawarkan untuk memenuhi kebutuhan Anda dengan standar terbaik.',
                'meta_title_en' => 'Services',
                'meta_description_en' => 'Explore our high-quality services designed to meet your needs with the best standards.'
            ],
            [
                'nama_halaman' => 'Blogs',
                'meta_title_id' => 'Blog',
                'meta_description_id' => 'Baca artikel terbaru kami untuk mendapatkan wawasan, tips, dan berita terkini dalam industri ini.',
                'meta_title_en' => 'Blogs',
                'meta_description_en' => 'Read our latest articles for insights, tips, and the latest news in this industry.'
            ],
            [
                'nama_halaman' => 'Contact Us',
                'meta_title_id' => 'Hubungi Kami',
                'meta_description_id' => 'Hubungi kami untuk konsultasi atau pertanyaan lebih lanjut tentang layanan dan produk kami.',
                'meta_title_en' => 'Contact Us',
                'meta_description_en' => 'Contact us for consultations or further inquiries about our services and products.'
            ]
        ];

        // Insert batch data into 'halaman_website' table
        $this->db->table('tb_meta')->insertBatch($data);
    }
}
