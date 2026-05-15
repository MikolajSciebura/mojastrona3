<?php
require_once 'includes/functions.php';
$pageTitle = "Mój Panel - MSTechPC";

if (!isLoggedIn()) {
    redirect('/login.php');
}

include 'includes/header.php';
?>

<div class="panel-wrapper section-padding">
    <div class="container">
        <div class="panel-grid">
            <aside class="panel-sidebar">
                <div class="glass-card">
                    <div class="user-info">
                        <div class="user-avatar">
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <h4><?php echo e($_SESSION['user_name']); ?></h4>
                        <span class="badge"><?php echo e($_SESSION['user_role']); ?></span>
                    </div>
                    <ul class="panel-nav">
                        <li><a href="#" class="active"><i class="fas fa-th-large"></i> Dashboard</a></li>
                        <li><a href="#"><i class="fas fa-shopping-bag"></i> Moje Zamówienia</a></li>
                        <li><a href="#"><i class="fas fa-heart"></i> Ulubione PC</a></li>
                        <li><a href="#"><i class="fas fa-cog"></i> Ustawienia</a></li>
                        <?php if (isAdmin()): ?>
                            <li><a href="/admin/index.php" style="color: var(--accent);"><i class="fas fa-user-shield"></i> Panel Admina</a></li>
                        <?php endif; ?>
                        <li><a href="/logout.php"><i class="fas fa-sign-out-alt"></i> Wyloguj</a></li>
                    </ul>
                </div>
            </aside>

            <main class="panel-content">
                <div class="glass-card">
                    <h2>Witaj ponownie!</h2>
                    <p>Tutaj możesz zarządzać swoimi zamówieniami i konfiguracjami.</p>

                    <div class="stats-overview grid grid-3 mt-30">
                        <div class="stat-card">
                            <span class="label">Zamówienia</span>
                            <span class="value">0</span>
                        </div>
                        <div class="stat-card">
                            <span class="label">W koszyku</span>
                            <span class="value">0 zł</span>
                        </div>
                        <div class="stat-card">
                            <span class="label">Powiadomienia</span>
                            <span class="value">2</span>
                        </div>
                    </div>

                    <div class="recent-orders mt-50">
                        <h3>Ostatnie zamówienia</h3>
                        <div class="empty-state">
                            <i class="fas fa-box-open"></i>
                            <p>Nie masz jeszcze żadnych zamówień.</p>
                            <a href="/shop/" class="btn btn-primary">Zacznij zakupy</a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>

<style>
.panel-grid { display: grid; grid-template-columns: 300px 1fr; gap: 30px; align-items: start; }
.user-info { text-align: center; margin-bottom: 30px; }
.user-avatar { font-size: 4rem; color: var(--primary); margin-bottom: 10px; }
.user-info h4 { font-family: var(--font-heading); margin-bottom: 5px; }
.badge { background: var(--primary); color: #000; font-size: 0.7rem; padding: 2px 10px; border-radius: 10px; font-weight: 700; text-transform: uppercase; }

.panel-nav li { margin-bottom: 5px; }
.panel-nav a { display: flex; align-items: center; gap: 15px; padding: 12px 20px; border-radius: 10px; color: var(--text-muted); }
.panel-nav a:hover, .panel-nav a.active { background: rgba(0, 210, 255, 0.1); color: var(--primary); }

.mt-30 { margin-top: 30px; }
.mt-50 { margin-top: 50px; }
.stat-card { background: rgba(255,255,255,0.02); padding: 20px; border-radius: 15px; text-align: center; border: 1px solid var(--glass-border); }
.stat-card .label { display: block; font-size: 0.8rem; color: var(--text-muted); margin-bottom: 5px; }
.stat-card .value { font-size: 1.5rem; font-weight: 700; color: var(--primary); }

.empty-state { text-align: center; padding: 50px 0; }
.empty-state i { font-size: 3rem; color: var(--glass-border); margin-bottom: 20px; }
.empty-state p { margin-bottom: 25px; color: var(--text-muted); }

@media (max-width: 992px) {
    .panel-grid { grid-template-columns: 1fr; }
}
</style>

<?php include 'includes/footer.php'; ?>
