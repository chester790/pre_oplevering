<?php
require 'db.php';






function registration($email, $username, $password, $conn){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Server-side password validation
    $regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
    if (!preg_match($regex, $password)) {
        echo "Wachtwoord moet minimaal 8 karakters bevatten waarvan 1 hoofdletter, 1 kleine letter, 1 symbool en 1 getal.";
        exit();
    }


    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (`email`, `username`, `password`) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $email , $username, $hashed_password);

    if ($stmt->execute()) {
        echo "Registration successful.";
        header("Location: login.php");
        exit();
    } else {
        header("Location: register.php");
        exit();
    }
    $stmt->close();
}
$conn->close();
?>
