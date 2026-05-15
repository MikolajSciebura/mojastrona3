/**
 * MSTechPC - PC Configurator Module
 */
class Configurator {
    constructor() {
        this.selections = {};
        this.totalPrice = 0;
        this.summaryList = document.getElementById('configSummaryList');
        this.priceDisplay = document.getElementById('configTotalPrice');
        this.items = document.querySelectorAll('.config-item');
        this.init();
    }

    init() {
        if (!this.items.length) return;
        this.bindEvents();
    }

    bindEvents() {
        this.items.forEach(item => {
            item.addEventListener('click', () => {
                const type = item.dataset.type;
                const name = item.dataset.name;
                const price = parseFloat(item.dataset.price);

                this.selectComponent(type, name, price, item);
            });
        });
    }

    selectComponent(type, name, price, element) {
        // Handle UI toggle
        const group = element.closest('.config-group');
        group.querySelectorAll('.config-item').forEach(i => i.classList.remove('selected'));
        element.classList.add('selected');

        // Update logic
        this.selections[type] = { name, price };
        this.updateSummary();
    }

    updateSummary() {
        if (!this.summaryList) return;
        this.summaryList.innerHTML = '';
        this.totalPrice = 0;

        Object.values(this.selections).forEach(sel => {
            const li = document.createElement('li');
            li.innerHTML = `<span>${sel.name}</span><span>+${sel.price.toLocaleString()} zł</span>`;
            this.summaryList.appendChild(li);
            this.totalPrice += sel.price;
        });

        this.priceDisplay.textContent = this.totalPrice.toLocaleString() + ' zł';
    }
}

document.addEventListener('DOMContentLoaded', () => new Configurator());
