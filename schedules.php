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
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="./css/index.css">
  <link rel="stylesheet" type="text/css" href="./css/sidebar.css">
  <link rel="stylesheet" type="text/css" href="./css/SchedulePage.css">
</head>

<body>
  <main>
    <section class="header-sidebar">
      <input type="checkbox" id="toggle-butt" />

      <label for="toggle-butt" class="toggle-menu">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </label>

      <section class="side-bar-section">
        <div class="profile-image">
          <img src="./imgs/demo.png" alt="profile" />
          <hr />
        </div>

        <div class="links-to-pages">
          <div class="page-link">
            <a href="./index.php">
              <img src="./imgs/appointment.svg" alt="">
              <p>Appointments</p>
            </a>
          </div>
          <div class="page-link">
            <a href="./schedules.php">
              <img src="./imgs/schedules.svg" alt="">
              <p>Schedules</p>
            </a>
          </div>
          <div class="page-link">
            <a href="/">
              <img src="./imgs/sessions.svg" alt="">
              <p>Sessions</p>
            </a>
          </div>
          <div class="page-link">
            <a href="/">
              <img src="./imgs/mail.svg" alt="">
              <p>Message</p>
            </a>
          </div>
          <div class="page-link">
            <a href="/">
              <img src="./imgs/admin.svg" alt="">
              <p>Admin</p>
            </a>
          </div>
          <div class="page-link">
            <a href="/">
              <img src="./imgs/logout.svg" alt="">
              <p>Logout</p>
            </a>
          </div>
        </div>
      </section>
    </section>

    <section class="p415-main-section">
      <h1 id="p415-schedule-head">Schedules</h1>
      <hr />

      <section class="p415-active-sessions">
        <div class="p415-session-card">
          <p class="p415-session-status">Active</p>
          <time datetime="2020" class="p415-session-year">2020</time>
          <section class="p415-school-name">
            <i class="fas fa-graduation-cap"></i>
            <p>University of Lagos</p>
          </section>
        </div>

        <div class="p415-session-card">
          <p class="p415-session-status">Inactive</p>
          <time datetime="2019" class="p415-session-year">2019</time>
          <section class="p415-school-name">
            <i class="fas fa-graduation-cap"></i>
            <p>University of Lagos</p>
          </section>
        </div>
        
        <div class="p415-session-card">
          <p class="p415-session-status">Inactive</p>
          <time datetime="2018" class="p415-session-year">2018</time>
          <section class="p415-school-name">
            <i class="fas fa-graduation-cap"></i>
            <p>University of Lagos</p>
          </section>
        </div>

        <div class="p415-session-card">
          <p class="p415-session-status">Inactive</p>
          <time datetime="2017" class="p415-session-year">2017</time>
          <section class="p415-school-name">
            <i class="fas fa-graduation-cap"></i>
            <p>University of Lagos</p>
          </section>
        </div>
        
        <div class="p415-session-card">
          <p class="p415-session-status">Inactive</p>
          <time datetime="2016" class="p415-session-year">2016</time>
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