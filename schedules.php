<?php
include "connect.php";
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
     
      <?php 
      $sql = "Select * from `dbnh41dWFL`.`session`";
      $result = mysqli_query($conn,$sql);
      while($row = mysqli_fetch_array($result))
      {
        ?>
      <section class="p415-active-sessions">
        <div class="p415-session-card">
          <p class="p415-session-status"><?php echo $row['status']?></p>
          
          <time datetime="2020" class="p415-session-year"><?php echo $row['session']?></time>
          
          <p class="p415-session">Session</p>
          <section class="p415-school-name">
            <i class="fas fa-graduation-cap"></i>
            <p>University of Lagos</p>
          </section>
        </div>

          </section>
        </div>
      </section>
      <?php
      }
?>
  
    </section>
  </main>
  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>