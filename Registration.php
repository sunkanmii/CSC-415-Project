<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/index.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/siginin.css">
</head>

<body>
    <main>
        <section class="p415-login-container">
            <section class="p415-login-card">
                <h1>Profile</h1>
                <nav>
                    <ul>
                        <li><a class="active" href="./registration.php">Registration</a></li>
                        <li><a href="./login.php">Sign in</a></li>
                    </ul>
                </nav>

                <section class="p415-mail-section">
                    <label for="user-name">Name</label>
                    <input id="user-name" type="text" placeholder="Your full name" name="name" required
                        autocomplete="name" />

                    <label for="user-email">Email</label>
                    <input id="user-email" type="email" placeholder="E-mail" name="new-email" required
                        autocomplete="email" />

                    <label for="user-matric">Matriculation Number</label>
                    <input id="user-matric" type="number" placeholder="Matric Number" minlength="9" maxlength="9"
                        name="matric-no" required autocomplete="cc-number" />

                    <label for="user-password">Password</label>
                    <input id="user-password" type="password" placeholder="Password"
                        name="new-password" required autocomplete="current-password" />

                    <label for="user-retype-password">Retype Password</label>
                    <input id="user-retype-password" type="password" placeholder="Retype Password"
                        name="confirm-password" required autocomplete="new-password" />

                        <section class="p415-checkbox-section">
                            <input type="checkbox" required/> <label id="privacy-policy">I accept the terms of the offer of <span>the privacy policy</span></label>
                        </section>
                </section>

                <section class="p415-link-section">
                    <a href="#" class="p415-link active">Registration</a>
                    <a href="#" class="p415-link">Sign in</a>
                </section>
            </section>
        </section>
        <img class="p415-float-right"src="./imgs/8401-1.svg" alt="" />
    </main>
    <script src="main.js"></script>
</body>

</html>