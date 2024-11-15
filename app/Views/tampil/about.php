<?= $this->extend('Layout/app'); ?>

<!-- Meta Tags -->
<?= $this->section('head'); ?>
<meta name="title" content="About | Learn more about what Diggers are.">
<meta name="description" content="Learn more about what Diggers are.">
<title>About | Learn more about what Diggers are.</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<!-- Banner -->
<section class="hero-section text-center" style="background-color: #F7C433; padding: 40px 20px; border-radius: 30px;">
    <div class="container">
        <h1 style="font-size: 3rem; color: #FFFFFF; text-decoration: underline;">About Digifusion</h1>
        <p style="color: #FFFFFF; margin-bottom: 10px; font-size: 1.2rem;">Learn more about what Diggers are.</p>
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
            background-color: #F8C43A;
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

<!-- Our Team Section -->
<section class="our-team-section">
    <h1>Our Team</h1>
    <p>Kenalan dengan tim kami yang hebat!</p>
    <div class="cards-container">
        <?php foreach ($teamMembers as $team): ?>
            <div class="card" onclick="showInfo('<?= $team['name']; ?>', '<?= $team['position']; ?>')">
                <img src="<?= base_url('image/' . $team['photo']); ?>" alt="<?= $team['name']; ?>">
                <div class="logo"><img src="jago-logo.png" alt="Logo"></div>
                <div class="card-content">
                    <h2><?= $team['name']; ?></h2>
                    <p><?= $team['position']; ?></p>
                </div>
                <!-- Background Behind Card (Setengah Card) -->
                <div class="background-half"></div>
            </div>
        <?php endforeach; ?>
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