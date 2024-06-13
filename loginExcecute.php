<?php
ini_set('session.cookie_httponly', 1); 
ini_set('session.cookie_secure', 1); 
ini_set('session.use_only_cookies', 1);
session_start();
require 'db.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



function login($email, $password, $conn){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT `userId`, `email`, `password` FROM `users` WHERE `email` = ?;");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $email, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            session_regenerate_id(true);
            $_SESSION['user_id'] = $id;
            $_SESSION['email'] = $email;
            $_SESSION['IP_ADDRESS'] = $_SERVER['REMOTE_ADDR'];
            $_SESSION['USER_AGENT'] = $_SERVER['HTTP_USER_AGENT'];
            $_SESSION['CREATED'] = time();
            $_SESSION['LAST_ACTIVITY'] = time();
            header("Location: index.php");
            exit();
        } else {
            return false;
        }
    } else {
        echo "No user found.";
    }
    $stmt->close();
}

$conn->close();
?>