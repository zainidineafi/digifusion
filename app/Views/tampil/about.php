<?= $this->extend('Layout/app'); ?>

<!-- Meta Tags -->
<?=$this->section('head'); ?>
    <meta name="title" content="About | Learn more about what Diggers are.">
    <meta name="description" content="Learn more about what Diggers are.">
    <title>About | Learn more about what Diggers are.</title>
<?=$this->endSection(); ?>

<?= $this->section('content'); ?>

<!-- Banner -->
<section class="hero-section text-center" style="background-color: #F7C433; padding: 40px 20px; border-radius: 30px;">
    <div class="container">
        <h1 style="font-size: 3rem; color: #FFFFFF; text-decoration: underline;">About Digifusion</h1>
        <p style="color: #FFFFFF; margin-bottom: 10px; font-size: 1.2rem;">Learn more about what Diggers are.</p>
    </div>
</section>

<!-- Brand Value Section -->
<section class="platform-section py-5 mt-5">
    <div class="container-wrapper">
        <div class="container text-center">
            <h2 class="text-center mb-5" style="font-size: 2.2rem; color: #333;">Brand Value</h2>
            <div class="row">
                <?php foreach ($brandValues as $value): ?>
                    <div class="col-md-4 col-sm-6 col-12 mb-4">
                        <div class="value-box p-4" style="background-color: #ffffff; color: #333; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); transition: transform 0.2s ease, box-shadow 0.2s ease;">
                            <p style="font-size: 1.1rem; text-align: center; line-height: 1.5;"><?= $value['value']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<style>
    /* Outer container with orange background */
    .container-wrapper {
        background-color: #F7C433; /* Orange background */
        padding: 40px 20px; /* Padding with the orange background */
        border-radius: 10px;
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1); /* Soft shadow around the entire section */
    }

    /* Inner container (where the content resides) */
    .platform-section .container {
        max-width: 90%;
        background-color: #ffffff; /* White background for the content */
        padding: 30px;
        border-radius: 10px;
        position: relative;
    }

    /* Value boxes with shadow and hover effect */
    .value-box {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        background-color: #ffffff; /* White background for the content box */
        padding: 20px;
        text-align: center;
        border-radius: 8px;
        border: 1px solid #ddd;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for the box */
    }

    .value-box:hover {
        transform: translateY(-5px); /* Slight lift effect */
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Stronger shadow on hover */
    }

    .value-box p {
        font-size: 1.1rem;
        color: #333;
        font-weight: normal;
        line-height: 1.5;
    }

    .platform-section h2 {
        font-size: 2.2rem;
        color: #333;
        font-weight: 600;
    }

    /* Responsive design for smaller screens */
    @media (max-width: 768px) {
        .value-box {
            padding: 18px;
        }

        .platform-section h2 {
            font-size: 2rem;
        }
    }

    @media (max-width: 480px) {
        .value-box p {
            font-size: 1rem;
        }

        .platform-section h2 {
            font-size: 1.8rem;
        }
    }
</style>

<!-- Our Team Section -->
<section class="our-team-section" style="padding: 40px 20px;">
    <div class="container">
        <h2>Our Team</h2>
        <div class="row">
            <?php foreach ($teamMembers as $team): ?>
                <div class="col-md-4">
                    <div class="team-card" style="display: flex; flex-direction: column; align-items: center; padding: 20px; border: 1px solid #ddd; border-radius: 8px; margin-bottom: 20px;">
                        <!-- Menampilkan Foto Tim di Tengah -->
                        <img src="<?= base_url('image/' . $team['photo']); ?>" alt="<?= $team['name']; ?>" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover;">
                        <h3 style="margin-top: 15px;"><?= $team['name']; ?></h3>
                        <p><?= $team['position']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
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
</style>
<?= $this->endSection(); ?>
