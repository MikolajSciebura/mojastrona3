<?php
// account/login.php
$pageTitle = 'Logowanie - MSTechPC';
require_once __DIR__ . '/../includes/header.php';
?>

<section class="section auth-section">
    <div class="container flex justify-center">
        <div class="auth-card glass-card reveal">
            <div class="text-center mb-30">
                <h1 class="section-title">Witaj <span>ponownie</span></h1>
                <p>Zaloguj się, aby zarządzać swoimi zamówieniami.</p>
            </div>

            <form action="/api/login.php" method="POST">
                <input type="hidden" name="csrf_token" value="<?php echo csrf_token(); ?>">
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" name="email" class="form-control" placeholder="twoj@email.pl" required>
                </div>
                <div class="form-group">
                    <label>Hasło</label>
                    <input type="password" name="password" class="form-control" placeholder="********" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Zaloguj się</button>
            </form>

            <div class="auth-footer mt-30 text-center">
                <p>Nie masz konta? <a href="/account/register.php" class="text-primary">Zarejestruj się</a></p>
                <a href="/account/forgot.php" class="text-dark mt-10 block">Zapomniałeś hasła?</a>
            </div>
        </div>
    </div>
</section>

<style>
.auth-section { min-height: 80vh; display: flex; align-items: center; }
.auth-card { max-width: 450px; width: 100%; }
.justify-center { justify-content: center; }
.block { display: block; }
.mt-10 { margin-top: 10px; }
</style>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
