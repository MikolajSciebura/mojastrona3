<?php
require_once '../includes/functions.php';
$id = $_GET['id'] ?? 1;
$pageTitle = "Szczegóły Produktu - MSTechPC";
include '../includes/header.php';

// Mock product
$product = [
    'name' => 'MSTech Ultra Gaming X1',
    'price' => 7499,
    'category' => 'gaming',
    'image' => '/assets/img/pc1.png',
    'desc' => 'Ekstremalna wydajność dla najbardziej wymagających graczy. Wyposażony w najnowszy procesor i kartę graficzną NVIDIA.',
    'specs' => [
        'Procesor' => 'AMD Ryzen 7 7800X3D',
        'Karta graficzna' => 'NVIDIA GeForce RTX 4070 Ti Super 16GB',
        'Pamięć RAM' => '32GB DDR5 6000MHz CL30',
        'Dysk SSD' => '2TB NVMe PCIe 4.0',
        'Zasilacz' => '850W 80+ Gold'
    ],
    'fps' => [
        'Cyberpunk 2077 (4K)' => '75 FPS',
        'Warzone 3 (1440p)' => '180 FPS',
        'Counter-Strike 2' => '500+ FPS'
    ]
];
?>

<div class="product-details section-padding">
    <div class="container">
        <div class="grid grid-2">
            <div class="product-gallery">
                <div class="glass-card main-img">
                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                </div>
            </div>
            <div class="product-info-detailed">
                <span class="p-category"><?php echo $product['category']; ?></span>
                <h1 class="section-title"><?php echo $product['name']; ?></h1>
                <div class="p-price-large"><?php echo formatPrice($product['price']); ?></div>
                <p class="p-desc"><?php echo $product['desc']; ?></p>

                <div class="p-actions mt-30">
                    <button class="btn btn-primary btn-lg">Dodaj do koszyka</button>
                    <button class="btn btn-outline btn-lg"><i class="far fa-heart"></i></button>
                </div>

                <div class="p-delivery-info mt-30">
                    <p><i class="fas fa-truck"></i> Darmowa dostawa kurierem</p>
                    <p><i class="fas fa-history"></i> Wysyłka w 24h</p>
                </div>
            </div>
        </div>

        <div class="product-tabs mt-50">
            <div class="glass-card">
                <div class="tabs-nav">
                    <button class="tab-btn active" data-tab="specs">Specyfikacja</button>
                    <button class="tab-btn" data-tab="fps">Wydajność w grach</button>
                </div>
                <div class="tab-content active" id="specs">
                    <table class="specs-table">
                        <?php foreach ($product['specs'] as $key => $val): ?>
                        <tr>
                            <td><?php echo $key; ?></td>
                            <td><?php echo $val; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <div class="tab-content" id="fps">
                    <div class="fps-grid">
                        <?php foreach ($product['fps'] as $game => $fps): ?>
                        <div class="fps-item">
                            <span class="game-name"><?php echo $game; ?></span>
                            <span class="fps-val"><?php echo $fps; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.main-img img { width: 100%; height: auto; }
.p-price-large { font-size: 2.5rem; font-weight: 800; color: var(--primary); margin: 20px 0; }
.p-desc { color: var(--text-muted); font-size: 1.1rem; }
.btn-lg { padding: 15px 40px; font-size: 1.1rem; }
.p-delivery-info p { margin-bottom: 10px; font-size: 0.9rem; display: flex; align-items: center; gap: 10px; color: var(--success); }

.tabs-nav { display: flex; gap: 20px; border-bottom: 1px solid var(--glass-border); margin-bottom: 30px; }
.tab-btn { background: none; border: none; color: var(--text-muted); padding: 15px 0; cursor: pointer; font-family: var(--font-heading); font-weight: 600; position: relative; }
.tab-btn.active { color: var(--primary); }
.tab-btn.active::after { content: ''; position: absolute; bottom: -1px; left: 0; width: 100%; height: 2px; background: var(--primary); }
.tab-content { display: none; }
.tab-content.active { display: block; }

.specs-table { width: 100%; }
.specs-table td { padding: 15px; border-bottom: 1px solid var(--glass-border); }
.specs-table td:first-child { font-weight: 700; color: var(--text-muted); width: 30%; }

.fps-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
.fps-item { background: rgba(255,255,255,0.02); padding: 20px; border-radius: 10px; text-align: center; border: 1px solid var(--glass-border); }
.game-name { display: block; font-size: 0.8rem; color: var(--text-muted); margin-bottom: 10px; }
.fps-val { font-size: 1.5rem; font-weight: 700; color: var(--primary); }
</style>

<script>
document.querySelectorAll('.tab-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelector('.tab-btn.active').classList.remove('active');
        document.querySelector('.tab-content.active').classList.remove('active');

        btn.classList.add('active');
        document.getElementById(btn.dataset.tab).classList.add('active');
    });
});
</script>

<?php include '../includes/footer.php'; ?>
