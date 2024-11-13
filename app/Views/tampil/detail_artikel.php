<?=$this->extend('layout/app'); ?>

<?=$this->section('head'); ?>
<!-- Tambahkan Meta Deskripsi -->
<meta name="description" content="Baca artikel menarik tentang Diggers. Temukan detail artikel dan artikel terkait dengan deskripsi lengkap, gambar menarik, dan informasi publikasi. Dapatkan wawasan lebih dalam tentang topik yang menarik melalui koleksi artikel kami.">
<?=$this->endsection(); ?>

<?=$this->section('content'); ?>

<!-- banner -->
<section class="hero-section text-center" style="background-color: #F7C433; padding: 40px 20px; border-radius: 30px;">
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
                    <img src="<?= base_url('image/' . $article['foto_artikel']); ?>" class="article-detail-img" alt="<?= $article['judul_artikel']; ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="article-header" style="padding-left: 20px;">
                    <h2 style="font-size: 2rem; color: #333;"><?= $article['judul_artikel']; ?></h2>
                    <p class="card-text" style="font-size: 0.9rem; color: #999;">Created at: <?= date('d M Y', strtotime($article['created_at'])); ?></p>
                    <div class="article-content">
                        <?= $article['deskripsi_artikel']; ?>
                    </div>
                    <a href="<?= base_url('artikel'); ?>" class="btn btn-back" style="display: inline-block; margin-top: 20px; text-decoration: underline; color: #F6C135; font-weight: bold;">Back</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Baca Juga -->
<section class="related-articles" style="margin-top: 50px;">
    <div class="container">
        <h3 style="font-size: 1.8rem; color: #333; margin-bottom: 20px;">Related articles</h3>
        <div class="row">
            <?php foreach($related_articles as $related): ?>
                <div class="col-md-12">
                    <div class="submenu-card">
                        <div class="submenu-img-wrapper" style="flex-shrink: 0; margin-right: 15px;">
                            <img src="<?= base_url('image/' . $related['foto_artikel']); ?>" class="related-article-img" alt="<?= $related['judul_artikel']; ?>">
                        </div>
                        <div class="submenu-content">
                            <h5 style="font-size: 1rem; color: #333; margin: 0;"><?= $related['judul_artikel']; ?></h5>
                            <a href="<?= base_url('artikel/detail/' . $related['slug']); ?>" class="btn btn-read-more" style="color: #F6C135; text-decoration: none; font-weight: normal;">
    <?= 'Read the article about: ' . '<span style="color: black; font-weight: normal; text-decoration: none;">' . $related['judul_artikel'] . '</span>'; ?>
</a>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?=$this->endsection('content'); ?>
