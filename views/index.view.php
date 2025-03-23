<?php
session_start();
require '../core/db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];

// Pretraga poruka
$search_term = "";
if (isset($_GET['search'])) {
    $search_term = "%" . $_GET['search'] . "%";
}

// Učitavanje poruka korisnika ili poruka sa pretragom
$stmt = $pdo->prepare("SELECT m.*, u.firstname, u.lastname FROM messages m
                       JOIN users u ON m.user_id = u.id
                       WHERE m.message LIKE ? ORDER BY m.created_at DESC");
$stmt->execute([$search_term]);
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <title>Poruke</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Message</h2>
        <p><a href="my_messages.php">🔙 My messages</a> | <a href="../actions/logout.php">🚪 Logout</a></p>

        <!-- Forma za pretragu poruka -->
        <form action="index.php" method="get" class="mb-4">
            <input type="text" name="search" class="form-control" placeholder="Pretraži poruke..." value="<?= htmlspecialchars($search_term) ?>">
            <button type="submit" class="btn btn-primary mt-2">🔍 Search</button>
        </form>

        <!-- Prikaz poruka -->
        <?php if (count($messages) > 0): ?>
            <?php foreach ($messages as $msg): ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <p><strong><?= htmlspecialchars($msg['firstname']) . ' ' . htmlspecialchars($msg['lastname']) ?></strong>:</p>
                        <p><?= htmlspecialchars($msg['message']) ?></p>
                        <small class="text-muted">Add: <?= $msg['created_at'] ?></small>
                        <br>
                        <a href="edit_message.php?id=<?= $msg['id'] ?>" class="btn btn-warning btn-sm">✏ Edit</a>
                        <a href="delete_message.php?id=<?= $msg['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">🗑 Delete</a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No search results.</p>
        <?php endif; ?>
    </div>
</body>
</html>
