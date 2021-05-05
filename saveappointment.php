<?php 

    if(session_status() == PHP_SESSION_NONE){
        //session has not started
        session_start();
    }

    if ( !isset($_SESSION['user-matric'])) {
        header("Location: login.php");
    }

    
    if ( isset($_POST['appointment_Day'])) {
       // header("Location: index.php");
       echo "welcome";
    }
    
?>