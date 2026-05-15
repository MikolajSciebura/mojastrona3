<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . " | MSTechPC" : "MSTechPC - Profesjonalne Komputery Gamingowe i Serwis IT"; ?></title>
    <meta name="description" content="<?php echo isset($metaDesc) ? $metaDesc : "MSTechPC - Twój ekspert od komputerów w Częstochowie i Kłobucku. Składanie komputerów gamingowych, serwis IT i nowoczesne rozwiązania technologiczne."; ?>">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&family=Orbitron:wght@400;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>
</head>
<body class="dark-theme">
    <header class="main-header">
        <nav class="container">
            <div class="logo">
                <a href="/">MSTech<span>PC</span></a>
            </div>
            <ul class="nav-links">
                <li><a href="/">Start</a></li>
                <li><a href="/shop/">Sklep</a></li>
                <li><a href="/configurator.php">Konfigurator</a></li>
                <li><a href="/serwis.php">Serwis</a></li>
                <li><a href="/blog/">Blog</a></li>
                <li><a href="/kontakt.php">Kontakt</a></li>
            </ul>
            <div class="nav-actions">
                <a href="/cart.php" class="cart-icon"><i class="fas fa-shopping-cart"></i><span class="cart-count">0</span></a>
                <?php if (isLoggedIn()): ?>
                    <a href="/panel.php" class="btn btn-outline">Konto</a>
                <?php else: ?>
                    <a href="/login.php" class="btn btn-outline">Zaloguj</a>
                <?php endif; ?>
            </div>
            <div class="mobile-menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>
    <main>
