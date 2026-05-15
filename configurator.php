<?php
require_once 'includes/functions.php';
$pageTitle = "Konfigurator PC Premium - MSTechPC";
include 'includes/header.php';
?>

<div class="configurator-wrapper section-padding">
    <div class="container">
        <div class="config-header text-center">
            <h1 class="section-title">Konfigurator <span>PC AI</span></h1>
            <p>Zbuduj swoją wymarzoną maszynę. Nasz system automatycznie sprawdzi kompatybilność.</p>
        </div>

        <div class="config-container grid grid-2">
            <div class="config-steps">
                <!-- Step 1: CPU -->
                <div class="config-step glass-card" data-step="1">
                    <h3>1. Procesor (CPU)</h3>
                    <div class="component-list">
                        <div class="component-item" data-price="1800" data-name="Intel Core i7-14700K">
                            <span>Intel Core i7-14700K</span>
                            <span class="price">+1 800 zł</span>
                        </div>
                        <div class="component-item" data-price="2100" data-name="AMD Ryzen 9 7900X">
                            <span>AMD Ryzen 9 7900X</span>
                            <span class="price">+2 100 zł</span>
                        </div>
                    </div>
                </div>

                <!-- Step 2: GPU -->
                <div class="config-step glass-card" data-step="2">
                    <h3>2. Karta Graficzna (GPU)</h3>
                    <div class="component-list">
                        <div class="component-item" data-price="3500" data-name="NVIDIA RTX 4070 Ti Super">
                            <span>NVIDIA RTX 4070 Ti Super</span>
                            <span class="price">+3 500 zł</span>
                        </div>
                        <div class="component-item" data-price="8500" data-name="NVIDIA RTX 4090">
                            <span>NVIDIA RTX 4090</span>
                            <span class="price">+8 500 zł</span>
                        </div>
                    </div>
                </div>

                <!-- Additional steps would go here -->
            </div>

            <div class="config-summary">
                <div class="glass-card sticky">
                    <h3>Twoja Konfiguracja</h3>
                    <ul id="selectedComponents">
                        <!-- JS Dynamic -->
                    </ul>
                    <div class="summary-divider"></div>
                    <div class="total-price-box">
                        <span>Suma:</span>
                        <span id="totalPrice">0 zł</span>
                    </div>
                    <button class="btn btn-primary btn-block">Zamów tę konfigurację</button>

                    <div class="ai-hint">
                        <i class="fas fa-robot"></i>
                        <p><strong>Porada AI:</strong> Wybrany procesor i karta graficzna idealnie pasują do gamingu w 4K.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.configurator-wrapper { background: linear-gradient(to bottom, #0a0a0c, #111); }
.config-container { align-items: start; gap: 40px; margin-top: 50px; }
.config-step { margin-bottom: 30px; }
.config-step h3 { font-family: var(--font-heading); font-size: 1.2rem; margin-bottom: 20px; color: var(--primary); }
.component-list { display: flex; flex-direction: column; gap: 10px; }
.component-item { display: flex; justify-content: space-between; padding: 15px; background: rgba(255,255,255,0.02); border: 1px solid var(--glass-border); border-radius: 10px; cursor: pointer; transition: var(--transition); }
.component-item:hover, .component-item.selected { background: rgba(0, 210, 255, 0.1); border-color: var(--primary); }
.component-item .price { color: var(--success); font-weight: 600; }

.config-summary .sticky { position: sticky; top: 120px; }
.config-summary h3 { font-family: var(--font-heading); margin-bottom: 20px; text-align: center; }
#selectedComponents { margin-bottom: 20px; }
#selectedComponents li { display: flex; justify-content: space-between; margin-bottom: 10px; font-size: 0.9rem; color: var(--text-muted); }
.summary-divider { height: 1px; background: var(--glass-border); margin: 20px 0; }
.total-price-box { display: flex; justify-content: space-between; font-size: 1.5rem; font-weight: 700; margin-bottom: 30px; }
.btn-block { width: 100%; text-align: center; }

.ai-hint { margin-top: 30px; padding: 15px; background: rgba(58, 123, 213, 0.1); border-left: 3px solid var(--secondary); border-radius: 4px; font-size: 0.85rem; display: flex; gap: 15px; align-items: center; }
.ai-hint i { font-size: 1.5rem; color: var(--secondary); }
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const items = document.querySelectorAll('.component-item');
    const summaryList = document.getElementById('selectedComponents');
    const totalPriceEl = document.getElementById('totalPrice');
    let selections = {};

    items.forEach(item => {
        item.addEventListener('click', () => {
            const step = item.closest('.config-step').dataset.step;

            // Unselect others in this step
            item.closest('.component-list').querySelectorAll('.component-item').forEach(i => i.classList.remove('selected'));

            item.classList.add('selected');

            selections[step] = {
                name: item.dataset.name,
                price: parseInt(item.dataset.price)
            };

            updateSummary();
        });
    });

    function updateSummary() {
        summaryList.innerHTML = '';
        let total = 0;

        for (const step in selections) {
            const item = selections[step];
            const li = document.createElement('li');
            li.innerHTML = `<span>${item.name}</span> <span>+${item.price} zł</span>`;
            summaryList.appendChild(li);
            total += item.price;
        }

        totalPriceEl.innerText = total.toLocaleString() + ' zł';
    }
});
</script>

<?php include 'includes/footer.php'; ?>
