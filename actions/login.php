<?php
require '../core/db.php';

session_start();
$_SESSION['errors'] = $errors;
header("Location: ../views/register.view.php");
exit;