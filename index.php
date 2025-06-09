<?php include 'header.php'; ?>

    <section class="hero">
    </section>
    <!--
   <section class="features features-with-bg">
        <div class="feature">
             <h1>Blindate</h1>
        <p>Rock-Coverband aus Sachsen</p>
            </div>
    </section>
-->
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
            <p>Mit über 20 Jahren elektrisierender Auftritte ist Blindate zu einer festen Größe in der Dresdner Musikszene geworden. Unsere Leidenschaft für Musik treibt uns an, unvergessliche Live-Erlebnisse zu schaffen, die beim Publikum nachklingen.</p>
        </div>
        <div class="info-grid">
            <div class="info-item">
                <i class="fas fa-music fa-2x"></i>
                <h3>Unsere Geschichte</h3>
                <p>Blindate wurde vor über zwei Jahrzehnten gegründet und brachte eine Gruppe leidenschaftlicher Musiker zusammen. Unser Weg war gefüllt mit unvergesslichen Auftritten und einem Bekenntnis zu Exzellenz in jeder Show, die wir abliefern.</p>
            </div>
            <div class="info-item">
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
    </div>
</section>
    <section class="gallery" id="media">
    <h2 style="color: var(--primary);">Das sind wir</h2>
    <p style="color: var(--light);">Rockin in a free World!</p>
    <div class="gallery-container">
        <div class="gallery-slider">
            <?php
            $imageDir = 'images/gallery/';
            $images = scandir($imageDir);

            foreach ($images as $image) {
                if (in_array(pathinfo($image, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif'])) {
                    echo "<div class='gallery-slide'><img src='$imageDir$image' alt='Gallery Image'></div>";
                }
            }
            ?>
        </div>
        <button class="slider-prev">&#10094;</button>
        <button class="slider-next">&#10095;</button>
        <div class="slider-dots"></div>
    </div>
</section>
<section class="tech" id="tech">
        <div class="tech">
            <div class="info-item">
                <i class="fas fa-star fa-2x"></i>
                <h3>technisches</h3>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
            </div>
    </section>
<section class="contact" id="contact">
        <div class="contact">
            <div class="info-item">
                <i class="fas fa-star fa-2x"></i>
                <h3>So erreicht ihr uns!</h3>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
            </div>
    </section>
<?php include 'footer.php'; ?>
</body>
<script src="script.js"></script>
</html>