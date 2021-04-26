<?php
    $conn = include('connect.php');
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Dashboard</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='./css/index.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/sidebar.css'>
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
                    <img src="./imgs/demo.png" alt="profile"/>
                    <hr/>
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

        <section class="main-page">
            <div class="appointment-header">
                <h1>Appointments</h1>

                <div class="create-new-row">
                    <span>
                        <img src="./imgs/dots.svg">
                    </span>
                    <button>New</button>
                </div>
            </div>

            <div class="table-section">
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>View</th>
                      </tr>
                      <tr>
                        <td>Dianne Russell</td>
                        <td>bill.sanders@example.com</td>
                        <td>9/23/16</td>
                        <td>
                            <span class="p415-work-status-update-green">Completed</span>
                        </td>
                        <td>View</td>
                      </tr>
                      <tr>
                        <td>Darlene Robertson</td>
                        <td>tanya.hill@example.com</td>
                        <td>8/21/15</td>
                        <td>
                            <span class="p415-work-status-update-green">Pending</span>
                        </td>
                        <td>View</td>
                      </tr>
                      <tr>
                        <td>Ralph Edwards</td>
                        <td>michael.mitc@example.com</td>
                        <td>5/19/12</td>
                        <td>
                            <span class="p415-work-status-update-green">Completed</span>
                        </td>
                        <td>View</td>
                      </tr>
                      <tr>
                        <td>Courtney Henry</td>
                        <td>jackson.graham@example.com</td>
                        <td>6/19/14</td>
                        <td>
                            <span class="p415-work-status-update-green">Cancelled</span>
                        </td>
                        <td>View</td>
                      </tr>
                      <tr>
                        <td>Devon Lane</td>
                        <td>debbie.baker@example.com</td>
                        <td>8/2/19</td>
                        <td>
                            <span class="p415-work-status-update-green">Completed</span>
                        </td>
                        <td>View</td>
                    </tr>
                    <tr>
                        <td>Jane Cooper</td>
                        <td>felicia.reid@example.com</td>
                        <td>7/11/19</td>
                        <td>
                            <span class="p415-work-status-update-green">Cancelled</span>
                        </td>
                        <td>View</td>
                      </tr>
                      <tr>
                        <td>Esther Howard</td>
                        <td>dolores.chambers@example.com</td>
                        <td>5/7/16</td>
                        <td>
                            <span class="p415-work-status-update-green">Pending</span>
                        </td>
                        <td>View</td>
                      </tr>
                      <tr>
                        <td>Arlene McCoy</td>
                        <td>kenzi.lawson@example.com</td>
                        <td>7/27/13</td>
                        <td>
                            <span class="p415-work-status-update-green">Completed</span>
                        </td>
                        <td>View</td>
                    </tr>
                </table>
                
                <div class="next-prevBut-section">
                    <button>&lt;</button>
                    <input type="number" value="1" />
                    <p>of</p>
                    <input type="number" value="4"/>
                    <button>&gt;</button>
                </div>  
            </div>

        </section>
    </main>

    <script src='./js/main.js'></script>
</body>
</html>