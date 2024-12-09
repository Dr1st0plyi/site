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
            <div class="container" id="contacts" style="scroll-snap-align: none;">
                <div class="contact-container">
                    <h1>CONTACTS</h1>
                    <div class="form-group">
                        <div>
                            <label for="first-name">First Name</label>
                            <input type="text" id="first-name" name="first-name">
                        </div>
                        <div>
                            <label for="last-name">Last Name</label>
                            <input type="text" id="last-name" name="last-name">
                        </div>
                        <div>
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email">
                        </div>
                        <div>
                            <label for="phone">Phone</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        <div class="full-width">
                            <label for="message">Write a message</label>
                            <textarea id="message" name="message" rows="1"></textarea>
                        </div>
                    </div>
                    <div style="text-align: center;">
                        <button type="submit">Send</button>
                    </div>
                </div>
                <img class="full-page-background-image" src="images/background-image-1.jpg" style="filter: brightness(0.3)">
            </div>
        </main>
        <footer>
            <?php include 'footer.php'; ?>
        </footer>
    </body>
</html>