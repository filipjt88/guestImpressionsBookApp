<?php
require '../core/db.php';

session_start();
$_SESSION['errors'] = $errors;
header("Location: ../views/register.view.php");
exit;


if($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = trim($_POST['username']);
    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);
    $password_confirm = trim($_POST['password_confirm']);

    if(!isset($_POST['username']) || empty($_POST['username'])) {
        $username_error = "<p class='alert alert-danger text-danger d-inline-block p-1'>Username is required!</p>";
        array_push($errors, $username_error);
    } else {
        $username = $_POST['username'];
    }

    if(!isset($_POST['email']) || empty($_POST['email'])) {
        $email_error = "<p class='alert alert-danger text-danger d-inline-block p-1'>Email is required!</p>";
        array_push($errors, $email_error);
    } else {
        $email = $_POST['email'];
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