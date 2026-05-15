<?php
require_once 'includes/functions.php';
$pageTitle = "Logowanie - MSTechPC";

if (isLoggedIn()) {
    redirect('/panel.php');
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // In a real app, verify against DB
    // For demo, we'll use a mock success
    if ($email === 'admin@mstechpc.pl' && $password === 'admin123') {
        $_SESSION['user_id'] = 1;
        $_SESSION['user_name'] = 'Administrator';
        $_SESSION['user_role'] = 'admin';
        redirect('/panel.php');
    } else {
        $error = "Błędny e-mail lub hasło.";
    }
}

include 'includes/header.php';
?>

<div class="auth-wrapper section-padding">
    <div class="container">
        <div class="auth-card glass-card">
            <h2>Zaloguj się</h2>
            <p>Dostęp do Twoich zamówień i konfiguracji.</p>

            <?php if ($error): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>

            <form method="POST" action="">
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" name="email" required placeholder="twoj@email.pl">
                </div>
                <div class="form-group">
                    <label>Hasło</label>
                    <input type="password" name="password" required placeholder="********">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Zaloguj się</button>
            </form>

            <div class="auth-footer">
                <p>Nie masz konta? <a href="/register.php">Zarejestruj się</a></p>
                <a href="/forgot-password.php">Zapomniałeś hasła?</a>
            </div>
        </div>
    </div>
</div>

<style>
.auth-wrapper { height: 80vh; display: flex; align-items: center; }
.auth-card { max-width: 450px; margin: 0 auto; width: 100%; }
.auth-card h2 { font-family: var(--font-heading); text-align: center; margin-bottom: 10px; }
.auth-card p { text-align: center; color: var(--text-muted); margin-bottom: 30px; }
.form-group { margin-bottom: 20px; }
.form-group label { display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; }
.form-group input { width: 100%; padding: 12px; background: rgba(255,255,255,0.05); border: 1px solid var(--glass-border); border-radius: 8px; color: #fff; outline: none; }
.form-group input:focus { border-color: var(--primary); }
.alert-danger { background: rgba(255,0,85,0.1); border: 1px solid var(--accent); color: var(--accent); padding: 10px; border-radius: 8px; margin-bottom: 20px; text-align: center; }
.auth-footer { margin-top: 25px; text-align: center; font-size: 0.9rem; }
.auth-footer p { margin-bottom: 10px; }
.auth-footer a { color: var(--primary); font-weight: 600; }
</style>

<?php include 'includes/footer.php'; ?>
