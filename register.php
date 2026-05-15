<?php
require_once 'includes/functions.php';
$pageTitle = "Rejestracja - MSTechPC";
include 'includes/header.php';
?>

<div class="auth-wrapper section-padding">
    <div class="container">
        <div class="auth-card glass-card">
            <h2>Utwórz Konto</h2>
            <p>Dołącz do społeczności MSTechPC.</p>

            <form method="POST" action="">
                <input type="hidden" name="csrf_token" value="<?php echo generateCSRFToken(); ?>">
                <div class="form-group">
                    <label>Imię i Nazwisko</label>
                    <input type="text" name="full_name" required placeholder="Jan Kowalski">
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" name="email" required placeholder="twoj@email.pl">
                </div>
                <div class="form-group">
                    <label>Hasło</label>
                    <input type="password" name="password" required placeholder="********">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Zarejestruj się</button>
            </form>

            <div class="auth-footer">
                <p>Masz już konto? <a href="/login.php">Zaloguj się</a></p>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
