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
        <!--
        <div class="info-grid">
            <div class="info-item">
            <i class="fas fa-music fa-2x"></i>
            <h3>Unsere Geschichte</h3>
            <p>Blindate wurde vor über zwei Jahrzehnten gegründet und brachte eine Gruppe leidenschaftlicher Musiker zusammen. Unser Weg war gefüllt mit unvergesslichen Auftritten und einem Bekenntnis zu Exzellenz in jeder Show, die wir abliefern.</p>
            </div>
            <div class="info-item">
        <style>
        .gallery-slider {
            display: flex;
            align-items: center;
        }
        .gallery-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 350px; /* Adjust as needed */
            width: 100%;
        }
        .gallery-slide img {
            max-width: 100%;
            max-height: 320px; /* Adjust as needed */
            object-fit: contain;
            display: block;
            margin: 0 auto;
        }
        </style>
            <i class="fas fa-users fa-2x"></i>
            <h3>Unser Team</h3>
            <p>Lernen Sie unsere talentierten Mitglieder kennen: John, Jane, Mike und Emily. Jeder bringt einzigartige Fähigkeiten und Energie mit und stellt sicher, dass jede Performance ein energiegeladenes Erlebnis ist, das das Publikum fesselt.</p>
            </div>
            <div class="info-item">
            <i class="fas fa-star fa-2x"></i>
            <h3>Unsere Mission</h3>
            <p>Bei Blindate ist es unsere Mission, das Publikum durch unvergessliche Live-Musikerlebnisse zu begeistern und zu fesseln. Wir streben danach, eine Atmosphäre zu schaffen, die mit jedem Zuhörer in Verbindung steht.</p>
            </div>
        </div>
        -->
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
<!--
<section class="tech" id="tech">
    <div class="tech">
        <div class="info-item">
        <i class="fas fa-star fa-2x"></i>
        <h3>technisches</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit
-->
<section class="contact" id="contact">
    <div class="contact-container" style="display: flex; justify-content: center; align-items: center;">
        <div class="contact-details" style="text-align: center;">
            <h2 style="color: var(--primary);">Kontakt</h2>
            <p>Mario Heinrich</p>
            <p>+49 1525 4119854</p>
            <p>info@blindate-band.de</p>
            <p><a href="https://www.facebook.com/p/BlinDate-100053614727667" class="social-link" target="_blank" rel="noopener noreferrer">Facebook</a></p>
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