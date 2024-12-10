<?= $this->extend('layout/app'); ?>

<?= $this->section('head'); ?>

<!-- Pastikan ini berada di dalam tag <head> -->
<meta name="description" content="Lihat berbagai kemitraan yang telah dilakukan oleh Diggers dengan banyak perusahaan terkemuka. Temukan informasi tentang perusahaan yang berkolaborasi, kolaborasi yang dilakukan, dan durasi kemitraannya. Dapatkan wawasan mendalam tentang mitra-mitra penting yang telah bekerja sama dengan Diggers.">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<!-- banner -->
<section class="hero-section text-center" style="background-color: #4BB3BF; padding: 40px 20px; border-radius: 30px;">
    <div class="container">
        <h1 style="font-size: 3rem; color: #FFFFFF; text-decoration: underline;">Partnership</h1>
        <p style="color: #FFFFFF; margin-bottom: 40px; font-size: 1.2rem;">Many companies have collaborated with Diggers</p>
    </div>
</section>

<style>
    .hero-section {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        height: 50vh;
        padding: 40px 20px; 
    }

    .hero-section h1 {
        font-size: 3rem;
        color: #FFFFFF;
        text-decoration: underline;
    }

    .hero-section p {
        margin-bottom: 40px;
        color: #FFFFFF;
        font-size: 1.2rem; 
    }

    @media (max-width: 768px) {
        .hero-section h1 {
            font-size: 2.5rem; 
        }

        .hero-section p {
            margin-bottom: 20px;
            font-size: 1rem; 
        }

        .hero-section {
            padding: 20px 10px; 
        }
    }

    /* Card styling */
    .card {
        border-radius: 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        margin: 0 auto; 
        max-width: 300px;
        display: flex;
        flex-direction: column;
        padding: 20px;
        overflow: hidden;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
    }

    /* Card carousel styling */
    .card-carousel {
        overflow: hidden;
        white-space: nowrap;
        position: relative;
        width: 100%;
        display: flex;
        justify-content: center;
    }

    /* Animasi untuk scroll carousel */
    @keyframes scroll {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-100%);
        }
    }

    /* Terapkan animasi pada card-carousel */
    .card-carousel-track {
        display: inline-flex;
        animation: scroll 30s linear infinite;
    }

    .card-item {
        min-width: 300px;
        margin: 0 10px;
    }

    @media (max-width: 768px) {
        .card-item {
            min-width: 200px;
        }
    }

    .card-text {
        font-size: 1rem;
        color: #333;
        margin-top: 10px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: normal;
        word-wrap: break-word;
        display: block;
        max-height: 150px;
    }

    .card-img-top {
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        height: 160px;
        object-fit: cover;
    }
</style>

<!-- keuntungan partnership -->
<section class="platform-section py-5 mt-5">
    <style>
        .platform-section {
            position: relative;
            padding: 50px 0;
        }

        .platform-section::before {
            content: "";
            position: absolute;
            top: 60px;
            left: 88px;
            right: 55px;
            bottom: 30px;
            background-color: #4BB3BF;
            z-index: -1;
            border-radius: 10px;
            box-sizing: border-box;
        }

        .platform-section .container {
            max-width: 90%;
            background-color: #EEEEEE;
            padding: 30px;
            border-radius: 10px;
            position: relative;
        }

        .platform-section h2 {
            font-size: 2rem;
            color: #333;
        }

        .platform-section p {
            font-size: 1rem;
            color: #555;
        }

        .platform-section .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .platform-section .card {
            background-color: #fff;
            border: none;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .platform-section .icon img {
            max-width: 100%;
            height: auto;
        }

        .platform-section .card a {
            text-decoration: none;
            font-size: 1rem;
            font-weight: bold;
            color: #4BB3BF;
        }

        .platform-section .card a span {
            font-size: 1.2rem;
        }
    </style>

<div class="container text-center">
    <h2 class="mb-3 font-weight-bold">More than a platform</h2>
    <p class="mb-5">A complete ecosystem to help you succeed.</p>
    <div class="row justify-content-center">
    <?php foreach ($keunggulan as $item): ?>
    <!-- Card -->
    <div class="col-md-3 mb-4 d-flex">
        <div class="card h-100 p-3 text-center">
            <div class="icon mb-3">
                <!-- Tampilkan logo -->
                <img src="<?= base_url('image/' . $item['logo']); ?>" alt="<?= $item['judul']; ?> Icon" style="width: 40px;">
            </div>
            <h5 class="font-weight-bold"><?= $item['judul']; ?></h5>
            <p><?= $item['deskripsi']; ?></p>
        </div>
    </div>
<?php endforeach; ?>

    </div>
</div>

</section>

<!-- card partnership -->
<section class="container mt-5">
    <div class="card-carousel">
        <div class="card-carousel-track">
            <?php if (!empty($partnerships)): ?>
                <?php 
                // Simpan nama perusahaan pertama untuk menduplikat card
                $firstPartner = $partnerships[0]; 
                foreach ($partnerships as $partner): ?>
                    <div class="card-item">
                        <div class="card h-100 shadow-sm">
                            <img src="<?= base_url('image/' . $partner['logo']); ?>" class="card-img-top" alt="<?= $partner['nama_perusahaan']; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= $partner['nama_perusahaan']; ?></h5>
                                <p class="card-text"><?= nl2br(htmlspecialchars($partner['deskripsi_perusahaan'])); ?></p>
                                <p><strong>Collaboration:</strong> <?= htmlspecialchars($partner['kolaborasi']); ?></p>
                                <p><strong>Partnership Duration:</strong> <?= htmlspecialchars($partner['masa']); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- Duplicat card pertama untuk efek carousel -->
                <div class="card-item">
                    <div class="card h-100 shadow-sm">
                        <img src="<?= base_url('image/' . $firstPartner['logo']); ?>" class="card-img-top" alt="<?= $firstPartner['nama_perusahaan']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $firstPartner['nama_perusahaan']; ?></h5>
                            <p class="card-text"><?= nl2br(htmlspecialchars($firstPartner['deskripsi_perusahaan'])); ?></p>
                            <p><strong>Collaboration:</strong> <?= htmlspecialchars($firstPartner['kolaborasi']); ?></p>
                            <p><strong>Partnership Duration:</strong> <?= htmlspecialchars($firstPartner['masa']); ?></p>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <p>No partnerships available at the moment.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>
