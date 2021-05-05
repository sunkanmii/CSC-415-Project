<?php
    session_start();
    unset($_SESSION["user-matric"]);
    header("Location:login.php");
?>