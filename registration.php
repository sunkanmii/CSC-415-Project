
<?php 

//session_destroy();
$errormsg = "";
if ($_SERVER["REQUEST_METHOD"]=="POST") {

$full_name = "";
$profile_pic ="";
$email = "";
$matric = 0;
$password = "";
$rtpassword = "";



if (empty($_POST['name'])) {
    $errormsg .= "the name field is required <br>";
}

if (empty($_POST['new-email'])) {
    $errormsg .= "email field is required <br>";
}
if (empty($_POST['matric-no'])) {
    $errormsg .= "matric-no is required";
}

if ($_POST['confirm-password'] != $_POST['new-password']) {
    $errormsg .= "password do not match <br>";
}

if ($errormsg != "") {
    $errormsg = '<h6>'.$errormsg.'</h6>';
} else{
        $full_name = $_POST['name'];
        $profile_pic ="";
        $email = $_POST['new-email'];
        $matric = $_POST['matric-no'];
        $password = $_POST['new-password'];
        $rtpassword = $_POST['confirm-password'];

}

}


?>


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
    <link rel="stylesheet" type="text/css" media="screen" href="./css/drag-drop.css">
</head>

<body>
    <main>
        <section class="p415-login-container">
           
            <section class="p415-login-card">
                <div> <?php echo $errormsg ?></div>
                <h1>Profile</h1>
                <nav>
                    <ul>
                        <li><a class="active" href="./registration.php">Registration</a></li>
                        <li><a href="./login.php">Sign in</a></li>
                    </ul>
                </nav>

                <form method="POST" class="p415-mail-section" id="form1">
                    <label for="user-name">Name</label>
                    <input id="user-name" type="text" placeholder="Your full name" name="name" required
                        autocomplete="name" />
                    <section id="drop-area">
                        <section class="drag-drop-section">
                            <p>
                                <span>Profile picture</span> 
                            <span id ="small-text">PNG, jpg up to 10 MB</span>
                            </p>
                            <label class="button-for-file" for="fileElem">Select<span class="spandrg"> or drag in form</span></label>
                            <input type="file" id="fileElem"  accept="image/*" name="profilepics" required >
                            
                            <!-- <section class="img_preview_container" id="preview_img_con">
                                <img src="imgs/profileavatar.png" alt="" class="image_preview_img">
                                <span class="img_preview_txt"> image preview</span> -->
                            <!-- </section> -->                       </section>
                        <progress id="progress-bar" max=100 value=0></progress>
                        <p id="p415-display-message"></p>
                    </section>
                    <label for="user-email">Email</label>
                    <input id="user-email" type="email" placeholder="E-mail" name="new-email" required
                        autocomplete="email" />

                    <label for="user-matric">Matriculation Number</label>
                    <input id="user-matric" type="number" placeholder="Matric Number" minlength="9" maxlength="9"
                        name="matric-no" required autocomplete="cc-number" />

                    <label for="user-password">Password</label>
                    <input id="user-password" type="password" placeholder="Password" name="new-password" required
                        autocomplete="current-password" />

                    <label for="user-retype-password">Retype Password</label>
                    <input id="user-retype-password" type="password" placeholder="Retype Password"
                        name="confirm-password" required autocomplete="new-password" />


                    <section class="p415-checkbox-section">
                        <input type="checkbox" required /> <label id="privacy-policy">I accept the terms of the offer of
                            <span>the privacy policy</span></label>
                    </section>
                    <section class="p415-link-section">
                        <input type="submit" form="form1" class="p415-link active" value="Registration">
                        <a href="login.php" class="p415-link">Sign in</a>
                    </section>
                </form>
            </section>
        </section>
        <img class="p415-float-right" src="./imgs/8401-1.svg" alt="" />
    </main>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script> -->
    <script src="./js/drag-drop.js"></script>

   <script>
            // const input_img = document.getElementById('fileElem');
            // const preview_container = document.getElementById('preview_img_con');
            // const previewimg = preview_container.querySelector('.image_preview_img');

            // input_img.addEventListener("change", function(){
            //     const file = this.files[0];

            //     if (file) {
            //         const reader = new FileReader();

            //         reader.addEventListener("load",function(){
            //             previewimg.setAttribute("src",this.result);
            //         });

            //         reader.readAsDataURL(file);
            //     }
            // })
   </script>
</body>

</html>