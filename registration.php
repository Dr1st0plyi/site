<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration</title>
        <link rel="icon" href="images/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="style/style.css">
    </head>
<body>
    <main>
        <?php include 'header.php'; ?>
        <div class="registration-container">
            <div class="registration-text-section">
                <h1>REGISTRATION </h1>
                <h1> LOGIN</h1>
                <p>Create an account or log in to an existing one to access all the features of our site.</p>
            </div>

            <div class="form-section" id="registration-section">
                <h2>Registration</h2>
                <form id="registration-form">
                    <div class="form-group">
                        <label for="reg-username">Username</label>
                        <input type="text" id="reg-username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="reg-email">Email</label>
                        <input type="email" id="reg-email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="reg-password">Password</label>
                        <input type="password" id="reg-password" name="password" required>
                    </div>
                    <button type="submit">Register</button>
                </form>
                <div id="registration-message"></div>
                <p class="registration-text">Already have an account? <a href="#" id="show-login">Log in</a></p>
            </div>

            <div class="form-section" id="login-section" style="display: none;">
                <h2>Login</h2>
                <form id="login-form">
                    <div class="form-group">
                        <label for="login-username">Login</label>
                        <input type="text" id="login-username" name="login-username" required>
                    </div>
                    <div class="form-group">
                        <label for="login-password">Password</label>
                        <input type="password" id="login-password" name="login-password" required>
                    </div>
                    <button type="submit">Log in</button>
                </form>
                <div id="login-message"></div>
                <p class="registration-text">Don't have an account? <a href="#" id="show-registration">Register</a></p>
            </div>
        </div>
        </div>
        <img class="full-page-background-image" src="images/registration-background-image.png" style="filter: brightness(0.6)">
    </main>
    <script src="scripts/registration.js"></script>
    <footer> <?php include 'footer.php'; ?> </footer>
</body>
</html>