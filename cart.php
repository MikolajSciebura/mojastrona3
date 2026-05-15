<?php
require_once 'includes/functions.php';
$pageTitle = "Koszyk - MSTechPC";
include 'includes/header.php';

$cart = $_SESSION['cart'] ?? [];
$total = 0;
?>

<div class="cart-wrapper section-padding">
    <div class="container">
        <h1 class="section-title">Twój <span>Koszyk</span></h1>

        <?php if (empty($cart)): ?>
            <div class="glass-card text-center" style="padding: 100px 20px;">
                <i class="fas fa-shopping-cart" style="font-size: 4rem; color: var(--glass-border); margin-bottom: 20px;"></i>
                <p>Twój koszyk jest pusty.</p>
                <a href="/shop/" class="btn btn-primary mt-30">Przejdź do sklepu</a>
            </div>
        <?php else: ?>
            <!-- Cart items loop would go here -->
        <?php endif; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
