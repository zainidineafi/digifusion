<?=$this->extend('layout/app'); ?>

<!-- Meta Tags -->
<?= $this->section('head'); ?>
<meta name="title" content="About | Learn more about what Diggers are.">
<meta name="description" content="Learn more about what Diggers are.">
<title>About | Learn more about what Diggers are.</title>
<?= $this->endSection(); ?>

<?=$this->section('content'); ?>

<!-- banner---> 
<section class="hero-section text-center" style="background-color: #4BB3BF; padding: 40px 20px; border-radius: 30px;">
    <div class="container">
        <h1 style="font-size: 3rem; color: #FFFFFF; text-decoration: underline;">About Digifusion</h1>
        <p style="color: #FFFFFF; margin-bottom: 40px; font-size: 1.2rem;">Learn more about what Diggers are.</p>
    </div>
</section>
<!-- CSS -->
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

  /* Founder Section */
.founder-info {
    padding: 15px; /* Mengurangi padding untuk menghemat ruang */
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    margin: 10px;
}

.founder-image {
    max-width: 80px; /* Perkecil gambar founder */
    border-radius: 50%;
    margin-bottom: 10px;
}

.founder-info h3 {
    font-size: 1.1rem; /* Sesuaikan ukuran font judul */
    margin: 10px 0 5px;
}

.founder-info p {
    font-size: 0.9rem; /* Sesuaikan ukuran font paragraf */
    color: #555;
    line-height: 1.3;
    margin: 0;
}


</style>


<!-- Brand Value Section -->
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
        <h2 class="font-weight-bold">Value</h2>
        <p class="mb-3">A complete ecosystem to help you succeed.</p>
        <div class="row justify-content-center">

            <?php foreach ($brandValues as $value): ?>
                <div class="mb-4">
                    <div class="value-box p-4"
                        style="background-color: #ffffff; color: #333; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); transition: transform 0.2s ease, box-shadow 0.2s ease;">
                        <p style="font-size: 1.1rem; text-align: center; line-height: 1.5;"><?= $value['value']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</section>

<section class="founders-section">
    <h2>Founder of Jago Digital Marketing</h2>
    <p>Siapa sih pendiri dari Jago Digital Marketing? Yuk kenalan dulu!</p>
    <div class="founders">
        <?php if (!empty($founder)): ?>
            <?php foreach ($founder as $founderItem): ?>
                <div class="founder-card">
                    <!-- Founder Photo -->
                    <div class="profile-wrapper">
                        <img src="<?= base_url('uploads/foto_founder/' . $founderItem->foto_founder) ?>" alt="<?= esc($founderItem->nama_founder) ?>" class="profile-img">
                    </div>

                    <!-- Founder Info -->
                    <div class="info">
                        <h3><?= esc($founderItem->nama_founder) ?></h3>
                        <p class="role"><?= esc($founderItem->jabatan_founder) ?></p>

                        <!-- Founder Description -->
                        <p class="description"><?= esc($founderItem->deskripsi_founder ?? 'Deskripsi tidak tersedia') ?></p>

                        <!-- Social Media Links -->
                        <?php if (!empty($founderItem->links)): ?>
                            <div class="social-media">
                                <?php foreach ($founderItem->links as $socialMedia): ?>
                                    <a href="<?= esc($socialMedia->link_founder) ?>" target="_blank" class="social-link">
                                        <img src="<?= base_url('uploads/icons/' . $socialMedia->icon_link_founder) ?>" alt="<?= esc($socialMedia->nama_link_founder) ?>" class="social-icon">
                                        <span class="social-text"><?= esc($socialMedia->nama_link_founder) ?></span>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        <?php else: ?>
                            <p>Sosial media tidak tersedia.</p>
                        <?php endif; ?>


                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Informasi pendiri tidak tersedia.</p>
        <?php endif; ?>
    </div>
</section>

<!-- Info Modal -->
<div id="info-modal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2 id="modal-name"></h2>
        <p id="modal-position"></p>
    </div>
</div>

<!-- CSS -->
<style>
    /* Section Header */
    .our-team-section {
        text-align: center;
        padding: 40px 20px;
        background-color: #ffffff;
        border-radius: 8px;
        max-width: 1000px;
        margin: 20px auto;
    }

    .our-team-section h1 {
        font-size: 24px;
        color: #333333;
        margin-bottom: 10px;
    }

    .our-team-section p {
        font-size: 16px;
        color: #777777;
        margin-bottom: 20px;
    }

    /* Cards Container */
    .cards-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 20px;
        justify-items: center;
    }

    /* Card */
    .card {
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        position: relative;
        text-align: center;
        cursor: pointer;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        width: 300px;
        /* Lebih lebar */
        height: 400px;
        /* Menyesuaikan tinggi */
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    /* Card Image */
    .card img {
        width: 100%;
        height: 200px;
        /* Mengatur tinggi gambar */
        object-fit: cover;
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
    }

    /* Logo */
    .logo {
        position: absolute;
        top: 10px;
        left: 10px;
        width: 50px;
        z-index: 1;
    }

    .logo img {
        width: 100%;
        height: auto;
    }

    /* Card Content */
    .card-content {
        background-color: #f4f4f4;
        padding: 15px;
        border-bottom-left-radius: 12px;
        border-bottom-right-radius: 12px;
        position: relative;
        z-index: 2;
        /* Pastikan konten card tetap di atas latar belakang */
    }

    .card-content h2 {
        font-size: 18px;
        color: #333333;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .card-content p {
        font-size: 14px;
        color: #666666;
    }

    /* Background Behind Card (Setengah Card) */
    .background-half {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 50%;
        /* Setengah dari tinggi card */
        background-color: #f7c43d;
        /* Warna latar belakang kuning */
        border-bottom-left-radius: 12px;
        border-bottom-right-radius: 12px;
        z-index: 0;
        /* Menempatkan latar belakang di bawah konten card */
    }

    /* Modal Styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
        background-color: white;
        padding: 20px;
        margin: 10% auto;
        width: 40%;
        border-radius: 8px;
        text-align: center;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>

<!-- Updated CSS -->
<style>
    .founders-section {
        padding: 40px 20px;
        max-width: 1200px;
        margin: 0 auto;
        text-align: center;
        background-color: #f2f2f2;
        border-radius: 10px;
    }

    .founders {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }

    .founder-card {
        background-color: white;
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        text-align: center;
        transition: transform 0.3s ease;
        width: 100%;
        max-width: 350px;
        position: relative;
    }

    .founder-card:hover {
        transform: translateY(-10px);
    }

    .profile-wrapper {
        width: 100%;
        padding-top: 100%;
        position: relative;
    }

    .profile-img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-bottom-left-radius: 50%;
        border-bottom-right-radius: 50%;
    }

    .info {
        padding: 20px;
        background-color: #fff;
        text-align: center;
    }

    .info h3 {
        font-size: 22px;
        margin-bottom: 5px;
    }


    .social-media {
        display: flex;
        flex-direction: column;
        /* Mengatur elemen secara vertikal */
        align-items: center;
        /* Menyelaraskan elemen ke tengah */
       
        margin-top: 15px;
        /* Jarak atas jika diperlukan */
    }

    .social-link {
        display: flex;
        align-items: center;
        text-decoration: none;
        color: #000000;
    }

    .social-icon {
        width: 24px;
        /* Ukuran ikon */
        height: 24px;
        /* Ukuran ikon */
        margin-right: 8px;
        /* Jarak kanan antara ikon dan teks */
    }

    .social-text {
        font-size: 16px;
        /* Ukuran teks */
        line-height: 24px;
        /* Menyelaraskan tinggi baris dengan tinggi ikon */
    }


    .social-link:hover .social-icon {
        transform: scale(1.2);
    }


    .info .role {
        font-size: 18px;
        color: #1E7685;
        margin-bottom: 10px;
    }

    .description {
        font-size: 16px;
        margin-bottom: 15px;
        text-align: justify;
    }

    .social-media {
        margin-top: 15px;
    }

    .social-link {
        display: inline-block;
        margin-right: 10px;
    }

    .social-icon {
        width: 50px;
        height: 50px;
        transition: transform 0.3s ease;
    }

    .social-link:hover .social-icon {
        transform: scale(1.2);
    }

    @media (max-width: 768px) {
        .founders {
            flex-direction: column;
            align-items: center;
        }

        .founder-card {
            width: 100%;
        }
    }
</style>

<!-- JavaScript -->
<script>
    // Show modal with team info
    function showInfo(name, position) {
        document.getElementById('modal-name').textContent = name;
        document.getElementById('modal-position').textContent = position;
        document.getElementById('info-modal').style.display = "block";
    }

    // Close the modal
    document.querySelector('.close').onclick = function () {
        document.getElementById('info-modal').style.display = "none";
    }

    // Close modal when clicking outside
    window.onclick = function (event) {
        if (event.target === document.getElementById('info-modal')) {
            document.getElementById('info-modal').style.display = "none";
        }
    }
</script>

<?= $this->endSection(); ?>
