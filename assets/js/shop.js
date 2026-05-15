/**
 * MSTechPC - Shop & Products Module
 */
class Shop {
    constructor() {
        this.productsContainer = document.getElementById('productGrid');
        this.filterButtons = document.querySelectorAll('.filter-btn');
        this.init();
    }

    init() {
        if (!this.productsContainer) return;
        this.bindEvents();
    }

    bindEvents() {
        this.filterButtons.forEach(btn => {
            btn.addEventListener('click', (e) => {
                const category = e.target.dataset.category;
                this.setActiveFilter(e.target);
                this.filterProducts(category);
            });
        });
    }

    setActiveFilter(activeBtn) {
        this.filterButtons.forEach(btn => btn.classList.remove('active'));
        activeBtn.classList.add('active');
    }

    filterProducts(category) {
        const products = document.querySelectorAll('.product-card');
        products.forEach(p => {
            if (category === 'all' || p.dataset.category === category) {
                p.style.display = 'block';
                setTimeout(() => p.style.opacity = '1', 10);
            } else {
                p.style.opacity = '0';
                setTimeout(() => p.style.display = 'none', 400);
            }
        });
    }
}

document.addEventListener('DOMContentLoaded', () => new Shop());
