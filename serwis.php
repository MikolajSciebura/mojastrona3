<?php
require_once 'includes/functions.php';
$pageTitle = "Serwis Komputerowy Częstochowa i Kłobuck - MSTechPC";
include 'includes/header.php';
?>

<div class="service-hero section-padding">
    <div class="container text-center">
        <h1 class="section-title">Profesjonalny <span>Serwis IT</span></h1>
        <p>Twoje dane i sprzęt w najlepszych rękach. Naprawiamy to, co inni spisali na straty.</p>
    </div>
</div>

<section class="services-list container pb-100">
    <div class="grid grid-2">
        <div class="glass-card">
            <h3><i class="fas fa-laptop-medical"></i> Naprawa Laptopów</h3>
            <p>Wymiana matryc, klawiatur, naprawa płyt głównych po zalaniu i czyszczenie układów chłodzenia w Kłobucku i Częstochowie.</p>
        </div>
        <div class="glass-card">
            <h3><i class="fas fa-desktop"></i> Modernizacja PC</h3>
            <p>Przyspiesz swój stary komputer. Dobierzemy optymalne podzespoły, które tchną w niego nowe życie.</p>
        </div>
        <div class="glass-card">
            <h3><i class="fas fa-virus-slash"></i> Usuwanie Wirusów</h3>
            <p>Czyszczenie systemu z malware, optymalizacja Windows i zabezpieczanie danych przed atakami.</p>
        </div>
        <div class="glass-card">
            <h3><i class="fas fa-database"></i> Odzyskiwanie Danych</h3>
            <p>Przywracamy utracone zdjęcia i dokumenty z dysków HDD, SSD oraz pendrive.</p>
        </div>
    </div>
</section>

<section class="cta-section section-padding">
    <div class="container text-center">
        <div class="glass-card">
            <h2>Potrzebujesz szybkiej pomocy?</h2>
            <p>Zadzwoń do nas lub odwiedź nasz serwis stacjonarny.</p>
            <div class="cta-btns mt-30">
                <a href="tel:+48123456789" class="btn btn-primary"><i class="fas fa-phone"></i> +48 123 456 789</a>
                <a href="/kontakt.php" class="btn btn-outline">Formularz kontaktowy</a>
            </div>
        </div>
    </div>
</section>

<style>
.service-hero { background: linear-gradient(rgba(10,10,12,0.8), rgba(10,10,12,0.8)), url('/assets/img/service-bg.jpg'); background-size: cover; background-position: center; }
.services-list .glass-card h3 { font-family: var(--font-heading); margin-bottom: 15px; display: flex; align-items: center; gap: 15px; color: var(--primary); }
</style>

<?php include 'includes/footer.php'; ?>
