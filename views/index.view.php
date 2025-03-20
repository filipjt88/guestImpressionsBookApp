<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest book</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    
     <div class="container mt-5">
      <div class="row">
        <div class="col-md-6 offset-3">
              <h2 class="text-center">Guest book</h2>
        <form action="../actions/add_message.php" method="POST">
            <div class="mb-3">
                <label for="guest_name" class="form-label">Username:</label>
                <input type="text" name="guest_name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message . . .</label>
                <textarea name="message" class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-sm btn-primary">Send message</button>
        </form>
        </div>
      </div>
    </div>



<script src="../js/main.js"></script>
</body>
</html>

</body>
</html>