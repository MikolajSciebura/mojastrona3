<?php
$currentPage = 'home';
$pageTitle = 'MSTechPC - Ekskluzywne Komputery Gamingowe Częstochowa';
$pageDesc = 'Odkryj potęgę gamingu z MSTechPC. Składamy najlepsze komputery w Częstochowie i Kłobucku. Sprawdź nasze gotowe zestawy i konfigurator.';

require_once 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container hero-grid">
        <div class="hero-content animate-up">
            <span class="badge badge-primary mb-20">Premium PC Builder</span>
            <h1>Potęga, która <br><span>Inspiruje.</span></h1>
            <p>Projektujemy i budujemy najbardziej zaawansowane komputery gamingowe w Częstochowie. Dołącz do technologicznej elity i poczuj różnicę.</p>
            <div class="hero-actions mt-30">
                <a href="/shop.php" class="btn btn-primary">Zobacz Gotowe Zestawy</a>
                <a href="/configurator.php" class="btn btn-outline">Skonfiguruj PC</a>
            </div>
            <div class="hero-stats mt-50">
                <div class="stat-item">
                    <span class="stat-num">500+</span>
                    <span class="stat-text">Złożonych maszyn</span>
                </div>
                <div class="stat-item">
                    <span class="stat-num">100%</span>
                    <span class="stat-text">Zadowolenia</span>
                </div>
            </div>
        </div>
        <div class="hero-image float mobile-hidden">
            <img src="/assets/img/hero-pc.png" alt="Ekskluzywny Komputer Gamingowy MSTechPC">
        </div>
    </div>

    <div class="hero-bg-glow"></div>
</section>

<!-- Features Section -->
<section class="section">
    <div class="container">
        <div class="text-center mb-50 reveal">
            <h2 class="section-title">Dlaczego <span>MSTechPC?</span></h2>
            <p>Lokalna marka z pasją do najwyższej wydajności.</p>
        </div>

        <div class="grid grid-3 gap-30">
            <div class="glass-card reveal">
                <div class="card-icon"><i class="fa-solid fa-microchip"></i></div>
                <h3>Selekcjonowane podzespoły</h3>
                <p>Korzystamy wyłącznie z komponentów renomowanych marek. Każdy procesor i karta są testowane pod kątem wydajności.</p>
            </div>
            <div class="glass-card reveal">
                <div class="card-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                <h3>Mistrzowski montaż</h3>
                <p>Perfekcyjny cable management i optymalny przepływ powietrza to nasz standard. Twoja maszyna będzie wyglądać jak dzieło sztuki.</p>
            </div>
            <div class="glass-card reveal">
                <div class="card-icon"><i class="fa-solid fa-shield-halved"></i></div>
                <h3>Gwarancja Premium</h3>
                <p>3 lata pełnej gwarancji i dożywotnie wsparcie techniczne. Jesteśmy blisko Ciebie w Częstochowie i Kłobucku.</p>
            </div>
        </div>
    </div>
</section>

<!-- Local SEO CTA -->
<section class="section bg-darker">
    <div class="container reveal">
        <div class="glass-card cta-banner">
            <div class="cta-content">
                <h2>Twój Serwis i Sklep w <span>Częstochowie</span></h2>
                <p>Szukasz profesjonalnego serwisu komputerowego w Kłobucku lub Częstochowie? A może chcesz złożyć komputer na zamówienie? Jesteśmy tu, by pomóc.</p>
                <div class="cta-btns mt-30">
                    <a href="/serwis.php" class="btn btn-outline">Serwis IT</a>
                    <a href="/kontakt.php" class="btn btn-primary">Umów się na konsultację</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.hero-section {
    min-height: 100vh;
    padding-top: 150px;
    position: relative;
    overflow: hidden;
    background: radial-gradient(circle at 70% 30%, rgba(0, 210, 255, 0.1), transparent 50%);
}
.hero-grid {
    display: grid;
    grid-template-columns: 1.2fr 1fr;
    align-items: center;
    gap: 50px;
}
.hero-content h1 {
    font-size: 4.5rem;
    margin-bottom: 25px;
}
.hero-content p {
    font-size: 1.2rem;
    color: var(--text-muted);
    max-width: 550px;
}
.hero-stats {
    display: flex;
    gap: 40px;
}
.stat-num {
    display: block;
    font-size: 2rem;
    font-family: 'Orbitron', sans-serif;
    color: var(--primary);
    font-weight: 800;
}
.stat-text {
    font-size: 0.9rem;
    color: var(--text-dark);
    text-transform: uppercase;
    letter-spacing: 1px;
}
.mb-20 { margin-bottom: 20px; }
.mb-50 { margin-bottom: 50px; }
.mt-50 { margin-top: 50px; }

.card-icon {
    font-size: 2.5rem;
    color: var(--primary);
    margin-bottom: 20px;
}
.glass-card h3 {
    margin-bottom: 15px;
}

.cta-banner {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 80px 40px;
    background: linear-gradient(135deg, rgba(0, 210, 255, 0.05), rgba(58, 123, 213, 0.05));
}
.cta-content h2 { font-size: 2.5rem; margin-bottom: 20px; }
.cta-content p { font-size: 1.1rem; color: var(--text-muted); max-width: 700px; margin: 0 auto; }
.cta-btns { display: flex; justify-content: center; gap: 20px; }

@media (max-width: 992px) {
    .hero-grid { grid-template-columns: 1fr; text-align: center; }
    .hero-content p { margin: 0 auto 25px; }
    .hero-actions, .hero-stats { justify-content: center; }
    .hero-content h1 { font-size: 3rem; }
}
</style>

<?php require_once 'includes/footer.php'; ?>
