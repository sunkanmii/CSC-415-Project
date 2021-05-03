<?php

    if(session_status() == PHP_SESSION_NONE){
        //session has not started
        session_start();
    }
    
    if ( !isset($_SESSION['user-matric'])) {
        header("Location: login.php");
    
    } 
    if ($_SESSION['user-matric'] !=160805007) {
        header("Location: login.php");
    }

?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Views</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='./css/index.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/sidebar.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/view.css'>
</head>

<body>
    <main>
        <?php
            include "./sidebar.php";
        ?>

        <section class="main-section">
            <section class="profile-header">
                <h1 id="user-name">Natasha Laurel Christina</h1>
                <img src="./imgs/profile.png" alt="your photo" />
                <hr />
            </section>
            <section class="main-section-body">
                <p id="department-name">Department: <span id="student-department">Computer Sciences</span></p>
                <p id="student-course">Course: <span id="course-code">Web Security 415</span></p>
                <p id="student-matric-no">Matric No: <span id="matric-no">160805007</span></p>
                <p id="student-session">Session: <span id="session-year">2020</span></p>
                <p id="appointment-time">Appointment Time: <span id="timedate-format"><time
                            datetime="2020-03-03T17:00">3rd March, 2020 5:00pm</time></span></p>
                <p id="status-option">Status: <span id="status-output">Pending</span></p>
                <article id="message-section">
                    Message:
                    <p id="message-output">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dictum lacus,
                        tincidunt volutpat dictum porttitor urna aliquam. Aliquet quis odio sed ac aliquam
                        porta nullam elementum. Volutpat habitant faucibus odio et laoreet dictum amet,
                        massa. Nullam auctor tellus id quis arcu
                    </p>
                </article>

                <section class="reply-section">
                    <label for="reply-box">Reply: </label>
                    <input id="reply-box" type="text" min="4" max="500" placeholder="Enter a message..." required />
                    <button>Send</button>
                </section>
            </section>

            <section class="cancel-complete-section">
                <button>Cancel</button>
                <button>Complete</button>
            </section>

        </section>
    </main>

    <script src='./js/main.js'></script>
</body>

</html>