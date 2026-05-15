<?php
require_once 'includes/functions.php';
$pageTitle = "MSTechPC - Ekskluzywne Komputery Gamingowe Częstochowa";
include 'includes/header.php';
?>

<section class="hero">
    <div class="container">
        <div class="hero-content animate-up">
            <h1>Potęga, która <br><span>Inspiruje.</span></h1>
            <p>Projektujemy i budujemy najbardziej zaawansowane komputery gamingowe w Częstochowie. Dołącz do elity technologicznej.</p>
            <div class="hero-btns">
                <a href="/shop/" class="btn btn-primary">Zobacz Sklep</a>
                <a href="/configurator.php" class="btn btn-outline">Skonfiguruj PC</a>
            </div>
        </div>
    </div>
    <div class="hero-visual">
        <!-- Można tu dodać animowany model 3D lub grafikę premium -->
    </div>
</section>

<section class="features section-padding">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title">Dlaczego MSTechPC?</h2>
            <p>Łączymy pasję do gamingu z inżynieryjną precyzją.</p>
        </div>
        <div class="grid grid-3">
            <div class="glass-card">
                <i class="fas fa-microchip"></i>
                <h3>Najlepsze Podzespoły</h3>
                <p>Tylko selekcjonowane komponenty od topowych producentów: NVIDIA, AMD, Intel.</p>
            </div>
            <div class="glass-card">
                <i class="fas fa-tools"></i>
                <h3>Precyzyjny Montaż</h3>
                <p>Każdy zestaw to dzieło sztuki z perfekcyjnym cable managementem.</p>
            </div>
            <div class="glass-card">
                <i class="fas fa-shield-alt"></i>
                <h3>Gwarancja Premium</h3>
                <p>3 lata pełnej gwarancji i dożywotnie wsparcie techniczne dla naszych klientów.</p>
            </div>
        </div>
    </div>
</section>

<section class="local-seo section-padding">
    <div class="container">
        <div class="grid grid-2 align-center">
            <div class="seo-content">
                <h2>Twoje Centrum Technologiczne w <span>Częstochowie</span> i <span>Kłobucku</span></h2>
                <p>Szukasz najlepszego komputera w okolicy? MSTechPC to nie tylko sklep, to lokalna marka premium. Specjalizujemy się w:</p>
                <ul class="check-list">
                    <li><i class="fas fa-check"></i> Składanie komputerów Częstochowa</li>
                    <li><i class="fas fa-check"></i> Serwis komputerowy Kłobuck</li>
                    <li><i class="fas fa-check"></i> Profesjonalne doradztwo IT</li>
                    <li><i class="fas fa-check"></i> Komputery na zamówienie dla firm i graczy</li>
                </ul>
                <a href="/kontakt.php" class="btn btn-primary">Odwiedź nas</a>
            </div>
            <div class="seo-image">
                <img src="/assets/img/local-service.jpg" alt="Serwis komputerowy Częstochowa MSTechPC" class="img-rounded">
            </div>
        </div>
    </div>
</section>

<section class="stats section-padding">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <span class="stat-number">500+</span>
                <span class="stat-label">Złożonych Komputerów</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">100%</span>
                <span class="stat-label">Zadowolonych Klientów</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">24h</span>
                <span class="stat-label">Czas reakcji serwisu</span>
            </div>
        </div>
    </div>
</section>

<style>
.section-padding { padding: 100px 0; }
.text-center { text-align: center; }
.section-header { margin-bottom: 60px; }
.section-title { font-family: var(--font-heading); font-size: 2.5rem; margin-bottom: 20px; }
.grid { display: grid; gap: 30px; }
.grid-3 { grid-template-columns: repeat(3, 1fr); }
.grid-2 { grid-template-columns: repeat(2, 1fr); }
.align-center { align-items: center; }

.glass-card i { font-size: 3rem; color: var(--primary); margin-bottom: 20px; }
.glass-card h3 { font-family: var(--font-heading); margin-bottom: 15px; }

.check-list { margin: 25px 0; }
.check-list li { margin-bottom: 15px; display: flex; align-items: center; gap: 15px; }
.check-list i { color: var(--success); }

.stats-grid { display: flex; justify-content: space-around; background: var(--glass); padding: 50px; border-radius: 20px; border: 1px solid var(--glass-border); }
.stat-item { text-align: center; }
.stat-number { display: block; font-size: 3rem; font-family: var(--font-heading); color: var(--primary); font-weight: 700; }
.stat-label { color: var(--text-muted); font-weight: 600; text-transform: uppercase; letter-spacing: 1px; }

@media (max-width: 768px) {
    .grid-3, .grid-2 { grid-template-columns: 1fr; }
    .stats-grid { flex-direction: column; gap: 40px; }
}
</style>

<?php include 'includes/footer.php'; ?>
