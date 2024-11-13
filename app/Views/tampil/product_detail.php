<?= $this->extend('layout/app'); ?>
<?= $this->section('head'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore the details of <?= $product['nama_produk_in']; ?> at Diggers. Discover its features, pricing, and more to enhance your business integration needs.">
    <title>Detail Produk - <?= $product['nama_produk_in']; ?> - Diggers</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<?php if (!empty($product)): ?>

<!-- Banner Produk Detail -->
<section class="product-detail-banner" style="display: flex; align-items: center; justify-content: center; background-color: #F7C433; height: 40vh; border-radius: 30px; text-align: center;">
    <div class="product-detail-text">
        <h1 style="font-size: 3rem; color: #FFFFFF;">
            <?= $product['nama_produk_in']; ?>
        </h1>
        <p style="color: #FFFFFF;">Explore the features of <?= $product['nama_produk_in']; ?></p>
    </div>
</section>

<!-- Konten Detail Produk -->
<section class="product-detail-section" style="margin: 40px 0;">
    <div class="container" style="padding: 0 15px;">
        <div class="row align-items-center">
            <!-- Gambar Produk Besar -->
            <div class="col-md-6">
                <img src="<?= base_url('image/' . urlencode($product['foto_produk'])); ?>" alt="<?= $product['nama_produk_in']; ?>" class="img-fluid" style="border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);">
            </div>

            <!-- Informasi Detail Produk -->
            <div class="col-md-6">
                <div class="product-info">
                    <h2 style="font-size: 2rem; color: #333333; margin-bottom: 20px;"><?= $product['nama_produk_in']; ?> / <?= $product['nama_produk_en']; ?></h2>
                    <p style="font-size: 1.2rem; color: #555555; line-height: 1.8;">
                        <?= $product['deskripsi_produk_in']; ?>
                    </p>

                    <!-- Harga Produk Jika Ada -->
                    <?php if (isset($product['harga'])): ?>
                        <p style="font-size: 1.5rem; font-weight: bold; color: #F7C433;">Harga: <?= number_format($product['harga'], 0, ',', '.'); ?> IDR</p>
                    <?php endif; ?>

                    <!-- Tombol Aksi -->
                    <div class="action-buttons" style="margin-top: 30px;">
                        <a href="<?= base_url('product'); ?>" class="btn btn-secondary" style="padding: 12px 25px; border-radius: 5px; color: #F6C135; background-color: #FFFFFF; text-decoration: none;">Back to Products</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php else: ?>
    <!-- Pesan Jika Produk Tidak Ditemukan -->
    <section class="product-not-found" style="text-align: center; margin: 100px 0;">
        <h2>Product not found</h2>
        <p>Sorry, the product you are looking for is not available.</p>
        <a href="<?= site_url('product'); ?>" class="btn btn-secondary" style="padding: 12px 25px; border-radius: 5px; color: #F6C135; background-color: #FFFFFF; text-decoration: none;">Back to Products</a>
    </section>
<?php endif; ?>

<?= $this->endSection(); ?>
