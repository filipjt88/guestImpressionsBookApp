<?php
session_start();
require '../core/db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];

if (!isset($_GET['id'])) {
    header("Location: my_messages.php");
    exit;
}

$message_id = $_GET['id'];

// Proveri da li korisnik poseduje ovu poruku
$stmt = $pdo->prepare("DELETE FROM messages WHERE id = ? AND user_id = ?");
$stmt->execute([$message_id, $user_id]);

header("Location: my_messages.php");
exit;
?>
