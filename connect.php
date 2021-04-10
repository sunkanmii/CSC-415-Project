<?php
// $servername = 'localhost';
// $password = '';
// $host = '127.0.0.1';

    $servername = 'remotemysql.com';
    $username = 'dbnh41dWFL';
    $password = 'xbC6DMcFlO';

    $db = 'csc415';
    $user = 'root';
    $charset = 'utf8mb4';

    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
?>