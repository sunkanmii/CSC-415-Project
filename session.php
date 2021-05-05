<?php
include "connect.php";

if(session_status() == PHP_SESSION_NONE){
    //session has not started
    session_start();
} else {
    session_destroy();
    //then
    session_start();
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
    <link rel="stylesheet" type="text/css" href="./css/session.css">
</head>

<body>
    <main>
        <?php
            include "./sidebar.php";
        ?>
        <section class="p415-main-section">
            <h1 id="p415-schedule-head">Sessions</h1>
            <hr />

            <form method="POST" class="p415-session-info">
                <label for="p415-year">Input year</label>
                <input id="p415-year" placeholder="YYYY" type="number" name="year" />

                <label for="p415-semesters">Input Semester</label>
                <select id="p415-semesters" placeholder="semester" name="semester">
                    <option value="1st Semester">1st Semester</option>
                    <option value="2nd Semester">2nd Semester</option>
                </select>

                <input type="submit" value="Add" name = "submit" />
            </form>
            
            <?php
             if(isset($_POST['submit'])){
                $year = $_POST['year'];
                $session=$_POST['semester'];
                $status = 'inactive';
                $insert = "INSERT INTO `dbnh41dWFL`.`session` 
                          (`session`,`year`,`status`)
                          VALUES ('".$year.' '.$session."','".$year."','".$status."')
                            ";
                $result = mysqli_query($conn,$insert);

                if($result){
                    echo "success";
                }
                else{
                    echo "failed";
                }

             }
            
            ?>
            <section class="p415-table-container">
                <section class="p415-table">
                <div>
                <p>Year</p>
                <?php
                $sql = "Select * from `dbnh41dWFL`.`session`";
                $result = mysqli_query($conn,$sql);
                while($res = mysqli_fetch_array($result)){
                    $_SESSION['year'].= $res['year'];
                    echo '<p>'.$res['year'].'</p>';
                }
                ?>
                </div>
                <div>
                <p>Session</p>
                <?php
                $sql = "Select * from `dbnh41dWFL`.`session`";
                $result = mysqli_query($conn,$sql);
                while($res = mysqli_fetch_array($result)){
                    $_SESSION['session'].= $res['session'];
                    echo '<p>'.$res['session'].'</p>';
                }
                ?>
                </div>
                <div>
                <p>Status</p>
                <?php
                $sql = "Select * from `dbnh41dWFL`.`session`";
                $result = mysqli_query($conn,$sql);
                while($res = mysqli_fetch_array($result)){
                    $_SESSION['status'].= $res['status'];
                    echo '<p>'.$res['status'].'</p>';
                }
                ?>
                </div>
                    </section>
            </section>
        </section>
    </main>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>