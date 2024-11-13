<?= $this->extend('layout/app'); ?>
<?= $this->section('head'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover a wide range of products offered by Diggers, the ultimate integration platform for connecting applications and systems. Explore detailed information about our products to enhance your business operations.">
    <title>Our Products - Diggers</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<!-- Banner -->
<section class="hero-section text-center" style="background-color: #F7C433; padding: 40px 20px; border-radius: 30px;">
    <div class="container">
        <h1 style="font-size: 3rem; color: #FFFFFF; text-decoration: underline;">Product</h1>
        <p style="color: #FFFFFF; margin-bottom: 40px; font-size: 1.2rem;">Find out more about our products at Diggers</p>
    </div>
</section>

<style>
    .hero-section {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        height: 50vh;
        padding: 40px 20px; /* Padding di dalam section */
    }

    .hero-section h1 {
        font-size: 3rem;
        color: #FFFFFF;
        text-decoration: underline;
    }

    .hero-section p {
        margin-bottom: 40px;
        color: #FFFFFF;
        font-size: 1.2rem; /* Ukuran teks lebih besar untuk lebih terlihat */
    }

    @media (max-width: 768px) {
        .hero-section h1 {
            font-size: 2.5rem; /* Ukuran teks lebih kecil di layar kecil */
        }

        .hero-section p {
            margin-bottom: 20px; /* Mengurangi margin di bawah teks di layar kecil */
            font-size: 1rem; /* Ukuran teks deskripsi lebih kecil */
        }

        .hero-section {
            padding: 20px 10px; /* Mengurangi padding di layar kecil */
        }
    }
</style>

<!-- Card Products -->
<section>
    <div class="container text-center">
        <h2 class="mb-3 mt-4 font-weight-bold">The following are the products we provide:</h2>
        <div class="container" style="padding: 0 15px;">
            <div class="row row-cols-1 row-cols-md-3 g-4" id="product-list" style="margin: 0 auto;">
                <?php if(!empty($products)): ?>
                    <?php foreach ($products as $product): ?>
                        <div class="col product-item" data-title="<?= $product['nama_produk_in']; ?>">
                            <div class="card h-100 card-shadow" style="margin: 0 10px;">
                                <img src="<?= base_url('image/' . $product['foto_produk']); ?>" class="card-img-top" alt="<?= $product['nama_produk_in']; ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $product['nama_produk_in']; ?> / <?= $product['nama_produk_en']; ?></h5>
                                    <p class="card-text deskripsi-produk"><?= $product['deskripsi_produk_in']; ?></p>
                                    <a href="<?= base_url('product/detail/' . $product['slug']); ?>" class="btn" style="background-color: #F6C135; color: #FFFFFF; padding: 10px 20px; text-decoration: none;">Detail Produk</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No products found.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- CSS untuk membatasi deskripsi dan efek 3D pada card -->
<style>
    .deskripsi-produk {
        display: -webkit-box;
        -webkit-line-clamp: 4; /* Batasi ke 4 baris */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .card-shadow {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow dasar */
        transition: transform 0.3s, box-shadow 0.3s; /* Transisi untuk efek 3D */
    }

    .card-shadow:hover {
        transform: translateY(-10px) scale(1.05); /* Efek angkat sedikit dan membesar */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); /* Shadow lebih tebal saat hover */
    }
</style>

<?= $this->endSection(); ?>
