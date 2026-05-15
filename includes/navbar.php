<!-- includes/navbar.php -->
<header class="main-header">
    <div class="container navbar-container">
        <div class="logo">
            <a href="/">MSTech<span>PC</span></a>
        </div>

        <nav class="nav-links mobile-hidden">
            <ul>
                <li><a href="/" class="<?php echo ($currentPage == 'home') ? 'active' : ''; ?>">Start</a></li>
                <li><a href="/shop.php" class="<?php echo ($currentPage == 'shop') ? 'active' : ''; ?>">Sklep</a></li>
                <li><a href="/configurator.php" class="<?php echo ($currentPage == 'configurator') ? 'active' : ''; ?>">Konfigurator</a></li>
                <li><a href="/serwis.php" class="<?php echo ($currentPage == 'serwis') ? 'active' : ''; ?>">Serwis</a></li>
                <li><a href="/kontakt.php" class="<?php echo ($currentPage == 'kontakt') ? 'active' : ''; ?>">Kontakt</a></li>
            </ul>
        </nav>

        <div class="nav-actions">
            <a href="/cart.php" class="action-icon" aria-label="Koszyk">
                <i class="fa-solid fa-cart-shopping"></i>
                <span class="cart-count">0</span>
            </a>
            <a href="/account/login.php" class="btn btn-outline btn-sm mobile-hidden">
                <i class="fa-regular fa-user"></i> Zaloguj
            </a>
            <button class="mobile-toggle" aria-label="Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>

<style>
.main-header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: var(--header-height);
    background: transparent;
    z-index: 1000;
    transition: var(--transition);
    display: flex;
    align-items: center;
}

.main-header.scrolled {
    background: rgba(5, 5, 5, 0.9);
    backdrop-filter: blur(10px);
    border-bottom: 1px solid var(--border-glass);
    height: 70px;
}

.navbar-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}

.logo a {
    font-family: 'Orbitron', sans-serif;
    font-size: 1.5rem;
    font-weight: 800;
    letter-spacing: 1px;
}

.logo span { color: var(--primary); }

.nav-links ul {
    display: flex;
    gap: 30px;
}

.nav-links a {
    font-size: 0.95rem;
    font-weight: 500;
    color: var(--text-muted);
}

.nav-links a:hover, .nav-links a.active {
    color: var(--primary);
}

.nav-actions {
    display: flex;
    align-items: center;
    gap: 25px;
}

.action-icon {
    position: relative;
    font-size: 1.2rem;
    color: var(--text-white);
}

.cart-count {
    position: absolute;
    top: -8px;
    right: -10px;
    background: var(--primary);
    color: #000;
    font-size: 0.7rem;
    font-weight: 800;
    padding: 2px 5px;
    border-radius: 50%;
    min-width: 18px;
    text-align: center;
}

.mobile-toggle {
    display: none;
    flex-direction: column;
    gap: 6px;
    background: none;
    border: none;
    cursor: pointer;
}

.mobile-toggle span {
    width: 25px;
    height: 2px;
    background: var(--text-white);
    transition: var(--transition);
}

@media (max-width: 768px) {
    .mobile-toggle { display: flex; }
}
</style>
