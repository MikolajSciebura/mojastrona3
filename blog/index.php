<?php
require_once '../includes/functions.php';
$pageTitle = "Blog Technologiczny - MSTechPC";
include '../includes/header.php';

$posts = [
    [
        'id' => 1,
        'title' => 'Jaki komputer gamingowy kupić w 2026?',
        'excerpt' => 'Przewodnik po najnowszych trendach i podzespołach, które zdominują rynek w nadchodzącym roku...',
        'date' => '15 Paź 2025',
        'image' => '/assets/img/blog1.jpg',
        'category' => 'Poradniki'
    ],
    [
        'id' => 2,
        'title' => 'RTX 5070 vs RTX 5080 - co wybrać?',
        'excerpt' => 'Dogłębna analiza wydajności nowej generacji kart graficznych NVIDIA Blackwell...',
        'date' => '10 Paź 2025',
        'image' => '/assets/img/blog2.jpg',
        'category' => 'Hardware'
    ],
    [
        'id' => 3,
        'title' => 'Najlepszy komputer do GTA 6',
        'excerpt' => 'Sprawdź nasze rekomendacje zestawów, które pozwolą Ci cieszyć się nowym GTA w pełnej krasie...',
        'date' => '05 Paź 2025',
        'image' => '/assets/img/blog3.jpg',
        'category' => 'Gaming'
    ]
];
?>

<div class="blog-header section-padding">
    <div class="container text-center">
        <h1 class="section-title">Centrum <span>Wiedzy</span></h1>
        <p>Najnowsze testy, recenzje i poradniki ze świata technologii.</p>
    </div>
</div>

<section class="blog-grid container pb-100">
    <div class="grid grid-3">
        <?php foreach ($posts as $post): ?>
            <article class="blog-card glass-card">
                <div class="blog-img">
                    <img src="<?php echo $post['image']; ?>" alt="<?php echo $post['title']; ?>">
                    <span class="blog-cat"><?php echo $post['category']; ?></span>
                </div>
                <div class="blog-body">
                    <span class="blog-date"><?php echo $post['date']; ?></span>
                    <h3><a href="/blog/post.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h3>
                    <p><?php echo $post['excerpt']; ?></p>
                    <a href="/blog/post.php?id=<?php echo $post['id']; ?>" class="read-more">Czytaj dalej <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<style>
.blog-header { background: radial-gradient(circle at 10% 20%, rgba(255, 0, 85, 0.05), transparent 40%); }
.blog-card { padding: 0; overflow: hidden; height: 100%; display: flex; flex-direction: column; }
.blog-img { position: relative; height: 200px; overflow: hidden; }
.blog-img img { width: 100%; height: 100%; object-fit: cover; transition: var(--transition); }
.blog-card:hover .blog-img img { transform: scale(1.1); }
.blog-cat { position: absolute; bottom: 15px; left: 15px; background: var(--primary); color: #000; padding: 4px 12px; border-radius: 4px; font-size: 0.75rem; font-weight: 700; }
.blog-body { padding: 25px; flex-grow: 1; display: flex; flex-direction: column; }
.blog-date { font-size: 0.8rem; color: var(--text-muted); margin-bottom: 10px; display: block; }
.blog-body h3 { font-family: var(--font-heading); font-size: 1.1rem; margin-bottom: 15px; line-height: 1.4; }
.blog-body p { font-size: 0.9rem; color: var(--text-muted); margin-bottom: 20px; flex-grow: 1; }
.read-more { color: var(--primary); font-weight: 600; font-size: 0.9rem; display: flex; align-items: center; gap: 10px; }
.read-more:hover { gap: 15px; }
</style>

<?php include '../includes/footer.php'; ?>
