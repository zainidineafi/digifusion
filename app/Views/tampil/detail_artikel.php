<?= $this->extend('layout/app'); ?>

<?= $this->section('head'); ?>
<!-- Tambahkan Meta Deskripsi -->
<meta name="description" content="Baca artikel menarik tentang Diggers. Temukan detail artikel dan artikel terkait dengan deskripsi lengkap, gambar menarik, dan informasi publikasi. Dapatkan wawasan lebih dalam tentang topik yang menarik melalui koleksi artikel kami.">
<?= $this->endsection(); ?>

<?= $this->section('content'); ?>

<!-- banner -->
<section class="hero-section text-center" style="background-color: #4BB3BF; padding: 40px 20px; border-radius: 30px;">
    <div class="container">
        <h1 style="font-size: 3rem; color: #FFFFFF; text-decoration: underline;">Detail Article</h1>
        <p style="color: #FFFFFF; margin-bottom: 40px; font-size: 1.2rem;">Read some of the existing articles about Diggers</p>
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

    .article-detail-img {
        max-width: 100%;
        height: auto;
    }

    .btn-back:hover {
        color: #F7C433;
    }

    .article-content {
        margin-top: 20px;
        line-height: 1.6;
    }

    .related-article-img {
        object-fit: cover;
        width: 80px;
        height: 80px;
        border-radius: 50%;
    }

    .submenu-card {
        display: flex;
        align-items: center;
        padding: 10px;
        background-color: #F9F9F9;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .submenu-card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .btn-read-more:hover {
        color: #F7C433;
    }

    .article-header h2 {
        margin-bottom: 10px;
    }
</style>

<!-- Detail Artikel -->
<section class="article-detail" style="margin-top: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card-img-wrapper" style="padding: 10px; background-color: #f9f9f9;">
                    <img src="<?= base_url('uploads/articles/' . $article['foto_artikel']); ?>" class="article-detail-img" alt="<?= $article['judul_artikel']; ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="article-header" style="padding-left: 20px;">
                    <h2 style="font-size: 2rem; color: #333;"><?= $article['judul_artikel']; ?></h2>
                    <p class="card-text" style="font-size: 0.9rem; color: #999;">Created at: <?= date('d M Y', strtotime($article['created_at'])); ?></p>
                    <div class="article-content">
                        <?= $article['deskripsi_artikel']; ?>
                    </div>
                    <a href="<?= base_url('artikel'); ?>" class="btn-custom mt-3">Back</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Baca Juga -->
<section class="related-articles" style="margin-top: 50px;">
    <div class="container">
        <h3 class="related-title">Related Articles</h3>
        <div class="related-row">
            <?php foreach ($related_articles as $related): ?>
                <div class="related-card">
                    <div class="related-img-wrapper">
                        <img src="<?= base_url('uploads/articles/' . $related['foto_artikel']); ?>" class="related-img" alt="<?= $related['judul_artikel']; ?>">
                    </div>
                    <div class="related-content">
                        <h5 class="related-article-title"><?= $related['judul_artikel']; ?></h5>
                        <a href="<?= base_url('artikel/detail/' . $related['slug']); ?>" class="btn-custom">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
    /* Related Articles Styling */
    .related-articles {
        background-color: #f9f9f9;
        padding: 30px 15px;
    }

    .related-title {
        font-size: 2rem;
        color: #333;
        margin-bottom: 20px;
        text-align: center;
    }

    .related-row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }

    .related-card {
        display: flex;
        flex-direction: column;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        width: 100%;
        max-width: 300px;
        text-align: left;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .related-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
    }

    .related-img-wrapper {
        flex-shrink: 0;
        width: 100%;
        height: 180px;
        overflow: hidden;
    }

    .related-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .related-content {
        padding: 15px;
    }

    .related-article-title {
        font-size: 1.2rem;
        color: #333;
        margin-bottom: 10px;
    }

    .related-read-more {
        font-size: 0.9rem;
        color: #4BB3BF;
        text-decoration: none;
        font-weight: normal;
        display: inline-block;
        margin-top: 5px;
        transition: color 0.3s ease;
    }

    .related-read-more:hover {
        color: #2b8c98;
    }

    .related-read-more span {
        color: black;
        font-weight: normal;
        text-decoration: none;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .related-row {
            flex-direction: column;
            align-items: center;
        }
    }
</style>

<style>
    .btn-custom {
        display: inline-block;
        background-color: #4BB3BF;
        color: #fff;
        text-align: center;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
        font-weight: bold;
        transition: background-color 0.3s, background-image 0.5s linear;
        border: none;
        cursor: pointer;
    }

    .btn-custom:hover {
        background: linear-gradient(90deg,
                #4BB3BF,
                #D8E8E9,
                #FC915E);
        background-size: 300%;
        /* Untuk efek gerakan */
        animation: gradient-slide 5s infinite linear;
        /* Gradasi bergerak */
    }

    /* Animasi gradasi */
    @keyframes gradient-slide {
        0% {
            background-position: 0%;
        }

        100% {
            background-position: 100%;
        }
    }
</style>

<?= $this->endsection('content'); ?>