<?=$this->extend('layout/app'); ?>
<?= $this->section('head'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Diggers: The ultimate integration platform for connecting applications and systems. Discover our AI-powered automation tools, trusted by leading global organizations. Read news, blogs, and success stories about how Diggers helps businesses overcome IT challenges and embrace digital transformation.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Diggers Hero Section</title>
<?= $this->endSection(); ?>
<?=$this->section('content'); ?>

<!-- banner aatas-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Diggers: The ultimate integration platform for connecting applications and systems. Discover our AI-powered automation tools, trusted by leading global organizations. Read news, blogs, and success stories about how Diggers helps businesses overcome IT challenges and embrace digital transformation.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .hero-section {
            background-image: url('image/background.jpg'); /* Menjadikan gambar sebagai latar belakang */
            background-size: cover; /* Memastikan gambar memenuhi area */
            background-position: center; /* Memusatkan gambar */
            color: #fff; /* Warna teks putih untuk kontras */
            padding: 40px; /* Jarak untuk semua sisi di section ini */
            border-radius: 15px; /* Menambahkan sudut membulat */
            position: relative; /* Untuk mengatur posisi teks */
            min-height: 400px; /* Tinggi minimum untuk section */
        }

        .hero-section .text-container {
            padding: 20px; /* Memberikan jarak di dalam container teks */
            background-color: rgba(255, 255, 255, 0.8); /* Latar belakang putih transparan untuk teks */
            border-radius: 10px; /* Sudut membulat untuk teks */
            max-width: 700px; /* Membatasi lebar maksimal kontainer teks */
            margin: 0; /* Menghapus margin untuk kontrol posisi lebih baik */
        }

        .hero-section .text-container h1,
        .hero-section .text-container p {
            margin-left: 20px; /* Menambahkan margin kiri untuk desktop */
        }

        .hero-section h1 {
            font-weight: 700; /* Membuat teks judul tebal */
            font-size: 2rem; /* Ukuran font untuk judul */
            line-height: 1.3; /* Mengatur jarak antar baris pada judul */
        }

        .hero-section p {
            font-size: 1rem; /* Ukuran font untuk paragraf */
            line-height: 1.6; /* Mengatur jarak antar baris pada paragraf */
            margin-top: 20px; /* Jarak atas antara judul dan paragraf */
        }

        @media (max-width: 768px) {
            .hero-section {
                text-align: center; /* Mengatur agar teks berada di tengah */
                padding: 20px; /* Mengurangi padding pada layar kecil */
            }

            .hero-section .text-container {
                margin: 0 auto; /* Memusatkan kontainer teks pada mobile */
                width: 90%; /* Lebar teks lebih kecil di mobile */
            }

            .hero-section h1 {
                font-size: 1.5rem; /* Ukuran judul lebih kecil untuk mobile */
                margin-left: 0; /* Menghapus margin kiri untuk mobile */
            }

            .hero-section p {
                font-size: 0.9rem; /* Ukuran teks lebih kecil untuk mobile */
                margin-left: 0; /* Menghapus margin kiri untuk mobile */
            }
        }
    </style>
    <title>Diggers Hero Section</title>
</head>
<body>

    <!-- Hero Section -->
    <section class="hero-section container-fluid d-flex align-items-center">
        <div class="text-container">
            <h1 style="color:#202020" class="fw-bold">Diggers is an integration platform that helps connect various applications and systems within a company.</h1>
            <p style="color:#202020">Diggers is an integration platform that helps connect various applications and systems within a company. We're more than just a platform; we're your learning partner. Our constantly evolving digital platform will be with you every step of the way.</p>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



  <style>
    /* Styling untuk teks di atas logo */
    .trusted-text {
      margin-bottom: 1px; /* Mengurangi jarak antara tulisan dan logo */
      margin-top: 15px;
      text-align: center;
      font-size: 1.5rem;
      font-weight: 600;
      color: #333;
    }

    /* Styling untuk logo box */
    .logo-box {
    border: 2px solid #ccc;
    border-radius: 10px;
    padding: 15px; /* Tambahkan padding untuk memberi ruang lebih */
    max-width: 80%;
    margin: 50px auto; /* Tambahkan margin atas dan bawah */
    background-color: #fff;
    }

    /* Styling untuk logo container */
    .logo-container {
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
    }

    /* Styling untuk logo */
    .logo {
      display: flex;
      gap: 1.5rem; /* Jarak antar logo lebih kecil */
      flex-shrink: 0;
      padding: 0.5rem; /* Kurangi padding untuk memperpendek box */
      animation: infinite-scroll 10s linear infinite;
    }

    /* Styling untuk setiap gambar logo */
    .logo img {
      height: 6.5rem; /* Gambar logo sedikit lebih kecil */
      filter: grayscale(1); /* Logo tampil dalam grayscale */
      transition: filter 0.3s ease; /* Animasi halus saat hover */
    }

    /* Efek hover untuk menghilangkan grayscale */
    .logo img:hover {
      filter: grayscale(0);
    }

    /* Animasi untuk scroll logo */
    @keyframes infinite-scroll {
      from {
        transform: translateX(0);
      }
      to {
        transform: translateX(-100%);
      }
    }

    /* Responsive untuk layar kecil */
    @media (max-width: 768px) {
      .logo {
        gap: 1rem; /* Kurangi jarak antar logo di layar kecil */
        animation: infinite-scroll 15s linear infinite; /* Animasi lebih lambat di layar kecil */
      }

      .logo img {
        height: 5rem; /* Ukuran logo lebih kecil di layar kecil */
      }
    }
  </style>
</section>

<!-- why diggers -->
<section class="container-fluid pt-4 pb-5">
    <h1 class="text-center mt-5 pt-5" style="color: #4BB3BF">Why Diggers?</h1>
    <div class="text-center mt-3 mb-3" style="color: #202020;">
        <p>For nearly two decades, Diggers has consistently been a frontrunner in the 
        <br>integration and automation software market. With over 20,000 global customers, 
        <br>organizations rely on Diggers to automate their business operations through the 
        <br>integration of applications, databases, and APIs to create interconnected 
        <br>business processes. Over the past five years, Diggers has expanded into API  
        <br>management and data management and is a leading innovator in AI. As a 10x 
        <br>leader in the Gartner Magic Quadrant, Diggers is currently ranked #1 among all 
        <br>vendors for its ability to execute.</p>
    </div>
</section>

<!-- sebelum persen -->
<section class="container-fluid" style="padding: 0; margin: 0;">
    <div class="row mt-5" style="background-color: #4BB3BF; width: 100%; min-height: 470px; margin: 0; padding: 0;">
        <!-- Kolom untuk teks -->
        <div class="col-md-6" style="display: flex; align-items: center; height: 100%;">
            <div style="color: #FFFFFF; padding: 0 20px; text-align: left;">
                <h1 class="mb-3 pt-5">See how IT experts are putting AI to work in their enterprises.</h1>
                <p>1,000+ IT leaders have spoken. AI introduces exciting new opportunities to transform business and drive real value. But it also shines a spotlight on the complexity that IT leaders are already facing within their estates. In order to get the full potential of generative and autonomous AI, all of your data, systems, processes, and AI models need to be packaged and accessible as digital building blocks.</p>
                <p>In the 10th edition of the Connectivity Benchmark Report,
                you’ll see how IT leaders are building an AI-ready foundation across their entire businesses. They share their vision for the future, current strategies, and biggest challenges.</p>
            </div> 
        </div>
        <!-- Kolom untuk gambar -->
        <div class="col-md-6 pb-4" style="display: flex; align-items: center; justify-content: center;">
            <img src="pos1.png" alt="AI in enterprise" style="max-width: 80%; height: auto;">
        </div>
    </div>
</section>

<!-- data persen -->
<div class="stats-section mt-5" style="position: relative; top: 0px; display: flex; flex-wrap: wrap; justify-content: space-around; padding: 20px; background-color: #fff; margin: 0 auto; width: 90%; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <div class="stat-box" style="flex: 1 1 200px; padding: 20px; text-align: center; border-radius: 10px; margin: 10px; background: #F6F2FB; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h3 style="margin: 10px 0; font-size: 36px; color: #6A33C2;">86%</h3>
        <p style="color: #777;">of IT leaders expect generative AI to play a significant role soon.</p>
    </div>
    <div class="stat-box" style="flex: 1 1 200px; padding: 20px; text-align: center; border-radius: 10px; margin: 10px; background: #F1F3FB; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h3 style="margin: 10px 0; font-size: 36px; color: #5767E6;">95%</h3>
        <p style="color: #777;">of respondents report that integration issues impede AI adoption.</p>
    </div>
    <div class="stat-box" style="flex: 1 1 200px; padding: 20px; text-align: center; border-radius: 10px; margin: 10px; background: #FEF0F3; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h3 style="margin: 10px 0; font-size: 36px; color: #FE558B;">81%</h3>
        <p style="color: #777;">of IT leaders report that data silos are hindering their digital transformation efforts.</p>
    </div>
    <div class="stat-box" style="flex: 1 1 200px; padding: 20px; text-align: center; border-radius: 10px; margin: 10px; background: #EBF7E6; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h3 style="margin: 10px 0; font-size: 36px; color: #40B658;">98%</h3>
        <p style="color: #777;">report there are significant barriers to utilizing their data for AI.</p>
    </div>
</div>

<style>
    .stats-section {
        display: flex;
        flex-wrap: wrap; /* Memungkinkan item untuk membungkus ke baris berikutnya */
        justify-content: space-around; /* Mengatur jarak antar elemen */
        padding: 20px; /* Jarak dalam section */
        background-color: #fff; /* Warna latar belakang */
        margin: 0 auto; /* Memusatkan section */
        width: 90%; /* Lebar section */
        border-radius: 10px; /* Sudut membulat */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Bayangan */
    }

    .stat-box {
        flex: 1 1 200px; /* Mengatur ukuran box */
        padding: 20px; /* Jarak dalam box */
        text-align: center; /* Teks di tengah */
        border-radius: 10px; /* Sudut membulat */
        margin: 10px; /* Margin antara box */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Bayangan */
    }

    /* Mengatur ukuran font untuk perangkat kecil */
    @media (max-width: 768px) {
        .stat-box h3 {
            font-size: 28px; /* Ukuran font lebih kecil untuk judul */
        }
        .stat-box p {
            font-size: 0.9rem; /* Ukuran font lebih kecil untuk paragraf */
        }
    }
</style>

<!-- data partnership -->
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
            color: #F7C433;
        }

        .platform-section .card a span {
            font-size: 1.2rem;
        }
    </style>

    <!-- <div class="container text-center">
        <h2 class="mb-3 font-weight-bold">More than a platform</h2>
        <p class="mb-5">A complete ecosystem to help you succeed.</p>
        <div class="row justify-content-center">
            <?php foreach ($keunggulan as $item): ?>

            <div class="col-md-3 mb-4 d-flex">
                <div class="card h-100 p-3 text-center">
                    <div class="icon mb-3">

                        <img src="<?= base_url('image/' . $item['logo']); ?>" alt="<?= $item['judul']; ?> Icon" style="width: 40px;">
                    </div>
                    <h5 class="font-weight-bold"><?= $item['judul']; ?></h5>
                    <p><?= $item['clickbait']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <a href="<?= base_url('partnership'); ?>" class="btn-custom">Learn More</a>
    </div> -->
</section>

<!-- new nad blog -->
<section class="container-fluid">
    <h1 class="text-center mt-5 pt-4" style="color: #4BB3BF">Update News And Blog</h1>
    <div class="row d-flex">
        <?php foreach ($artikel as $article): ?>
        <div class="col-md-4 mb-5">
            <div class="card">
                <img src="<?= base_url('uploads/articles/' . $article['foto_artikel']); ?>" class="card-img-top article-img" alt="<?= esc($article['judul_artikel']); ?>" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <p class="card-text" style="color: #4BB3BF; font-weight: bold; text-decoration: underline;">
                    <a href="<?= base_url('artikel/detail/' . $article['slug']); ?>" class="btn-custom">Read-more</a>
                    </p>
                    <h5 class="card-title"><?= esc($article['judul_artikel']); ?></h5>
                    <p class="card-text"><?= date('F d, Y', strtotime($article['created_at'])); ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Success Stories Section -->
<!-- <section class="container-fluid pt-3">
    <h1 class="text-center mt-5 pt-4" style="color: #4BB3BF">Exploring Alumni Success Stories</h1>
    <div class="text-center mt-3 mb-3" style="color: #393939;">
        <p>They have felt the excitement of learning digital marketing skills and achieving the success they want. <br>You next?</p>
    </div>
</section>
<section class="container">
    <div class="row g-4"> 
        <?php foreach ($komentar as $item): ?>
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch"> 
            <div class="card h-100 d-flex flex-column"> 
                <div class="card-body flex-grow-1"> 
                    <p class="card-text">
                        "<?= $item['komentar']; ?>"
                    </p>
                </div>
                <div class="card-footer mt-auto d-flex align-items-center"> 
                    <img class="rounded-circle me-3 img-fluid" src="<?= base_url('image/' . $item['foto']); ?>" alt="Profile Image" style="width: 50px; height: 50px; object-fit: cover;">
                    <div class="profile-info">
                        <h5 class="mb-0"><?= $item['nama']; ?></h5> 
                        <p class="text-muted mb-0"><?= $item['jabatan']; ?>, <?= $item['perusahaan']; ?></p> 
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section> -->

<!-- collab pt -->
<section class="container-fluid" style="padding: 0; margin: 0;">
  <div class="logo-box">
    <!-- Tulisan di atas logo -->
    <div class="text-center trusted-text">
      <h2>Trusted by the world’s leading organizations</h2>
    </div>
    <div class="logo-container">
      <div id="logo" class="logo mt-3 pt-3"> <!-- Mengurangi margin-top dan padding-top -->
        <img src="1.png" alt="1">
        <img src="2.png" alt="2">
        <img src="3.png" alt="3">
        <img src="4.png" alt="4">
        <img src="5.png" alt="5">
        <img src="6.png" alt="6">
        <img src="7.png" alt="7">
      </div>
    </div>
  </div>

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
    background-size: 300%; /* Untuk efek gerakan */
    animation: gradient-slide 5s infinite linear; /* Gradasi bergerak */
}

/* Animasi gradasi */
@keyframes gradient-slide {
    0% { background-position: 0%; }
    100% { background-position: 100%; }
}
</style>

<script>
  // Menambahkan elemen logo
  const logo = document.querySelector(".logo").cloneNode(true);
  document.querySelector('.logo-container').appendChild(logo);
</script>

<?=$this->endSection(); ?>
