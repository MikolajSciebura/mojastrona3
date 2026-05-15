<?php
require_once '../includes/functions.php';
require_once '../config/db.php';

$pageTitle = "Sklep - MSTechPC";
include '../includes/header.php';

$category = isset($_GET['category']) ? $_GET['category'] : 'all';

// Mock data for products if DB is not populated
$products = [
    [
        'id' => 1,
        'name' => 'MSTech Ultra Gaming X1',
        'price' => 7499,
        'category' => 'gaming',
        'image' => '/assets/img/pc1.png',
        'specs' => 'RTX 4070 Ti, Ryzen 7 7800X3D, 32GB DDR5',
        'tag' => 'BESTSELLER'
    ],
    [
        'id' => 2,
        'name' => 'MSTech Workstation Pro',
        'price' => 12999,
        'category' => 'workstation',
        'image' => '/assets/img/pc2.png',
        'specs' => 'RTX 4090, Intel i9-14900K, 64GB DDR5',
        'tag' => 'PREMIUM'
    ],
    [
        'id' => 3,
        'name' => 'MSTech Streamer Edition',
        'price' => 5599,
        'category' => 'streaming',
        'image' => '/assets/img/pc3.png',
        'specs' => 'RTX 4060 Ti, Ryzen 5 7600, 32GB DDR5',
        'tag' => ''
    ],
    [
        'id' => 4,
        'name' => 'MSTech Office Compact',
        'price' => 2499,
        'category' => 'office',
        'image' => '/assets/img/pc4.png',
        'specs' => 'Intel i5-13400, 16GB RAM, 512GB NVMe',
        'tag' => ''
    ]
];
?>

<div class="shop-header section-padding">
    <div class="container">
        <h1 class="section-title">Nasze <span>Konfiguracje</span></h1>
        <p>Wybierz gotowy zestaw przygotowany przez naszych ekspertów.</p>
    </div>
</div>

<section class="shop-main container pb-100">
    <div class="shop-filters-container">
        <div class="shop-filters">
        <button class="filter-btn active" data-category="all">Wszystkie</button>
        <button class="filter-btn" data-category="gaming">Gaming</button>
        <button class="filter-btn" data-category="workstation">Workstation</button>
        <button class="filter-btn" data-category="office">Biuro</button>
        <button class="filter-btn" data-category="streaming">Streaming</button>
    </div>

    <div class="product-grid" id="productGrid">
        <?php foreach ($products as $p): ?>
            <div class="product-card glass-card animate-up" data-category="<?php echo $p['category']; ?>">
                <?php if ($p['tag']): ?>
                    <span class="product-tag"><?php echo $p['tag']; ?></span>
                <?php endif; ?>
                <div class="product-img">
                    <img src="<?php echo $p['image']; ?>" alt="<?php echo $p['name']; ?>">
                </div>
                <div class="product-info">
                    <span class="p-category"><?php echo ucfirst($p['category']); ?></span>
                    <h3><?php echo $p['name']; ?></h3>
                    <p class="p-specs"><?php echo $p['specs']; ?></p>
                    <div class="p-footer">
                        <span class="p-price"><?php echo formatPrice($p['price']); ?></span>
                        <a href="/shop/product.php?id=<?php echo $p['id']; ?>" class="btn btn-primary btn-sm">Szczegóły</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<style>
.pb-100 { padding-bottom: 100px; }
.shop-header { text-align: center; background: radial-gradient(circle at center, rgba(0, 210, 255, 0.1), transparent); }
.shop-filters-container { margin-top: -30px; position: relative; z-index: 10; margin-bottom: 50px; }
.shop-filters { display: flex; justify-content: center; gap: 15px; flex-wrap: wrap; }
.filter-btn { padding: 10px 25px; border-radius: 50px; border: 1px solid var(--glass-border); background: var(--glass); color: #fff; cursor: pointer; transition: var(--transition); }
.filter-btn.active, .filter-btn:hover { background: var(--primary); border-color: var(--primary); color: #000; }

.product-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 30px; }
.product-card { position: relative; padding: 0; overflow: hidden; }
.product-tag { position: absolute; top: 15px; left: 15px; background: var(--accent); color: #fff; padding: 5px 12px; border-radius: 4px; font-size: 0.7rem; font-weight: 700; z-index: 10; }
.product-img { height: 250px; background: rgba(0,0,0,0.2); display: flex; align-items: center; justify-content: center; padding: 20px; }
.product-info { padding: 25px; }
.p-category { color: var(--primary); font-size: 0.8rem; font-weight: 700; text-transform: uppercase; }
.product-info h3 { margin: 10px 0; font-family: var(--font-heading); font-size: 1.2rem; }
.p-specs { font-size: 0.9rem; color: var(--text-muted); margin-bottom: 20px; height: 40px; }
.p-footer { display: flex; justify-content: space-between; align-items: center; }
.p-price { font-size: 1.4rem; font-weight: 700; color: #fff; }
.btn-sm { padding: 8px 16px; font-size: 0.9rem; }
</style>

<script>
document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelector('.filter-btn.active').classList.remove('active');
        btn.classList.add('active');
        const cat = btn.dataset.category;
        document.querySelectorAll('.product-card').forEach(card => {
            if (cat === 'all' || card.dataset.category === cat) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });
});
</script>

<?php include '../includes/footer.php'; ?>
