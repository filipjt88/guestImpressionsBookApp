<?php
require '../core/db.php';
session_start();
$_SESSION['errors'] = $errors;
header("Location: ../views/register.view.php");
exit;


if($_SERVER['REQUEST_METHOD'] == "POST") {
    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);

     if(!isset($_POST['email']) || empty($_POST['email'])) {
        $username_error = "<p class='alert alert-danger text-danger d-inline-block p-1'>Email is required!</p>";
        array_push($errors, $email_error);
    } else {
        $email = $_POST['email'];
    }

    if(!isset($_POST['password']) || empty($_POST['password'])) {
        $password_error = "<p class='alert alert-danger text-danger d-inline-block p-1'>Password is required!</p>";
        array_push($errors, $password_error);
    } else {
        $password = $_POST['password'];
    }


}