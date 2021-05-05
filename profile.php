<?php 


if(session_status() == PHP_SESSION_NONE){
    //session has not started
    session_start();
}

if ( !isset($_SESSION['user-matric'])) {
    header("Location: login.php");

}

include 'connect.php';

$matric = $_SESSION['user-matric'];

$name = "Natasha Laurell";
$profilepic = null;
$email = "";
$department= "";
$course = "";

$usr = "SELECT * 
        FROM     `dbnh41dWFL`.`users`
        WHERE   student_matricno = '".$matric."'
        ";

if ($result = mysqli_query($conn,$usr)) {
    
    $usr_row = mysqli_fetch_array($result);

    $name = $usr_row['student_name'];
    $email = $usr_row['student_email'];
    $department = $usr_row['student_department'];
    $course = $usr_row['student_course_name'];
    $profilepic = $usr_row['student_img_url'];
    
  //  echo $profilepic;
}


?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>User profile</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='./css/index.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/home.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/profile.css'>
</head>

<body>
    <main>
        <nav>
            <ul>
                <li><a href="./">home</a></li>
                <li class="active"><a href="./">profile</a></li>
                <li><a href="./login.php">logout</a></li>
                <li><a href="./"><img src=<?php echo $profilepic ?> alt="profile"></a></li>
            </ul>
        </nav>
        <section class="p415-profile-upperheader">
            <p>Profile</p>
            <p id="p415-user-matric"><?php echo $matric ?></p>
            <hr />
        </section>

        <section class="p415-profile-mid-section">
            <section class="p415-profile-details">
                <img src=<?php echo $profilepic ?> alt="profile" />
                <hr>
                <h1 id="p415-username"><?php echo $name ?></h1>
                <p id="p415-email"><?php echo $email ?></p>
                <p id="p415-course"><?php echo $department ?></p>
                <p id="p415-course-code"><?php echo $course ?></p>
            </section>

            <section class="p415-profile-form-section">
                <form method="POST">
                    <label for="p415-new-name">Name</label>
                    <input id="p415-new-name" type="text" placeholder="Name" name="name" required autocomplete="name" />
                    <label for="p415-new-email">Email</label>
                    <input id="p415-new-email" type="email" placeholder="Email" name="email" required
                        autocomplete="email" />
                    <label for="p415-new-department">Department</label>
                    <input id="p415-new-department" type="text" placeholder="Department" name="department" required />
                    <label for="p415-new-course">Course</label>
                    <input id="p415-new-course" type="text" placeholder="Course" name="course" required />
                    <input type="submit" value="Update" />
                </form>
            </section>
        </section>

        <section class="p415-profile-bottom-section">
            <table>
                <tbody>
                    <tr>
                        <th>AppointmentID</th>
                        <th>Message</th>
                        <th>Appointment</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>hello sir my name is...</td>
                        <td>9/23/16 5:30pm - 6:30pm</td>
                        <td><span class="p415-work-status-update-green">Completed</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>I would like to know more...</td>
                        <td>8/21/15 2:00pm - 4:00pm</td>
                        <td><span class="p415-work-status-update-green">Pending</span></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>do I have to bring my log...</td>
                        <td>5/19/12 1:30pm - 3:00pm</td>
                        <td><span class="p415-work-status-update-green">Cancelled</span></td>
                    </tr>
                </tbody>
            </table>
        </section>

    </main>

    <footer>
        <p>Coyright <span id="copy-year">2021</span> &copy; appointmentunilag.com All rights reserved.</p>
    </footer>
    <script src='./js/main.js'></script>
    <script src="./js/dashboard.js"></script>
</body>

</html>