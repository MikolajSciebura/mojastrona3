<?php
$currentPage = 'kontakt';
$pageTitle = 'Kontakt - MSTechPC Częstochowa';
$pageDesc = 'Potrzebujesz serwisu lub nowego komputera? Skontaktuj się z MSTechPC. Jesteśmy dostępni w Częstochowie i Kłobucku.';

require_once 'includes/header.php';
?>

<section class="section">
    <div class="container">
        <div class="text-center reveal mb-50">
            <h1 class="section-title">Bądźmy w <span>Kontakcie</span></h1>
            <p>Masz pytania? Chcesz zamówić komputer lub umówić serwis? Napisz do nas.</p>
        </div>

        <div class="grid grid-2 gap-40">
            <div class="contact-info reveal">
                <div class="glass-card h-100">
                    <h3>Dane Kontaktowe</h3>
                    <div class="info-list mt-30">
                        <div class="info-item flex gap-20 mb-30">
                            <i class="fa-solid fa-location-dot"></i>
                            <div>
                                <h4>Lokalizacja</h4>
                                <p>ul. Technologiczna 12, 42-200 Częstochowa</p>
                            </div>
                        </div>
                        <div class="info-item flex gap-20 mb-30">
                            <i class="fa-solid fa-phone"></i>
                            <div>
                                <h4>Telefon</h4>
                                <p>+48 123 456 789</p>
                            </div>
                        </div>
                        <div class="info-item flex gap-20 mb-30">
                            <i class="fa-solid fa-envelope"></i>
                            <div>
                                <h4>E-mail</h4>
                                <p>kontakt@mstechpc.pl</p>
                            </div>
                        </div>
                        <div class="info-item flex gap-20">
                            <i class="fa-solid fa-clock"></i>
                            <div>
                                <h4>Godziny otwarcia</h4>
                                <p>Pn-Pt: 9:00 - 18:00<br>Sob: 10:00 - 14:00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-form-container reveal">
                <div class="glass-card">
                    <h3>Wyślij wiadomość</h3>
                    <form action="/api/contact.php" method="POST" class="mt-30">
                        <input type="hidden" name="csrf_token" value="<?php echo csrf_token(); ?>">
                        <div class="form-group">
                            <label>Imię i Nazwisko</label>
                            <input type="text" name="name" class="form-control" placeholder="Jan Kowalski" required>
                        </div>
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="email" name="email" class="form-control" placeholder="twoj@email.pl" required>
                        </div>
                        <div class="form-group">
                            <label>Temat</label>
                            <select name="subject" class="form-control">
                                <option value="zakup">Zakup komputera</option>
                                <option value="serwis">Serwis IT / Naprawa</option>
                                <option value="inne">Inne zapytanie</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Wiadomość</label>
                            <textarea name="message" class="form-control" rows="5" placeholder="W czym możemy pomóc?" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Wyślij Wiadomość</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.h-100 { height: 100%; }
.info-item i { font-size: 1.5rem; color: var(--primary); margin-top: 5px; }
.info-item h4 { font-size: 1.1rem; margin-bottom: 5px; }
.info-item p { color: var(--text-muted); }
.mb-30 { margin-bottom: 30px; }
</style>

<?php require_once 'includes/footer.php'; ?>
