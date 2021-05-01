<?php

if(session_status() == PHP_SESSION_NONE){
    //session has not started
    session_start();
}

if ( isset($_SESSION['success_msg'])) {
    echo $_SESSION['success_msg'];

    //kill session
    session_destroy();
    //start it again
    session_start();
}


$errormsg ="";
if ($_SERVER['REQUEST_METHOD']=='POST') {
    
    $matric = 0;
    $passwrod ="";

    if (empty($_POST['matric-no'])) {
        $errormsg .= "matric-no id required <br>";
    }
    
    if (empty($_POST['password'])) {
        $errormsg .= "password field is required <br>";
    }

    if ($errormsg != "") {
        $errormsg .= '<h6 class="alert-danger" >'.$errormsg.'</h6>';
    }
    else {
        $matric = $_POST['matric-no'];
        $password = md5($_POST['password']);

        include 'connect.php';

        $check_exist = "SELECT `student_matricno` ,`student_password`
                        FROM      `dbnh41dWFL`.`users`
                        WHERE    student_matricno='".$matric."' AND student_password ='".$password."' ";

        $resultUsr = mysqli_query($conn,$check_exist);

        if (count(mysqli_fetch_all($resultUsr) )>0) {
            //echo '<h6 class=" alert-success" > User  exists </h6>'; 
            $_SESSION['user-matric'] = $matric;

            if ($matric == 160805007) {
                header("Location: dashboard.php");
            } else {
                header("Location: index.php");
            }

        } else {
            echo '<h6 class=" alert-danger" style="width:100%" > Incorrect details or User does not exists! </h6>';
        }


    }
    
}


?>


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
        <section> <?php echo $errormsg ?></section>
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
                    <input id="user-email" type="number" placeholder="Matric Number" minlength="9" maxlength="9"
                        name="matric-no" required autocomplete="cc-number" />

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
</body>

</html>