<?=$this->extend('layout/app'); ?>

<!-- Meta Tags -->
<?=$this->section('head'); ?>
    <meta name="title" content="About | Learn more about what Diggers are.">
    <meta name="description" content="Learn more about what Diggers are.">
    <title>About | Learn more about what Diggers are.</title>
<?=$this->endSection(); ?>

<?=$this->section('content'); ?> 

<!-- banner---> 
<section class="hero-section text-center" style="background-color: #F7C433; padding: 40px 20px; border-radius: 30px;">
    <div class="container">
        <h1 style="font-size: 3rem; color: #FFFFFF; text-decoration: underline;">About Digifusion</h1>
        <p style="color: #FFFFFF; margin-bottom: 40px; font-size: 1.2rem;">Learn more about what Diggers are.</p>
    </div>
</section>

<!-- jurney -->
<section class="container-fluid p-0">
    <h3 class="text-center mt-5 pt-4 pb-5" style="color: #202020;">
        As Diggers progressed, the company's principles and goals were outlined in the vision and mission. <br>
        It is hoped that the consolidation of these principles and targets can become a foundation for <br>
        Diggers and all parties involved, from the founders to academics.
    </h3>
</section>
    
<!-- top vm -->
<section>
    <div class="row no-gutters" style="background-color: #F7C433; width: 100%; height: 400px; display: flex; align-items: center; justify-content: center;">
        <div class="col-md-6 d-flex justify-content-center" style="padding: 0;">
            <div style="color: #FFFFFF; text-align: center;">
                <h1 class="mb-3">Jurney</h1>
                <p>Diggers was founded in 2024 with a team consisting of people who have a passion for digital marketing and digital advertising. Our expertise and experience have provided effective and affordable digital marketing services to increase the effectiveness of your business's online marketing.</p>
            </div>
        </div>
    </div>
</section>

<!-- visi misi -->
<section class="container-fluid">
    <div class="trusted-wrapper">
        <div class="trusted-section">
            <div class="text-container">
                <h3 class="mb-3">Vision</h3>
                <p style="font-weight: 600; margin-bottom: 0;">Develop professional and superior Digital Marketing with national qualifications and competencies.</p>
                <p style="margin-top: 0;">When potential talents come together to form the light of renewal in the digital field,
                their results and collaboration must be able to enliven and inspire many people.</p>
            </div>
        </div>
        <div class="trusted-section">
            <div class="text-container">
                <h3 class="mb-3">Mission</h3>
                <p style="font-weight: 600; margin-bottom: 0;">Commitment</p>
                <p style="margin-top: 0;">Strengthening intellectual commitment to the advancement of digital marketing practices and science through Professional Certification Institution</p>
                <p style="font-weight: 600; margin-bottom: 0;">Develop</p>
                <p style="margin-top: 0;">Develop information technology in digital marketing and formulate competencies in the field of digital marketing</p>
                <p style="font-weight: 600; margin-bottom: 0;">Schematic</p>
                <p style="margin-top: 0;">Ensure that the certification scheme uses the latest competency standards that are relevant and required by the industrial world to ensure the quality and readiness of the workforce to face the challenges and needs of the continuously developing market.</p>
            </div>
        </div>
    </div>
</section>

<!-- founder -->
<section class="platform-section py-5 mt-5">
    <div class="container text-center">
        <h2 class="mb-3 font-weight-bold">Our Team</h2>

        <div class="founder-info text-center">
            <img src="image/f1.jpeg" alt="Founder Image" style="max-width: 200px; border-radius: 50%;">
            <h3>John Doe</h3>
            <p>Success with his business in the IT sector under the name PT. Elecomp Indonesia, he has extensive experience in the IT field, including as a PPEI Facilitator at the Indonesian Ministry of Trade, Gapura Digital Facilitator, and Business Owner of NAKAM Foods Indonesia. With the various potential he has in both the world of IT and marketing, he decided to establish a training center. This training aims to advance MSMEs which are still less capable in dealing with technological developments, by optimizing marketing through current media.</p>
        </div>
        
        <div class="row justify-content-center">
            <!-- Konten lain (jika ada) -->
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

    .trusted-wrapper {
        display: flex;
        justify-content: space-around;
        width: 100%;
        padding: 0 20px;
        margin-top: -60px;
        box-sizing: border-box;
    }

    .trusted-section {
        width: 40%;
        min-height: 400px;
        background-color: white;
        border: 2px solid #F7C43D;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        padding: 20px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .text-container {
        margin: 0;
        text-align: center;
    }

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

    .founder-info {
        margin-top: 20px;
    }

    @media (max-width: 768px) {
        .hero-section h1 {
            font-size: 2.5rem;
        }

        .hero-section p {
            margin-bottom: 20px;
            font-size: 1rem;
        }

        .trusted-wrapper {
            flex-direction: column;
            padding: 0 10px;
        }

        .trusted-section {
            width: 100%;
            margin-bottom: 20px;
        }
    }
</style>

<?=$this->endSection(); ?>
