<?= $this->extend('layout/app'); ?>
<?= $this->section('content'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="keywords" content="kontak, layanan, <?= esc($profile['nama_perusahaan']) ?>, bantuan, informasi">
    <meta name="author" content="<?= esc($profile['nama_perusahaan']) ?>">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Contact Us - <?= esc($profile['nama_perusahaan']) ?></title>
    <style>
        .hero-section {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            height: 50vh;
            padding: 40px 20px; /* Padding di dalam section */
        }
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa; /* Background color */
        }
        .contact-info {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            max-width: 600px;
            margin: auto;
            background-color: #fff; /* Background color of the card */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Card shadow */
        }
        .contact-info h1 {
            text-align: center;
            color: #343a40; /* Title text color */
        }
        .contact-info p {
            margin: 10px 0;
            color: #495057; /* Text color */
        }
        .contact-info a {
            color: #007bff;
            text-decoration: none;
        }
        .contact-info a:hover {
            text-decoration: underline;
        }
        .map-container {
            margin-top: 30px;
            text-align: center;
        }
        iframe {
            width: 100%;
            height: 400px; /* Height of the map iframe */
            border: 0; /* Remove border */
        }
        /* Style platform-section */
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

        .contact-info {
            margin-bottom: 30px; /* Add bottom margin for space to the map */
        }

        .map-container {
            margin-top: 20px; /* Reduce top margin of the map */
        }
    </style>
</head>
<body>

<!-- Banner -->
<section class="hero-section text-center" style="background-color: #4BB3BF; padding: 40px 20px; border-radius: 30px;">
    <div class="container">
        <h1 style="font-size: 3rem; color: #FFFFFF; text-decoration: underline;">Contact</h1>
        <p style="color: #FFFFFF; margin-bottom: 40px; font-size: 1.2rem;">Contact us if there is anything you need</p>
    </div>
</section>

<!-- Contact Us -->
<main class="platform-section py-5 mt-5">
    <div class="container">
        <div class="row">
            <!-- Column for contact information -->
            <div class="col-md-6 contact-info">
                <h1>Contact Us</h1>
                <p><strong>Company Name:</strong> <?= esc($profile['nama_perusahaan']) ?></p>
                <p><strong>Address:</strong> <?= esc($profile['alamat']) ?></p>
                <p><strong>Phone Number:</strong> <a href="tel:<?= esc($profile['no_hp']) ?>"><?= esc($profile['no_hp']) ?></a></p>
                <p><strong>Email:</strong> <a href="mailto:<?= esc($profile['email']) ?>"><?= esc($profile['email']) ?></a></p>
                <p>
                    <strong>WhatsApp:</strong>
                    <a href="<?= esc($profile['link_whatsapp']) ?>" target="_blank">Chat on WhatsApp</a>
                </p>
            </div>

            <!-- Column for the map -->
            <div class="col-md-6">
                <div class="map-container">
                    <iframe 
                        src="<?= esc($profile['link_maps'], 'attr') ?>" 
                        allowfullscreen 
                        frameborder="0" 
                        style="width: 100%; height: 350px; border:0;" 
                        aria-hidden="false" 
                        tabindex="0">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<?= $this->endSection(); ?>
