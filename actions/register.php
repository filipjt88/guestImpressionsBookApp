<?php
session_start();
require '../core/db.php';

$errors = [];

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = trim($_POST['username']);
    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);
    $password_confirm = trim($_POST['password_confirm']);

    if(empty($username)) {
        $errors['username'] = "Username is required!";
    }
    if(empty($email)) {
        $errors['email'] = "Email is required!";
    }
    if(empty($password)) {
        $errors['password'] = "Password is required!";
    } elseif(strlen($password) < 6) {
        $errors['password'] = "Password must have at least 6 characters!";
    }
    if($password !== $password_confirm) {
        $errors['password_confirm'] = "The passwords don't match!";
    }

    if(empty($errors)) {
        $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->execute([$email]);
        if($stmt->fetch()) {
            $errors['email'] = "Email is already registered!";
        }
    }

   if(empty($errors)) {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    if($stmt->execute([$username, $email, $hashed_password])) {
        $_SESSION['success'] = "Registration successful! You can apply.";
        header("Location: ../views/login.view.php");
        exit;
    } else {
        $errors['general'] = "An error occurred, please try again!";
    }
   }
}





?>