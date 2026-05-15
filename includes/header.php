<?php
// includes/header.php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/functions.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Primary Meta Tags -->
    <title><?php echo $pageTitle ?? APP_NAME; ?></title>
    <meta name="title" content="<?php echo $pageTitle ?? APP_NAME; ?>">
    <meta name="description" content="<?php echo $pageDesc ?? APP_DESC; ?>">
    <meta name="keywords" content="komputery Częstochowa, serwis komputerowy Częstochowa, komputery gamingowe, MSTechPC, Kłobuck">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo BASE_URL; ?>">
    <meta property="og:title" content="<?php echo $pageTitle ?? APP_NAME; ?>">
    <meta property="og:description" content="<?php echo $pageDesc ?? APP_DESC; ?>">
    <meta property="og:image" content="<?php echo BASE_URL; ?>/assets/img/og-image.jpg">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Orbitron:wght@700;800&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/components.css">
    <link rel="stylesheet" href="/assets/css/animations.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">

    <!-- Scripts -->
    <script defer src="/assets/js/app.js"></script>
    <?php if (isset($extraScripts)): ?>
        <?php foreach ($extraScripts as $script): ?>
            <script defer src="/assets/js/<?php echo $script; ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>
</head>
<body>
    <?php include __DIR__ . '/navbar.php'; ?>
    <main>
