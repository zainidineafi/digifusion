<?= $this->extend('layout/app'); ?>
<?= $this->section('head'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Read the latest articles about Diggers. Explore insights, updates, and information to enhance your knowledge.">
    <title>Articles - Diggers</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<!-- Banner -->
<section class="hero-section text-center" style="background-color: #F7C433; padding: 40px 20px; border-radius: 30px;">
    <div class="container">
        <h1 style="font-size: 3rem; color: #FFFFFF; text-decoration: underline;">Blogs</h1>
        <p style="color: #FFFFFF; margin-bottom: 40px; font-size: 1.2rem;">Read some of the existing Blogs about Diggers</p>
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

<!-- Sort Dropdown -->
<section class="sort-section" style="text-align: center; margin: 20px 0;">
    <label for="sort-select" class="sort-label">Sort By:</label>
    <div class="custom-select-wrapper">
        <select id="sort-select" class="custom-select" onchange="sortArticles()">
            <option value="alphabetical">Alphabetical</option>
            <option value="date_newest">Date (Newest First)</option>
            <option value="date_oldest">Date (Oldest First)</option>
        </select>
    </div>
</section>

<!-- Card Articles -->
<section>
    <div class="container" style="padding: 0 15px;">
        <div class="row g-4" id="article-list" style="display: flex; flex-direction: column;">
            <?php if (!empty($articles)): ?>
                <?php foreach ($articles as $article): ?>
                    <div class="col-12 article-item" data-title="<?= strtolower($article['judul_artikel']); ?>" data-date="<?= strtotime($article['created_at']); ?>">
                        <div class="card h-100 d-flex flex-row card-shadow" style="margin: 10px 0; align-items: stretch; flex-wrap: wrap;">
                            <div class="card-img-wrapper">
                                <img src="<?= base_url('image/' . $article['foto_artikel']); ?>" class="card-img-top article-img" alt="<?= $article['judul_artikel']; ?>">
                            </div>
                            <div class="card-body" style="flex: 1; padding: 20px; position: relative;">
                                <h5 class="card-title"><?= $article['judul_artikel']; ?></h5>
                                <p class="card-text penulis-artikel"><strong>Author :</strong> <?= $article['penulis']; ?></p>
                                <p class="card-text sinopsis-artikel"><?= $article['sinopsis']; ?></p>
                                <p class="card-text" style="font-size: 0.9rem; color: #999;">Created at: <?= date('d M Y', strtotime($article['created_at'])); ?></p>
                                <a href="<?= base_url('artikel/detail/' . $article['slug']); ?>" class="read-more">Read-more</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No articles found.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<style>
    .card-shadow {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s, box-shadow 0.3s;
        border-radius: 15px;
        overflow: hidden;
    }

    .card-shadow:hover {
        transform: translateY(-5px) scale(1.03);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    }

    .card {
        display: flex;
        flex-direction: row;
        align-items: stretch;
        border-radius: 15px;
        overflow: hidden;
    }

    .card-img-wrapper {
        flex-shrink: 0;
        width: 200px;
        height: 200px;
        background-color: #f9f9f9;
        overflow: hidden;
        border-radius: 15px 0 0 15px;
        margin-bottom: 10px;
    }

    .article-img {
        object-fit: cover;
        width: 100%;
        height: 100%;
        border-radius: 15px 0 0 15px;
    }

    .card-body {
        word-wrap: break-word;
        flex: 1;
        padding: 20px;
    }

    .sinopsis-artikel {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .read-more {
        position: absolute;
        bottom: 20px;
        right: 20px;
        background-color: #F7C433;
        color: white !important;
        padding: 10px 15px;
        text-decoration: none;
        border-radius: 25px;
        font-weight: bold;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .read-more:hover {
        background-color: #F39C12;
        transform: translateY(-2px);
    }

    @media (max-width: 768px) {
        .card {
            flex-direction: column;
        }

        .card-img-wrapper {
            width: 100%;
            height: 200px;
            border-radius: 10px 10px 0 0;
        }

        .card-body {
            padding: 15px;
        }

        .read-more {
            bottom: 10px;
            right: 10px;
        }
    }
</style>

<!-- CSS untuk gaya baru Sort By -->
<style>
    .sort-label {
        font-weight: bold;
        margin-right: 10px;
    }

    .custom-select-wrapper {
        display: inline-block;
        position: relative;
    }

    .custom-select {
        background-color: #fff;
        border: 2px solid #F6C135;
        border-radius: 8px;
        padding: 10px;
        font-size: 1rem;
        cursor: pointer;
        appearance: none;
        width: 200px;
        text-align: center;
        color: #333;
    }

    .custom-select:focus {
        outline: none;
        border-color: #F7C433;
    }

    .custom-select-wrapper::after {
        content: "▼";
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 0.8rem;
        color: #999;
    }
</style>

<!-- JavaScript untuk mengatur urutan artikel -->
<script>
    function sortArticles() {
        var sortBy = document.getElementById('sort-select').value;
        var articles = document.querySelectorAll('.article-item');
        var articleList = Array.from(articles);
        
        articleList.sort(function(a, b) {
            var dateA = a.getAttribute('data-date');
            var dateB = b.getAttribute('data-date');
            var titleA = a.getAttribute('data-title');
            var titleB = b.getAttribute('data-title');

            if (sortBy === 'alphabetical') {
                return titleA.localeCompare(titleB);
            } else if (sortBy === 'date_newest') {
                return dateB - dateA; // Sort by newest
            } else if (sortBy === 'date_oldest') {
                return dateA - dateB; // Sort by oldest
            }
        });

        var articleContainer = document.getElementById('article-list');
        articleContainer.innerHTML = ''; // Clear existing articles
        articleList.forEach(function(article) {
            articleContainer.appendChild(article); // Append sorted articles
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        // Default sort setting
        var defaultSort = 'date_newest'; // Set default here

        // Set the dropdown to the default sort option
        document.getElementById('sort-select').value = defaultSort;

        // Apply the initial sorting
        sortArticles();

        // Update dropdown text when option changes
        document.getElementById('sort-select').addEventListener('change', function () {
            sortArticles();
        });
    });
</script>

<?= $this->endSection(); ?>
