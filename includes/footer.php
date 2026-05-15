<!-- includes/footer.php -->
    </main>

    <footer class="main-footer">
        <div class="container footer-grid">
            <div class="footer-info">
                <div class="logo">
                    <a href="/">MSTech<span>PC</span></a>
                </div>
                <p class="mt-20">Profesjonalne systemy komputerowe dla graczy i profesjonalistów w Częstochowie. Łączymy najwyższą wydajność z unikalnym designem.</p>
                <div class="social-links mt-30">
                    <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>

            <div class="footer-links">
                <h4>Sklep</h4>
                <ul>
                    <li><a href="/shop.php">Komputery Gamingowe</a></li>
                    <li><a href="/shop.php?cat=workstation">Stacje Robocze</a></li>
                    <li><a href="/configurator.php">Konfigurator PC</a></li>
                    <li><a href="/shop.php?cat=promocje">Promocje</a></li>
                </ul>
            </div>

            <div class="footer-links">
                <h4>Firma</h4>
                <ul>
                    <li><a href="/o-nas.php">O nas</a></li>
                    <li><a href="/serwis.php">Serwis IT</a></li>
                    <li><a href="/blog.php">Blog Technologiczny</a></li>
                    <li><a href="/kontakt.php">Kontakt</a></li>
                </ul>
            </div>

            <div class="footer-links">
                <h4>Legal</h4>
                <ul>
                    <li><a href="/regulamin.php">Regulamin</a></li>
                    <li><a href="/polityka-prywatnosci.php">Polityka Prywatności</a></li>
                    <li><a href="/zwroty.php">Zwroty i Reklamacje</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <p>&copy; <?php echo date('Y'); ?> MSTechPC. Wszelkie prawa zastrzeżone. Projekt i realizacja: MSTechPC Team.</p>
            </div>
        </div>
    </footer>

    <style>
    .main-footer {
        background: var(--bg-darker);
        padding: 80px 0 0;
        border-top: 1px solid var(--border-glass);
    }
    .footer-grid {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr 1fr;
        gap: 50px;
        padding-bottom: 60px;
    }
    .footer-info p {
        color: var(--text-muted);
        max-width: 350px;
    }
    .social-links {
        display: flex;
        gap: 15px;
    }
    .social-links a {
        width: 40px;
        height: 40px;
        background: var(--bg-glass);
        border: 1px solid var(--border-glass);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--text-white);
    }
    .social-links a:hover {
        background: var(--primary);
        color: #000;
        border-color: var(--primary);
        transform: translateY(-3px);
    }
    .footer-links h4 {
        margin-bottom: 25px;
        font-size: 1rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    .footer-links ul li { margin-bottom: 12px; }
    .footer-links a {
        color: var(--text-muted);
        font-size: 0.9rem;
    }
    .footer-links a:hover {
        color: var(--primary);
        padding-left: 5px;
    }
    .footer-bottom {
        padding: 30px 0;
        border-top: 1px solid var(--border-glass);
        text-align: center;
        font-size: 0.85rem;
        color: var(--text-dark);
    }
    .mt-20 { margin-top: 20px; }
    .mt-30 { margin-top: 30px; }

    @media (max-width: 992px) {
        .footer-grid { grid-template-columns: 1fr 1fr; }
    }
    @media (max-width: 576px) {
        .footer-grid { grid-template-columns: 1fr; }
    }
    </style>
</body>
</html>
