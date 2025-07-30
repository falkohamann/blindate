<?php include 'header.php'; ?>

    <section class="hero">
    </section>
    <section class="live-music" id="live-music">
    <div class="live-music-container">
        <h2 style="color: var(--primary); margin-bottom: 2rem; text-align: center;">Hier könnt ihr uns LIVE erleben!</h2>
        <table style="width: 100%; border-collapse: collapse;">
            <tbody>
                <tr>
                    <td style="padding: 1rem; border-bottom: 1px solid var(--grey);">Sa. | 14.06.2025 | 20:00</td>
                    <td style="padding: 1rem; border-bottom: 1px solid var(--grey);">Dorffest Hermsdorf</td>
                    <td style="padding: 1rem; border-bottom: 1px solid var(--grey);">
                    </td>
                </tr>
                <tr>
                    <td style="padding: 1rem; border-bottom: 1px solid var(--grey);">Fr. | 20.06.2025 | 19:30</td>
                    <td style="padding: 1rem; border-bottom: 1px solid var(--grey);">Heiderauschen Höckendorf</td>
                    <td style="padding: 1rem; border-bottom: 1px solid var(--grey);">
                    </td>
                </tr>
                 <tr>
                    <td style="padding: 1rem; border-bottom: 1px solid var(--grey);">Sa. | 21.06.2025 | 19:30</td>
                    <td style="padding: 1rem; border-bottom: 1px solid var(--grey);">Sonnenwende Cunnersdorf</td>
                    <td style="padding: 1rem; border-bottom: 1px solid var(--grey);">
                    </td>
                </tr>
             <tr>
                    <td style="padding: 1rem; border-bottom: 1px solid var(--grey);">Sa. | 05.07.2025 | 19:30</td>
                    <td style="padding: 1rem; border-bottom: 1px solid var(--grey);">Dorffest Hennersdorf</td>
                    <td style="padding: 1rem; border-bottom: 1px solid var(--grey);">
                    </td>
                </tr>
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
    <style>
    .gallery-container {
        overflow: hidden;
        width: 100%;
        max-width: 100vw;
        position: relative;
    }
    .gallery-slider {
        display: flex;
        align-items: center;
        transition: transform 0.4s cubic-bezier(.4,0,.2,1);
        will-change: transform;
    }
    .gallery-slide {
        display: flex;
        justify-content: center;
        align-items: center;
        min-width: 100%;
        height: 500px;
        box-sizing: border-box;
        padding: 0 8px;
    }
    .gallery-slide img {
        width: 500px;
        height: 500px;
        object-fit: contain;
        display: block;
        margin: 0 auto;
        background: #000; /* Optional: gives a frame for smaller images */
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.15);
    }
    @media (max-width: 600px) {
        .gallery-container {
            overflow: hidden;
            width: 100vw;
            position: relative;
        }
        .gallery-slider {
            display: flex;
            align-items: center;
        }
        .gallery-slide {
            min-width: 100vw;
            height: 80vw;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
        }
        .gallery-slide img {
            width: 80vw;
            height: 80vw;
            margin: 0 auto;
            display: block;
        }
        .slider-prev, .slider-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            background: rgba(0,0,0,0.5);
            color: #fff;
            border: none;
            font-size: 2rem;
            padding: 0.5rem 1rem;
            border-radius: 50%;
            cursor: pointer;
        }
        .slider-prev {
            left: 10px;
        }
        .slider-next {
            right: 10px;
        }
    }
    </style>
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