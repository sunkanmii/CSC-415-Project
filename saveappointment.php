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

            $insert_intoapp = "INSERT INTO dbnh41dWFL.appointment (student_matricno, student_name, student_email,session,Appointment_time,message)
            VALUES (".$matric.", '".$name."', '".$email."','".$_SESSION['active_sess']."','".$_POST['appointment_Day']."','".$_POST['msg']."')
            ";

            if ($result2 = mysqli_query($conn,$insert_intoapp)) {
                
               $_SESSION['sucess_app'] = '<h6 class="alert-success"> appointment created </h6>';
                
            //  echo $profilepic;
            }


    }
    
?>