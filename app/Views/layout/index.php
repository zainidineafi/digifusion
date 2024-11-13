<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
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
            background-color: rgba(0, 0, 0, 0.1);
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
            margin: 10px; /* Optional: Add some spacing between cards */
        }
        .card-body {
            flex: 1;
        }
        .card-img-top {
            object-fit: cover;
        }
        .navbar {
            background-color: #ffffff !important; /* White background */
            position: sticky;
            top: 0;
            z-index: 1000; /* Ensure it stays above other content */
        }
        .navbar-nav .nav-link.active {
            background-color: #6F42C1; /* Purple background */
            color: #ffffff; /* White text color */
            border-radius: 20px; /* More rounded corners */
            padding: 10px 15px; /* Adjust padding to ensure text fits well */
        }

        .form-control {
            border-radius: 20px; /* Membuat border input menjadi membulat lonjong */
        }

        .btn-outline-success {
            border-radius: 20px; /* Membuat border tombol menjadi membulat lonjong */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">News & Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Partnership</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<?=$this->resderSection('content'); ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz8z7s/8f9pP/UKt4oGveC9HlAnm8J18UeRxjT9+dsGf6xfU6dH2z26J7m" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuJWbkXPzQjBg8FH6MPOjNHiWDCQx5ghg1m6p6g1ZNq8uFb2kEofVB3BRBPTjO91" crossorigin="anonymous"></script>

</body>
</html>
