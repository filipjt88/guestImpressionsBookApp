<?php
require '../core/db.php';

session_start();
$_SESSION['errors'] = $errors;
header("Location: ../views/register.view.php");
exit;


if($_SERVER['REQUEST_METHOD'] == "POST") {
    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);

    

}