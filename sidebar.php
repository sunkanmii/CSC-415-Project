<?php 


if(session_status() == PHP_SESSION_NONE){
    //session has not started
    session_start();
}

if ( !isset($_SESSION['user-matric'])) {
    header("Location: login.php");

}
elseif ($_SESSION['user-matric'] !=160805007) {
    header("Location: login.php");
}

include 'connect.php';

$matric = $_SESSION['user-matric'];

$name = "";
$profilepic = null;

$usr = "SELECT * 
        FROM     `dbnh41dWFL`.`users`
        WHERE   student_matricno = '".$matric."'
        ";

if ($result = mysqli_query($conn,$usr)) {
    
    $usr_row = mysqli_fetch_array($result);

  //  $name = $usr_row['student_name'];
    $profilepic = $usr_row['student_img_url'];
    
  //  echo $profilepic;
    
}


?>


<section class="header-sidebar">
    <input type="checkbox" id="toggle-butt" />

    <label for="toggle-butt" class="toggle-menu">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </label>

    <section class="side-bar-section">
        <div class="profile-image">
            <img src=<?php echo $profilepic ?> alt="profile" />
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
                <a href="./session.php">
                    <img src="./imgs/sessions.svg" alt="">
                    <p>Sessions</p>
                </a>
            </div>
<<<<<<< HEAD
          <!--  <div class="page-link">
=======
            <!-- <div class="page-link">
>>>>>>> 42a80c4679d4e91e1c29a6949535d5c3e554be58
                <a href="./">
                    <img src="./imgs/mail.svg" alt="">
                    <p>Message</p>
                </a>
            </div> -->
<<<<<<< HEAD
            <div class="page-link">
=======
            <!-- <div class="page-link">
>>>>>>> 42a80c4679d4e91e1c29a6949535d5c3e554be58
                <a href="./">
                    <img src="./imgs/admin.svg" alt="">
                    <p>Admin</p>
                </a>
            </div> -->
            <div class="page-link">
                <a href="./logout.php">
                    <img src="./imgs/logout.svg" alt="">
                    <p>Logout</p>
                </a>
            </div>
        </div>
    </section>
</section>