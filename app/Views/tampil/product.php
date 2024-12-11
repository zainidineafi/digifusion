<?= $this->extend('layout/app'); ?>
<?= $this->section('head'); ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Discover a wide range of products offered by Diggers, the ultimate integration platform for connecting applications and systems. Explore detailed information about our products to enhance your business operations.">
<title>Our Services - Diggers</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<!-- Banner -->
<section class="hero-section text-center" style="background-image: url('image/bg-digifusion2.jpg'); padding: 40px 20px; border-radius: 30px;">
    <div class="container">
        <h1 style="font-size: 3rem; color: #FFFFFF; text-decoration: none;">Services</h1>
        <p style="color: #FFFFFF; margin-bottom: 40px; font-size: 1.2rem;">Find out more about our Services at Diggers</p>
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
        /* Padding di dalam section */
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
        /* Ukuran teks lebih besar untuk lebih terlihat */
    }

    @media (max-width: 768px) {
        .hero-section h1 {
            font-size: 2.5rem;
            /* Ukuran teks lebih kecil di layar kecil */
        }

        .hero-section p {
            margin-bottom: 20px;
            /* Mengurangi margin di bawah teks di layar kecil */
            font-size: 1rem;
            /* Ukuran teks deskripsi lebih kecil */
        }

        .hero-section {
            padding: 20px 10px;
            /* Mengurangi padding di layar kecil */
        }
    }
</style>

<!-- Card Products -->
<section>
    <div class="team-section">
        <div class="text-content">
            <h1 class="team-heading">We leverage our extensive experience to drive your business growth</h1>
            <p class="team-description">
                As a leading software and customized solutions provider, we deliver services across custom software, web, mobile app development and more to businesses of all sizes worldwide. With our R&D commitment and extensive hands-on experience, we are held in high regard by several prominent customers for our comprehensive and professional services. We always respond to the fast-paced and ever-changing environment promptly, and excel at helping companies and organizations achieve business goals.
            </p>
        </div>
        <div class="image-content">
            <img src="<?= base_url('image/foto25.png') ?>" alt="Founder Image">
        </div>
    </div>
</section>

<span class="title__item">Move from On-Premise to Cloud for the Future</span>
<div class="card-container">
    <div class="card">
        <img src="<?= base_url('image/foto25.png') ?>" alt="dinggers Icon" class="card-icon">
        <h3 class="card-title">Modern Infrastructure</h3>
        <p class="card-description"> Legacy infrastructure often hinders businesses from transformation. We help you modernize your IT architecture to kickstart digital transformation.</p>
    </div>

    <div class="card">
        <img src="<?= base_url('image/foto25.png') ?>" alt="dinggers Icon" class="card-icon">
        <h3 class="card-title">Flexible Implementation</h3>
        <p class="card-description"> With cloud implementation and our comprehensive cloud migration support, we help your transformation more agile and efficient.</p>
    </div>



    <div class="card">
        <img src="<?= base_url('image/foto25.png') ?>" alt="dinggers Icon" class="card-icon">
        <h3 class="card-title">Transformation Scale</h3>
        <p class="card-description"> Cloud service provides a stable and reliable infrastructure, with good efficacy and steady services to facilitate businesses’ transformation.</p>
    </div>
</div>
</div>

<section>
    <div class="team-section">
        <div class="image-content">
            <img src="<?= base_url('image/foto25.png') ?>" alt="Founder Image">
        </div>
        <div class="text-content">
            <h1 class="team-heading">Formulate On-Premise to Cloud Migration Strategies</h1>
            <p class="team-description">
                To stay on top of fast-changing markets, digital transformation has become a must for many industries. We are an expert of cloud and on-premises technologies, providing cloud services with high flexibility, high efficiency and high security. With our deployment strategy, system integration and cloud consulting, we help you build up resilience and adaptiveness.
            </p>
        </div>
    </div>
</section>


<div class="banner" style="background-image: url('image/foto25.png'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 60vh;">
    <div class="overlay">
        <h1>We Help You Migrate to the dinggers</h1>
        <p>Even for Non dinggers-Native Architecture</p>
        <a href="<?= base_url('contact'); ?>" class="btn-custom">Get in Touch →</a>
    </div>
</div>





<!-- CSS untuk membatasi deskripsi dan efek 3D pada card -->
<style>
    .team-section {
        display: flex;
        flex-direction: column;
        /* Default for smaller screens */
        align-items: center;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        gap: 20px;
    }

    .text-content {
        max-width: 90%;
        /* Adjust for smaller screens */
        margin: 0;
        text-align: center;
    }

    .team-heading {
        font-size: 2rem;
        /* Responsive font size */
        color: #333;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .team-description {
        font-size: 1rem;
        color: #666;
        line-height: 1.6;
    }

    .image-content img {
        width: 100%;
        max-width: 400px;
        /* Restrict for smaller screens */
        border-radius: 10px;
        margin: 0 auto;
        /* Center alignment */
        display: block;
    }

    .title__item {
        display: block;
        width: 100%;
        text-align: center;
        font-size: 1.5rem;
        font-weight: bold;
        padding: 10px 0;
        color: #333;
        background-color: #4BB3BF;
    }

    .card-container {
        display: flex;
        flex-wrap: wrap;
        /* Allow wrapping */
        justify-content: center;
        /* Align cards centrally */
        gap: 20px;
        width: 100%;
        padding: 20px;
        background-color: #4BB3BF;
    }

    .card {
        background-color: white;
        border-radius: 10px;
        padding: 20px;
        width: calc(100% - 40px);
        /* Default for mobile */
        max-width: 300px;
        /* Limit for larger screens */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        align-items: center;
        transition: transform 0.3s ease;
    }

    .card-icon {
        margin-bottom: 20px;
        width: 100px;
        /* Resize for smaller screens */
        max-width: 150px;
    }

    .card-title {
        font-size: 1.2rem;
        /* Scaled down */
        color: #ff6600;
        margin-bottom: 10px;
    }

    .card-description {
        font-size: 0.9rem;
        /* Adjust font size */
        color: #333;
        margin-bottom: 20px;
        line-height: 1.5;
    }

    .banner {
        display: flex;
        flex-direction: column;
        /* Stack content */
        justify-content: center;
        align-items: center;
        position: relative;
        height: 40vh;
        /* Smaller banner for mobile */
    }

    .overlay {
        text-align: center;
        color: white;
        border-radius: 10px;
    }

    h1 {
        font-size: 2rem;
        /* Adjusted for mobile */
    }

    p {
        font-size: 1rem;
        /* Adjusted for mobile */
        margin: 10px 0;
    }

    .button {
        text-decoration: none;
        color: white;
        border: 2px solid white;
        padding: 10px 20px;
        border-radius: 20px;
        font-size: 1rem;
        transition: 0.3s;
    }

    .button:hover {
        background-color: white;
        color: black;
    }

    /* Media Query for tablets */
    @media (min-width: 768px) {
        .team-section {
            flex-direction: row;
            /* Row for larger screens */
            padding: 40px;
        }

        .text-content {
            max-width: 50%;
            text-align: left;
            margin: 0 20px;
        }

        .image-content img {
            max-width: 500px;
        }

        .card {
            width: 30%;
            /* Larger cards for tablet */
        }

        .banner {
            height: 60vh;
        }

        h1 {
            font-size: 2.5rem;
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

<?= $this->endSection(); ?>