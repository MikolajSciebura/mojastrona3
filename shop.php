<?php
$currentPage = 'shop';
$pageTitle = 'Sklep Komputerowy - MSTechPC';
$extraScripts = ['shop.js'];

require_once 'includes/header.php';
?>

<section class="section shop-hero">
    <div class="container text-center reveal">
        <h1 class="section-title">Nasze <span>Konfiguracje</span></h1>
        <p>Wybierz jeden z naszych sprawdzonych zestawów, gotowy do wysyłki w 24h.</p>
    </div>
</section>

<section class="section pt-0">
    <div class="container">
        <!-- Filters -->
        <div class="shop-filters-wrapper reveal">
            <div class="glass-card flex gap-20">
                <button class="filter-btn active" data-category="all">Wszystkie</button>
                <button class="filter-btn" data-category="gaming">Gaming</button>
                <button class="filter-btn" data-category="streaming">Streaming</button>
                <button class="filter-btn" data-category="workstation">Workstation</button>
                <button class="filter-btn" data-category="office">Biuro</button>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="grid grid-3 gap-30 mt-50" id="productGrid">
            <!-- Product 1 -->
            <div class="product-card glass-card reveal" data-category="gaming">
                <div class="product-badge">Best Performance</div>
                <div class="product-img">
                    <img src="/assets/img/pc1.png" alt="MSTech Ultra Gaming X1">
                </div>
                <div class="product-info">
                    <span class="p-cat">Gaming Series</span>
                    <h3>MSTech Ultra Gaming X1</h3>
                    <div class="p-specs">
                        <span>RTX 4070 Ti Super</span>
                        <span>Ryzen 7 7800X3D</span>
                        <span>32GB DDR5 6000MHz</span>
                    </div>
                    <div class="p-bottom flex mt-30">
                        <span class="p-price">7 499,00 zł</span>
                        <a href="/shop/product.php?id=1" class="btn btn-primary btn-sm">Szczegóły</a>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card glass-card reveal" data-category="workstation">
                <div class="product-img">
                    <img src="/assets/img/pc2.png" alt="MSTech Workstation Pro">
                </div>
                <div class="product-info">
                    <span class="p-cat">AI & Production</span>
                    <h3>MSTech Workstation Pro</h3>
                    <div class="p-specs">
                        <span>RTX 4090 24GB</span>
                        <span>Intel i9-14900K</span>
                        <span>64GB DDR5 RAM</span>
                    </div>
                    <div class="p-bottom flex mt-30">
                        <span class="p-price">12 999,00 zł</span>
                        <a href="/shop/product.php?id=2" class="btn btn-primary btn-sm">Szczegóły</a>
                    </div>
                </div>
            </div>

            <!-- More products would follow here -->
        </div>
    </div>
</section>

<style>
.shop-hero { padding-bottom: 50px; }
.pt-0 { padding-top: 0; }
.shop-filters-wrapper .glass-card {
    justify-content: center;
    padding: 15px;
    border-radius: 50px;
}
.filter-btn {
    background: transparent;
    border: none;
    color: var(--text-muted);
    font-weight: 600;
    padding: 10px 25px;
    border-radius: 40px;
    cursor: pointer;
    transition: var(--transition);
}
.filter-btn:hover, .filter-btn.active {
    background: var(--primary);
    color: #000;
}

.product-card {
    padding: 0;
    overflow: hidden;
}
.product-badge {
    position: absolute;
    top: 20px;
    left: 20px;
    background: var(--accent);
    color: #fff;
    padding: 5px 15px;
    font-size: 0.7rem;
    font-weight: 800;
    border-radius: 4px;
    z-index: 5;
}
.product-img {
    background: rgba(0,0,0,0.2);
    padding: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 300px;
}
.product-info {
    padding: 25px;
}
.p-cat {
    color: var(--primary);
    font-size: 0.75rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1px;
}
.product-info h3 {
    margin: 10px 0 15px;
    font-size: 1.25rem;
}
.p-specs {
    display: flex;
    flex-direction: column;
    gap: 5px;
    color: var(--text-muted);
    font-size: 0.9rem;
}
.p-bottom {
    justify-content: space-between;
    align-items: center;
}
.p-price {
    font-size: 1.3rem;
    font-weight: 800;
    color: var(--text-white);
}
.btn-sm { padding: 10px 20px; font-size: 0.85rem; }
</style>

<?php require_once 'includes/footer.php'; ?>
