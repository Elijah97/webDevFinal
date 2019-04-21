<?php
    include_once('config.php');
    
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $nationality = $_POST['nationality'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    if(isset($_GET['login'])){
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        if ($conn->query($sql)) {
            echo "Logged in...";
        } else {
            echo "Error:<br>" . $conn->error;
        }
    } elseif(isset($_GET['register'])){
        $sql = "INSERT INTO users(name, tel, nationality, email, password)  VALUES('$name', '$tel', '$nationality', '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error:<br>" . $conn->error;
        }
    } else {
        echo 'Something is wrong!';
    }
?>