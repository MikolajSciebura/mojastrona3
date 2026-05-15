<?php
// admin/index.php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';

// Mock admin check
if (!is_admin()) {
    // For demo purpose I won't redirect, but in production:
    // header('Location: /account/login.php'); exit;
}

$pageTitle = 'Panel Administratora - MSTechPC';
require_once __DIR__ . '/../includes/header.php';
?>

<section class="section">
    <div class="container">
        <div class="admin-layout">
            <aside class="admin-nav reveal">
                <div class="glass-card">
                    <h4>Admin Menu</h4>
                    <ul class="mt-20">
                        <li><a href="/admin/" class="active"><i class="fa-solid fa-chart-line"></i> Dashboard</a></li>
                        <li><a href="/admin/products.php"><i class="fa-solid fa-box"></i> Produkty</a></li>
                        <li><a href="/admin/orders.php"><i class="fa-solid fa-shopping-cart"></i> Zamówienia</a></li>
                        <li><a href="/admin/users.php"><i class="fa-solid fa-users"></i> Użytkownicy</a></li>
                        <li><a href="/admin/blog.php"><i class="fa-solid fa-newspaper"></i> Blog</a></li>
                    </ul>
                </div>
            </aside>

            <main class="admin-main reveal">
                <div class="grid grid-4 gap-20 mb-40">
                    <div class="glass-card stat-box">
                        <span class="label">Sprzedaż (30 dni)</span>
                        <span class="value">42 850 zł</span>
                    </div>
                    <div class="glass-card stat-box">
                        <span class="label">Zamówienia</span>
                        <span class="value">12</span>
                    </div>
                    <div class="glass-card stat-box">
                        <span class="label">Nowi klienci</span>
                        <span class="value">8</span>
                    </div>
                    <div class="glass-card stat-box">
                        <span class="label">Odwiedziny</span>
                        <span class="value">1.2k</span>
                    </div>
                </div>

                <div class="glass-card">
                    <h3>Ostatnie Zamówienia</h3>
                    <div class="table-responsive mt-20">
                        <table class="admin-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Klient</th>
                                    <th>Data</th>
                                    <th>Kwota</th>
                                    <th>Status</th>
                                    <th>Akcja</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#ORD-1024</td>
                                    <td>Jan Kowalski</td>
                                    <td>20.10.2023</td>
                                    <td>7 499,00 zł</td>
                                    <td><span class="status paid">Opłacone</span></td>
                                    <td><button class="btn btn-outline btn-sm">Podgląd</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
</section>

<style>
.admin-layout { display: grid; grid-template-columns: 250px 1fr; gap: 40px; }
.admin-nav ul li { margin-bottom: 10px; }
.admin-nav a { display: flex; align-items: center; gap: 15px; padding: 12px 15px; border-radius: var(--radius-sm); color: var(--text-muted); }
.admin-nav a:hover, .admin-nav a.active { background: var(--bg-glass); color: var(--primary); }

.stat-box { text-align: center; }
.stat-box .label { font-size: 0.8rem; color: var(--text-dark); display: block; margin-bottom: 5px; }
.stat-box .value { font-size: 1.5rem; font-weight: 800; color: var(--primary); }

.admin-table { width: 100%; border-collapse: collapse; }
.admin-table th, .admin-table td { padding: 15px; text-align: left; border-bottom: 1px solid var(--border-glass); }
.admin-table th { font-size: 0.8rem; color: var(--text-dark); text-transform: uppercase; }

.status { padding: 4px 10px; border-radius: 4px; font-size: 0.7rem; font-weight: 700; }
.status.paid { background: rgba(0, 255, 136, 0.1); color: #00ff88; }
</style>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
