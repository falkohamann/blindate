<?php include 'header.php'; ?>

    <section class="hero">
    </section>
    <section class="live-music" id="live-music">
    <div class="live-music-container">
    
        <h2 style="color: var(--primary); margin-bottom: 2rem; text-align: center;">Hier könnt ihr uns LIVE erleben!</h2>
        <table style="width: 100%; border-collapse: collapse;">
            <tbody>
            <?php
            $datesFile = __DIR__ . '/dates.txt';
            if (file_exists($datesFile)) {
                $lines = file($datesFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                $validLines = array();
                foreach ($lines as $line) {
                    $trimmedLine = ltrim($line);
                    if ($trimmedLine === '' || strpos($trimmedLine, '#') === 0) {
                        continue;
                    }
                    $validLines[] = $line;
                }
                if (empty($validLines)) {
                    echo '<tr><td colspan="2" style="padding: 1rem; text-align:center;">Momentan stehen leider keine Auftritte an.</td></tr>';
                } else {
                    foreach ($validLines as $line) {
                        $cols = explode(';', $line);
                        if (count($cols) >= 4) {
                            $dateStr = trim($cols[0]) . ' | ' . trim($cols[1]) . ' | ' . trim($cols[2]);
                            $event = htmlspecialchars(trim($cols[3]));
                            $link = isset($cols[4]) ? trim($cols[4]) : '';
                            echo '<tr>';
                            echo '<td style="padding: 1rem; border-bottom: 1px solid var(--grey);">' . htmlspecialchars($dateStr) . '</td>';
                            echo '<td style="padding: 1rem; border-bottom: 1px solid var(--grey);">';
                            if (!empty($link)) {
                                $safeLink = htmlspecialchars($link);
                                // Ensure the link starts with http:// or https://
                                if (!preg_match('/^https?:\\/\\//i', $safeLink)) {
                                    $safeLink = 'https://' . ltrim($safeLink, '/');
                                }
                                echo '<a href="' . $safeLink . '" target="_blank" rel="noopener noreferrer">' . $event . '</a>';
                            } else {
                                echo $event;
                            }
                            echo '</td>';
                            echo '</tr>';
                        }
                    }
                }
            } else {
                echo '<tr><td colspan="2" style="padding: 1rem; text-align:center;">Momentan stehen leider keine Auftritte an.</td></tr>';
            }
            ?>
            </tbody>
        </table>
    </div>
</section>
<section class="about" id="about">
    <div class="about-container">
        <div>
            <h2>Wir sind Blindate</h2>
            <p>BlinDate, eine Band aus dem Raum Dresden. Seit 2002 rocken sie große und kleine Bühnen und bringen
                jede Menge gute Stimmung auf Stadt- und Dorffeste, Partys und andere Events. Sie fühlen sich auf
                jeglichen Bühnen zu Hause und lieben es, das Publikum mitzureißen und zum Tanzen, Mitsingen und
                Toben zu bringen. Ob bekannte Rockklassiker der letzten fünf Dekaden oder Pophits der letzten Jahre
                - mit dieser Band wird jedes Event zu einem unvergesslichen Erlebnis! Ohne BlinDate schmeckt das
                Bier nicht, ohne sie gibt ́s kein 1-2- Tipp, ohne sie ist es ganz einfach keine Party. Selbst einfachste
                Springübungen, Polonaisen oder das Hochhalten von Feuerzeugen macht mit ihrer musikalischen

                Untermalung einfach mehr Spaß! Im Übrigen gibt es BlinDate auch stromlos. Mit ihrer Unplugged-
                Besetzung befeuern sie auch gern mal Gartenpartys oder Straßenfeste.
            </p>
        </div>
        <div class="band-members" style="margin-top:2rem;">
            <h3 style="color:var(--primary);margin-bottom:1rem;text-align:center;">Blindate besteht aus:</h3>
            <div style="margin-bottom:1.2rem;">
                <span style="color:var(--primary);font-weight:bold;font-size:inherit;">Andy:</span> Männertag 2003 wurde er beim Trommeln in einer Blaskapelle entdeckt und ist seitdem dabei.
                Neben der Musik beschäftigt er sich außerdem gern mit Musik. Häufig vergisst er bei Auftritten sein T-Shirt oder seine Schuhe.
            </div>
            <div style="margin-bottom:1.2rem;">
                <span style="color:var(--primary);font-weight:bold;font-size:inherit;">Gregor:</span> Hat 2005 den Proberaum betreten und ist seitdem einfach da - wie eine Katze. Für einen Keyboarder sieht er relativ gut aus.
            </div>
            <div style="margin-bottom:1.2rem;">
                <span style="color:var(--primary);font-weight:bold;font-size:inherit;">Mario:</span> Seit 2004 bei uns dabei und seitdem für einiges Bekannt - unter anderem für sein unvergleichliches Gitarrenspiel. 2018 trieb ihn die Sehnsucht in weite Ferne. Zurück kam er 2021 mit Frau und Kind sowie Sehnsucht nach der Band.
            </div>
            <div style="margin-bottom:1.2rem;">
                <span style="color:var(--primary);font-weight:bold;font-size:inherit;">Tommy:</span> Dieser Mann war schon in den 80er Jahren eine Größe in sämtlichen hierzulande unbekannten Metal-Bands. 2019 dachten wir uns: Alter Schwabe, der singt jetzt bei uns. Neben der Musik baut er besonders gern Häusle.
            </div>
            <div style="margin-bottom:1.2rem;">
                <span style="color:var(--primary);font-weight:bold;font-size:inherit;">Roy:</span> Seit 2024 erhellt dieser hübsche junge Mann den Proberaum und sorgt mit seiner statuenähnlichen Performance für Sicherheit. Aus dem Gebirge stammend, aber wohl eher seiner Coolness geschuldet hat der Junge selbst im Juli Schnee auf dem Autodach.
            </div>
        </div>
    </div>
</section>
    <section class="gallery" id="media">
    
    <h2 style="color: var(--primary);">Das sind wir</h2>
    <div class="gallery-container">
        <div class="gallery-slider">
            <?php
            $imageDir = 'images/gallery/';
            $images = scandir($imageDir);

            foreach ($images as $image) {
                if (strtolower(pathinfo($image, PATHINFO_EXTENSION)) === 'webp') {
                    echo "<div class='gallery-slide'><img src='$imageDir$image' alt='Gallery Image' class='gallery-img'></div>";
                }
            }
            ?>
        </div>
        <!-- Overlay for enlarged image -->
        <div id="gallery-overlay" style="display:none;position:fixed;z-index:9999;top:0;left:0;width:100vw;height:100vh;background:rgba(0,0,0,0.95);justify-content:center;align-items:center;cursor:pointer;">
            <img id="gallery-overlay-img" src="" alt="Großansicht" style="max-width:90vw;max-height:90vh;border-radius:12px;box-shadow:0 4px 24px rgba(0,0,0,0.5);">
        </div>
        <button class="slider-prev">&#10094;</button>
        <button class="slider-next">&#10095;</button>
        <div class="slider-dots"></div>
    </div>
</section>
<section class="contact" id="contact">
    <div class="contact-container" style="display: flex; justify-content: center; align-items: center;">
        <div class="contact-details" style="text-align: center;">
            <h2 style="color: var(--primary);">Kontakt</h2>
            <p>Mario Heinrich</p>
            <p>+49 1525 4119854</p>
            <p>info@blindate-band.de</p>
            <p>
  <a href="https://www.facebook.com/p/BlinDate-100053614727667" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="Facebook" style="display:inline-block;vertical-align:middle;margin-right:16px;">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" style="vertical-align:middle;"><path d="M22.675 0h-21.35C.595 0 0 .592 0 1.326v21.348C0 23.408.595 24 1.325 24h11.495v-9.294H9.691v-3.622h3.129V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.797.143v3.24l-1.918.001c-1.504 0-1.797.715-1.797 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116C23.406 24 24 23.408 24 22.674V1.326C24 .592 23.406 0 22.675 0z"/></svg>
  </a>
  <a href="https://www.youtube.com/channel/UCnQFQVaZLY8zLwKpaj4GBDA" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="YouTube" style="display:inline-block;vertical-align:middle;margin-right:16px;">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" style="vertical-align:middle;"><path d="M23.498 6.186a2.994 2.994 0 0 0-2.107-2.117C19.228 3.5 12 3.5 12 3.5s-7.228 0-9.391.569A2.994 2.994 0 0 0 .502 6.186C0 8.36 0 12 0 12s0 3.64.502 5.814a2.994 2.994 0 0 0 2.107 2.117C4.772 20.5 12 20.5 12 20.5s7.228 0 9.391-.569a2.994 2.994 0 0 0 2.107-2.117C24 15.64 24 12 24 12s0-3.64-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
  </a>
  <a href="https://www.instagram.com/_.blindate._/" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="Instagram" style="display:inline-block;vertical-align:middle;">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" style="vertical-align:middle;"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.334 3.608 1.308.974.974 1.246 2.241 1.308 3.608.058 1.266.069 1.646.069 4.85s-.011 3.584-.069 4.85c-.062 1.366-.334 2.633-1.308 3.608-.974.974-2.241 1.246-3.608 1.308-1.266.058-1.646.069-4.85.069s-3.584-.011-4.85-.069c-1.366-.062-2.633-.334-3.608-1.308-.974-.974-1.246-2.241-1.308-3.608C2.175 15.647 2.163 15.267 2.163 12s.012-3.584.07-4.85c.062-1.366.334-2.633 1.308-3.608.974-.974 2.241-1.246 3.608-1.308C8.416 2.175 8.796 2.163 12 2.163zm0-2.163C8.741 0 8.332.013 7.052.072 5.775.13 4.602.402 3.635 1.37c-.967.967-1.24 2.14-1.298 3.417C2.013 5.668 2 6.077 2 12c0 5.923.013 6.332.072 7.613.058 1.277.331 2.45 1.298 3.417.967.967 2.14 1.24 3.417 1.298C8.332 23.987 8.741 24 12 24s3.668-.013 4.948-.072c1.277-.058 2.45-.331 3.417-1.298.967-.967 1.24-2.14 1.298-3.417.059-1.281.072-1.69.072-7.613 0-5.923-.013-6.332-.072-7.613-.058-1.277-.331-2.45-1.298-3.417-.967-.967-2.14-1.24-3.417-1.298C15.668.013 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zm0 10.162a3.999 3.999 0 1 1 0-7.998 3.999 3.999 0 0 1 0 7.998zm7.2-10.406a1.44 1.44 0 1 0 0 2.88 1.44 1.44 0 0 0 0-2.88z"/></svg>
  </a>
            </p>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>
</body>
<script src="script.js"></script>
</body>
<script>
// Lightbox/Overlay for gallery images
document.addEventListener('DOMContentLoaded', function() {
    const galleryImages = document.querySelectorAll('.gallery-img');
    const overlay = document.getElementById('gallery-overlay');
    const overlayImg = document.getElementById('gallery-overlay-img');
    galleryImages.forEach(img => {
        img.addEventListener('click', function(e) {
            overlayImg.src = img.src;
            overlay.style.display = 'flex';
        });
    });
    overlay.addEventListener('click', function() {
        overlay.style.display = 'none';
        overlayImg.src = '';
    });
});
</script>
</html>