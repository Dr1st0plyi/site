<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Expedition to the Backrooms</title>
        <link rel="icon" href="images/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="style/style.css">
    </head>
    <body>
        <main>
            <?php include 'header.php'; ?>
            <div class="container">
                <div class="image-section" id="character">
                    <img src="images/light-overlay.png" class="light-overlay">
                    <img src="images/character.png" alt="character">
                </div>
                <div class="image-section">
                    <a href="index.php#trailer"  class="tv-trailer">
                        <img src="images/tv-trailer.png">
                        <img src="images/tv-light-overlay.png" class="tv-light-overlay">
                    </a>
                </div>
                <div class="text-section right">
                    <a href="https://store.steampowered.com/app/3038290/EXPEDITION_TO_THE_BACKROOMS/" class="logo-overlay">
                        <img src="images/logo-header.png">
                    </a>
                    <h2>
                        <span class="highlight">WISHLIST NOW</span>
                    </h2>
                    <p>«ESCAPE IS NOT GUARANTEED»</p>
                </div>
                <img class="background-image" src="images/background-image-0.png" alt="background-image">
            </div>
            <div class="container" id="trailer">
                <video width="560" height="315" controls>
                    <source src="https://video.cloudflare.steamstatic.com/store_trailers/257054746/movie_max_vp9.webm?t=1726225696" type="video/webm">
                    Ваш браузер не поддерживает видео.
                </video>
                <img class="background-image" src="images/background-image-3.jpg" alt="background-image" style="filter: brightness(0.5)">
            </div>
            <div class="container" id="description">
                <div class="image-section" id="character" style="bottom: auto;">
                    <img src="images/character-2.png" alt="character-2">
                </div>
                <div class="text-section">
                    <h1>DESCRIPTION</h1>
                    <p>
                        Welcome to
                        <span class="highlight">
                        EXPEDITION TO THE BACKROOMS
                        </span>
                        , an exciting survival-horror game that will take you into an endless maze known as the Backrooms. This game, inspired by a popular internet myth, will offer you a walk through a labyrinth of monotonous yellow corridors filled with the eerie hum of fluorescent lights, disturbing sounds, and a constant fear of unknown dangers.
                    </p>
                </div>
                <img class="background-image" src="images/background-image-2.jpg" alt="background-image">
                <img class="background-image" src="images/light-overlay-2.png" alt="background-image" style="animation: breathe 3s infinite;">
            </div>
            <div class="container" id="screenshots">
                <div class="text-section"><h1>SCREENSHOTS</h1></div>
                <div class="gallery">
                <div class="gallery-item">
                    <img alt="screenshot1" src="images/screenshot1.jpg">
                    <div class="overlay">
                        <h3>LEVEL 0</h3>
                        <p>Level 0 of the Backrooms is an endless maze of monotonous yellow walls, damp carpets, 
                            and the constant hum of fluorescent lights. The air feels heavy, and the eerie silence
                            between the flickers of light amplifies the sense of isolation.</p>
                        <a href="https://backrooms-wiki.wikidot.com/level-0" class="read-more-link">Read more</a>
                    </div>
                </div>
                <div class="gallery-item">
                    <img alt="screenshot2" src="images/screenshot2.jpg">
                    <div class="overlay">
                        <h3>POOLS</h3>
                        <p>Level Pools is a surreal labyrinth of tiled hallways, shallow water, and dim, echoing chambers. 
                            The faint splashes of water and distorted reflections create an atmosphere of calm unease, as 
                            if something unseen is lurking beneath the surface.</p>
                        <a href="https://backrooms-wiki.wikidot.com/level-37" class="read-more-link">Read more</a>
                    </div>
                </div>
                <div class="gallery-item">
                    <img alt="screenshot3" src="images/screenshot3.jpg">
                    <div class="overlay">
                        <h3>METRO</h3>
                        <p>Level Metro is an endless network of abandoned subway tunnels, flickering station lights, and the 
                            distant rumble of unseen trains. The air is thick with the scent of rust and mildew, and every 
                            shadow feels like it’s watching.</p>
                        <a href="https://backrooms-wiki.wikidot.com/level-903" class="read-more-link">Read more</a>
                    </div>
                </div>
                <div class="gallery-item">
                    <img alt="screenshot4" src="images/screenshot4.jpg">
                    <div class="overlay">
                        <h3 style="font-size: 40px;">NEIGHBORHOOD</h3>
                        <p>The Starting Neighborhood is a quiet suburban area of modest houses, empty streets, and the faint hum 
                            of everyday life. Yet, the stillness feels unnatural, as if the world is holding its breath, 
                            moments before everything slips into the unknown.</p>
                        <a href="" class="read-more-link">Read more</a>
                    </div>
                </div>
                </div>
                <div class="gallery-button-container">
                    <button class="prev-button">&#10094;</button>
                    <button class="next-button">&#10095;</button>
                </div>
                <img src="images/background-image-1.jpg" class="background-image" style="filter: brightness(0.1) blur(5px);">
            </div>
            <script>
                document.addEventListener("keydown", (e) => {
                if (e.ctrlKey && e.shiftKey && e.key === "X") {
                    window.location.href = "console.php"; // Открываем скрытую страницу
                }
                });
            </script>
            <script src="scripts/script.js"></script>
        </main>
        <footer style ="scroll-snap-align: start;">
            <?php include 'footer.php'; ?>
        </footer>
    </body>
</html>