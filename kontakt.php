<?php
require_once 'includes/functions.php';
$pageTitle = "Kontakt - MSTechPC Częstochowa";
include 'includes/header.php';
?>

<div class="contact-header section-padding">
    <div class="container text-center">
        <h1 class="section-title">Bądźmy w <span>Kontakcie</span></h1>
        <p>Masz pytania? Chcesz zamówić komputer? Jesteśmy do Twojej dyspozycji.</p>
    </div>
</div>

<section class="contact-main container pb-100">
    <div class="grid grid-2">
        <div class="contact-form-wrapper">
            <div class="glass-card">
                <h3>Napisz do nas</h3>
                <form action="#" method="POST" class="mt-30">
                    <div class="form-row grid grid-2">
                        <div class="form-group">
                            <label>Imię i Nazwisko</label>
                            <input type="text" placeholder="Jan Kowalski" required>
                        </div>
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="email" placeholder="jan@przyklad.pl" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Temat</label>
                        <input type="text" placeholder="W czym możemy pomóc?">
                    </div>
                    <div class="form-group">
                        <label>Wiadomość</label>
                        <textarea rows="5" placeholder="Twoja wiadomość..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Wyślij Wiadomość</button>
                </form>
            </div>
        </div>

        <div class="contact-info-wrapper">
            <div class="glass-card h-100">
                <h3>Dane Kontaktowe</h3>
                <div class="info-items mt-30">
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h4>Lokalizacja</h4>
                            <p>ul. Technologiczna 1, 42-200 Częstochowa</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h4>Telefon</h4>
                            <p>+48 123 456 789</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h4>E-mail</h4>
                            <p>kontakt@mstechpc.pl</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <h4>Godziny Otwarcia</h4>
                            <p>Pn - Pt: 9:00 - 18:00<br>Sob: 10:00 - 14:00</p>
                        </div>
                    </div>
                </div>

                <div class="map-placeholder mt-30">
                    <!-- Tu można wstawić Google Maps iframe -->
                    <div style="background: var(--glass); height: 200px; border-radius: 10px; display: flex; align-items: center; justify-content: center; border: 1px solid var(--glass-border);">
                        <p><i class="fas fa-map"></i> Interaktywna Mapa</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.h-100 { height: 100%; }
.form-row { gap: 20px; }
.info-item { display: flex; gap: 20px; margin-bottom: 25px; }
.info-item i { font-size: 1.5rem; color: var(--primary); margin-top: 5px; }
.info-item h4 { font-family: var(--font-heading); font-size: 1rem; margin-bottom: 5px; }
.info-item p { color: var(--text-muted); font-size: 0.9rem; }
textarea { width: 100%; padding: 12px; background: rgba(255,255,255,0.05); border: 1px solid var(--glass-border); border-radius: 8px; color: #fff; outline: none; font-family: inherit; }
</style>

<?php include 'includes/footer.php'; ?>
