<?php
require_once '../includes/functions.php';
$pageTitle = "Admin Dashboard - MSTechPC";

if (!isAdmin()) {
    redirect('/login.php');
}

include '../includes/header.php';
?>

<div class="admin-wrapper section-padding">
    <div class="container">
        <div class="admin-grid">
            <aside class="admin-sidebar">
                <div class="glass-card">
                    <h4>Admin Panel</h4>
                    <ul class="admin-nav">
                        <li><a href="#" class="active"><i class="fas fa-chart-line"></i> Statystyki</a></li>
                        <li><a href="#"><i class="fas fa-box"></i> Produkty</a></li>
                        <li><a href="#"><i class="fas fa-shopping-cart"></i> Zamówienia</a></li>
                        <li><a href="#"><i class="fas fa-users"></i> Użytkownicy</a></li>
                        <li><a href="#"><i class="fas fa-newspaper"></i> Blog</a></li>
                        <li><a href="/panel.php"><i class="fas fa-arrow-left"></i> Powrót</a></li>
                    </ul>
                </div>
            </aside>

            <main class="admin-content">
                <div class="glass-card">
                    <h2>Panel Administracyjny</h2>
                    <div class="admin-stats grid grid-4 mt-30">
                        <div class="stat-card">
                            <span class="label">Przychód (mc)</span>
                            <span class="value">45 200 zł</span>
                        </div>
                        <div class="stat-card">
                            <span class="label">Nowe Zamówienia</span>
                            <span class="value">12</span>
                        </div>
                        <div class="stat-card">
                            <span class="label">Produkty</span>
                            <span class="value">48</span>
                        </div>
                        <div class="stat-card">
                            <span class="label">Użytkownicy</span>
                            <span class="value">156</span>
                        </div>
                    </div>

                    <div class="recent-activity mt-50">
                        <h3>Ostatnie Zamówienia</h3>
                        <table class="admin-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Klient</th>
                                    <th>Kwota</th>
                                    <th>Status</th>
                                    <th>Akcja</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#ORD-882</td>
                                    <td>Jan Kowalski</td>
                                    <td>7 499 zł</td>
                                    <td><span class="status-badge pending">Oczekiwanie</span></td>
                                    <td><button class="btn btn-sm btn-outline">Edytuj</button></td>
                                </tr>
                                <tr>
                                    <td>#ORD-881</td>
                                    <td>Anna Nowak</td>
                                    <td>12 999 zł</td>
                                    <td><span class="status-badge paid">Opłacone</span></td>
                                    <td><button class="btn btn-sm btn-outline">Edytuj</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>

<style>
.admin-grid { display: grid; grid-template-columns: 250px 1fr; gap: 30px; }
.admin-nav { margin-top: 20px; }
.admin-nav a { display: flex; align-items: center; gap: 15px; padding: 10px 15px; border-radius: 8px; font-size: 0.9rem; }
.admin-nav a:hover, .admin-nav a.active { background: rgba(255, 255, 255, 0.05); color: var(--primary); }

.grid-4 { grid-template-columns: repeat(4, 1fr); }
.admin-table { width: 100%; border-collapse: collapse; margin-top: 20px; }
.admin-table th, .admin-table td { text-align: left; padding: 15px; border-bottom: 1px solid var(--glass-border); }
.admin-table th { color: var(--text-muted); font-size: 0.8rem; text-transform: uppercase; }

.status-badge { padding: 4px 10px; border-radius: 4px; font-size: 0.75rem; font-weight: 700; }
.status-badge.pending { background: rgba(255, 193, 7, 0.1); color: #ffc107; }
.status-badge.paid { background: rgba(0, 255, 136, 0.1); color: var(--success); }

@media (max-width: 1200px) {
    .grid-4 { grid-template-columns: 1fr 1fr; }
}
</style>

<?php include '../includes/footer.php'; ?>
