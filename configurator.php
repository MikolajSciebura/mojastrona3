<?php
$currentPage = 'configurator';
$pageTitle = 'Konfigurator PC AI - MSTechPC';
$extraScripts = ['configurator.js'];

require_once 'includes/header.php';
?>

<section class="section">
    <div class="container">
        <div class="text-center reveal mb-50">
            <h1 class="section-title">Konfigurator <span>PC AI</span></h1>
            <p>Dobierz podzespoły, a nasz system sprawdzi ich kompatybilność w czasie rzeczywistym.</p>
        </div>

        <div class="config-layout">
            <div class="config-main reveal">
                <!-- Group 1: CPU -->
                <div class="config-group mb-40">
                    <h3 class="group-title">1. Wybierz Procesor</h3>
                    <div class="grid grid-2 gap-20 mt-20">
                        <div class="config-item glass-card" data-type="cpu" data-name="Intel Core i7-14700K" data-price="1849">
                            <div class="item-info">
                                <h4>Intel Core i7-14700K</h4>
                                <p>20 rdzeni, do 5.6 GHz</p>
                            </div>
                            <div class="item-price">+1 849 zł</div>
                        </div>
                        <div class="config-item glass-card" data-type="cpu" data-name="AMD Ryzen 7 7800X3D" data-price="1799">
                            <div class="item-info">
                                <h4>AMD Ryzen 7 7800X3D</h4>
                                <p>8 rdzeni, L3 Cache 96MB</p>
                            </div>
                            <div class="item-price">+1 799 zł</div>
                        </div>
                    </div>
                </div>

                <!-- Group 2: GPU -->
                <div class="config-group mb-40">
                    <h3 class="group-title">2. Wybierz Kartę Graficzną</h3>
                    <div class="grid grid-2 gap-20 mt-20">
                        <div class="config-item glass-card" data-type="gpu" data-name="RTX 4070 Ti Super" data-price="3899">
                            <div class="item-info">
                                <h4>NVIDIA RTX 4070 Ti Super</h4>
                                <p>16GB GDDR6X, DLSS 3.5</p>
                            </div>
                            <div class="item-price">+3 899 zł</div>
                        </div>
                        <div class="config-item glass-card" data-type="gpu" data-name="RTX 4080 Super" data-price="4999">
                            <div class="item-info">
                                <h4>NVIDIA RTX 4080 Super</h4>
                                <p>16GB GDDR6X, Gaming 4K</p>
                            </div>
                            <div class="item-price">+4 999 zł</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Summary -->
            <aside class="config-sidebar reveal">
                <div class="glass-card sticky-sidebar">
                    <h3>Twoja Konfiguracja</h3>
                    <ul class="summary-list mt-20" id="configSummaryList">
                        <li class="empty-msg">Nie wybrano jeszcze podzespołów</li>
                    </ul>
                    <div class="divider mt-20 mb-20"></div>
                    <div class="total-box flex">
                        <span>Suma:</span>
                        <span id="configTotalPrice">0 zł</span>
                    </div>
                    <button class="btn btn-primary btn-block mt-30">Dodaj do koszyka</button>

                    <div class="ai-recommendation mt-30">
                        <i class="fa-solid fa-robot"></i>
                        <p><strong>Rekomendacja AI:</strong> Wybrany procesor i karta graficzna zapewnią stabilne 144 FPS w 1440p Ultra.</p>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

<style>
.config-layout {
    display: grid;
    grid-template-columns: 1fr 380px;
    gap: 40px;
    align-items: start;
}
.group-title { font-size: 1.2rem; color: var(--primary); }
.config-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
    border: 1px solid var(--border-glass);
    padding: 20px;
}
.config-item.selected {
    border-color: var(--primary);
    background: rgba(0, 210, 255, 0.05);
}
.item-info h4 { font-size: 1rem; margin-bottom: 5px; }
.item-info p { font-size: 0.8rem; color: var(--text-dark); }
.item-price { font-weight: 700; color: var(--success, #00ff88); }

.sticky-sidebar { position: sticky; top: 100px; }
.summary-list li {
    display: flex;
    justify-content: space-between;
    font-size: 0.9rem;
    margin-bottom: 12px;
    color: var(--text-muted);
}
.empty-msg { color: var(--text-dark) !important; font-style: italic; }
.divider { height: 1px; background: var(--border-glass); }
.total-box { justify-content: space-between; font-size: 1.4rem; font-weight: 800; }
.btn-block { width: 100%; }

.ai-recommendation {
    display: flex;
    gap: 15px;
    padding: 15px;
    background: rgba(58, 123, 213, 0.1);
    border-radius: var(--radius-md);
    font-size: 0.8rem;
    line-height: 1.4;
}
.ai-recommendation i { font-size: 1.5rem; color: var(--primary); }

@media (max-width: 992px) {
    .config-layout { grid-template-columns: 1fr; }
}
</style>

<?php require_once 'includes/footer.php'; ?>
