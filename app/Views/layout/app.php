<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="icon" href="<?= base_url('image/logo.png'); ?>" type="image/png">
    <title>Diggifusion</title>

    <?= $this->renderSection('head'); ?>

    <style>
        .hero-section {
            position: relative;
            width: 100%;
            height: 700px;
            overflow: hidden;
        }

        .hero-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-text {
            position: absolute;
            top: 50%;
            left: 80px;
            transform: translateY(-50%);
            color: white;
            text-align: left;
            width: auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
        }

        .btn-custom {
            background-color: #F69E00;
            border-color: #F69E00;
            font-weight: 600;
            color: white;
        }

        .btn-custom:hover {
            background-color: #FFA500;
            border-color: #FFA500;
        }

        .card-custom {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
        }

        .profile-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
        }

        .profile-info {
            margin-left: 15px;
        }

        .profile-info h5 {
            margin: 0;
            font-weight: bold;
        }

        .profile-info p {
            margin: 0;
            color: gray;
        }

        .card {
            display: flex;
            flex-direction: column;
            height: 100%;
            margin: 10px;
        }

        .card-body {
            flex: 1;
        }

        .card-img-top {
            object-fit: cover;
        }

        .navbar {
            background-color: #ffffff !important;
            position: sticky;
            top: 0;
            z-index: 1050;
        }

        .navbar-nav .nav-link {
            font-weight: 600;
            color: black;
        }

        .navbar-nav .nav-link.active {
            background-color: #F6C33C;
            color: black;
            border-radius: 20px;
            padding: 10px 15px;
        }

        .navbar-nav .nav-item {
            margin-right: 15px;
        }

        .form-control {
            border-radius: 20px;
        }

        .btn-outline-success {
            border-radius: 20px;
        }

        footer {
            padding: 30px 0;
        }

        .footer-links {
            padding: 10px 0;
        }

        .container-fluid {
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="margin-left: 25px;">
      <?php if (!empty($profil)) : ?>
        <?php foreach ($profil as $i) : ?>
          <img src="<?= base_url('image/' . $i['logo_perusahaan']); ?>" alt="Logo" style="height: 40px;">
        <?php endforeach; ?>
      <?php else: ?>
        <p>Logo perusahaan belum tersedia.</p>
      <?php endif; ?>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="/index" id="home-link">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about" id="about-link">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/product" id="product-link">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/artikel" id="artikel-link">Blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/partnership" id="partnership-link">Partnership</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact" id="contact-link">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script>
    const currentLocation = window.location.pathname;

    const navLinks = {
        "/index": "home-link",
        "/about": "about-link",
        "/product": "product-link",
        "/artikel": "artikel-link",
        "/partnership": "partnership-link",
        "/contact": "contact-link"
    };

    if (navLinks[currentLocation]) {
        document.getElementById(navLinks[currentLocation]).classList.add("active");
    } else if (currentLocation.startsWith("/product/detail") || currentLocation === "/product") {
        document.getElementById("product-link").classList.add("active");
    } else if (currentLocation.startsWith("/artikel/detail") || currentLocation === "/artikel") {
        document.getElementById("artikel-link").classList.add("active");
    } else {
        document.getElementById("home-link").classList.add("active");
    }
</script>

<?= $this->renderSection('content'); ?>

<div class="container-fluid mt-5" style="padding: 0;">
  <footer class="text-center text-lg-start text-dark" style="background-color: #EDEDED; width: 100%;">
    <div class="container p-4 footer-links">
      <section>
        <div class="row">
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Diggers</h6>
            <p>Diggers is a training to improve online marketing, content strategy and digital advertising skills.</p>
          </div>
          <hr class="w-100 clearfix d-md-none" />
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Webpages</h6>
            <p><a class="text-dark" href="/index">Home</a></p>
            <p><a class="text-dark" href="/about">About</a></p>
            <p><a class="text-dark" href="/product">Product</a></p>
            <p><a class="text-dark" href="/artikel">Article</a></p>
            <p><a class="text-dark" href="/partnership">Partnership</a></p>
            <p><a class="text-dark" href="/contact">Contact</a></p>
          </div>
          <hr class="w-100 clearfix d-md-none" />
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
            <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
          </div>
        </div>
      </section>
    </div>
  </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
