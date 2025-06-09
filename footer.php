<!-- footer.php -->
    <footer class="footer">
        <div class="footer-container" style="display: flex; justify-content: center; align-items: center; text-align: center;">
            <div class="footer-section" style="flex: 1;">
                <h3>Blindate</h3>
                <p>Live seit mehr als 20 Jahren!</p>
            </div>
            <div class="footer-section" style="flex: 1; display: flex; justify-content: center; align-items: center;">
                <div style="text-align: center;">
                    <a href="https://denkinstanz.de" target="_blank" rel="noopener">
                        <img src="images/website/denkinstanz.webp" alt="Denkinstanz Logo" style="max-width: 100%; height: auto;">
                    </a>
                </div>
            </div>
            <div class="footer-section" style="flex: 1;">
                <h3><a href="impressum.php" style="color: #fff !important;">Impressum</a></h3>
                <h3><a href="datenschutz.php" style="color: #fff !important;">Datenschutz</a></h3>
            </div>
        </div>
    </footer>
    <style>
    @media (max-width: 768px) {
        .footer-container {
            flex-direction: column !important;
            display: flex !important;
            align-items: center !important;
            text-align: center !important;
        }
        .footer-section {
            width: 100%;
            margin-bottom: 1.5rem;
        }
        .footer-section:last-child {
            margin-bottom: 0;
        }
    }
    </style>