<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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
            <form class="p415-login-card" id="form1" method="POST">
                <h1>Profile</h1>
                <nav>
                    <ul>
                        <li><a class="active" href="./login.php">Sign in</a></li>
                        <li><a href="./registration.php">Registration</a></li>
                    </ul>
                </nav>

                <section class="p415-mail-section">
                    <label for="user-email">Email</label>
                    <input id="user-email" type="email" placeholder="Email" name="email" required
                        autocomplete="email" />

                    <label for="user-password">Password</label>
                    <input id="user-email" type="password" placeholder="Password" name="password" required
                        autocomplete="current-password" />
                </section>

                <section class="p415-link-section">
                    <input type="submit" form="form1" class="p415-link active" value="Sign in">
                    <a href="registration.php" class="p415-link">Registration</a>
                </section>
            </form>
        </section>
        <img src="./imgs/5972-1.svg" alt="" />
    </main>
    <script src="main.js"></script>
</body>

</html>