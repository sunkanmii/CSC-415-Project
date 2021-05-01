<?php

    if(session_status() == PHP_SESSION_NONE){
        //session has not started
        session_start();
    }
    
    if ( !isset($_SESSION['user-matric'])) {
        header("Location: login.php");
    
    } elseif ($_SESSION['user-matric'] !=160805007) {
        header("Location: login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>SchedulePage</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="./css/index.css">
  <link rel="stylesheet" type="text/css" href="./css/sidebar.css">
  <link rel="stylesheet" type="text/css" href="./css/SchedulePage.css">
</head>

<body>
  <main>
    <?php
        include "./sidebar.php";
    ?>
    <section class="p415-main-section">
      <h1 id="p415-schedule-head">Schedules</h1>
      <hr />

      <section class="p415-active-sessions">
        <div class="p415-session-card">
          <p class="p415-session-status">Active</p>
          <time datetime="2020" class="p415-session-year">2020 1st</time>
          <p class="p415-session">Session</p>
          <section class="p415-school-name">
            <i class="fas fa-graduation-cap"></i>
            <p>University of Lagos</p>
          </section>
        </div>

        <div class="p415-session-card">
          <p class="p415-session-status">Inactive</p>
          <time datetime="2019" class="p415-session-year">2020 2nd</time>
          <p>Session</p>
          <section class="p415-school-name">
            <i class="fas fa-graduation-cap"></i>
            <p>University of Lagos</p>
          </section>
        </div>

        <div class="p415-session-card">
          <p class="p415-session-status">Inactive</p>
          <time datetime="2018" class="p415-session-year">2018 1st</time>
          <p>Session</p>
          <section class="p415-school-name">
            <i class="fas fa-graduation-cap"></i>
            <p>University of Lagos</p>
          </section>
        </div>

        <div class="p415-session-card">
          <p class="p415-session-status">Inactive</p>
          <time datetime="2017" class="p415-session-year">2017 2nd</time>
          <p>Session</p>
          <section class="p415-school-name">
            <i class="fas fa-graduation-cap"></i>
            <p>University of Lagos</p>
          </section>
        </div>

        <div class="p415-session-card">
          <p class="p415-session-status">Inactive</p>
          <time datetime="2016" class="p415-session-year">2016</time>
          <p>Session</p>
          <section class="p415-school-name">
            <i class="fas fa-graduation-cap"></i>
            <p>University of Lagos</p>
          </section>
        </div>
      </section>
    </section>
  </main>
  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>