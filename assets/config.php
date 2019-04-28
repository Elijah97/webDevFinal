<?php
    $servername = "localhost";
    $username = "kaykevin1@gmail.com";
    $password = "Kayisire111";
    $dbname = "webDev";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>