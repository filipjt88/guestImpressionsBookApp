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
$stmt = $pdo->prepare("SELECT * FROM messages WHERE id = ? AND user_id = ?");
$stmt->execute([$message_id, $user_id]);
$message = $stmt->fetch();

if (!$message) {
    header("Location: my_messages.php");
    exit;
}

// Ažuriranje poruke
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_message'])) {
    $new_message = trim($_POST['message']);

    if (!empty($new_message)) {
        $stmt = $pdo->prepare("UPDATE messages SET message = ? WHERE id = ?");
        $stmt->execute([$new_message, $message_id]);
        header("Location: my_messages.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <title>Uredi poruku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Uredi poruku</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label for="message" class="form-label">Poruka:</label>
                <textarea name="message" class="form-control"><?= htmlspecialchars($message['message']) ?></textarea>
            </div>
            <button type="submit" name="update_message" class="btn btn-primary">💾 Sačuvaj izmene</button>
            <a href="my_messages.php" class="btn btn-secondary">🔙 Nazad</a>
        </form>
    </div>
</body>
</html>
