<?php
session_start();
$errors = $_SESSION['errors'] ?? []; // Ako nema grešaka, koristi prazan niz
unset($_SESSION['errors']); // Očisti greške nakon prikaza
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-3">
                <h2 class="text-center">Register</h2>
        <form action="../actions/register.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" value="<?php if(isset($username_error)) echo $username_error; ?>">
                <p class="text-danger"><?php if(isset($username_error)): ?>
                    <?php echo $username_error; ?>
                    <?php endif; ?>
                    </p>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <p class="text-danger"><?php if(isset($email_error)): ?>
                    <?php echo $email_error; ?>
                    <?php endif; ?>
                    </p>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group mb-3">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Please enter password..." aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button id="togglePassword" class="btn btn-dark" type="button" id="button-addon2">
                        <i class="bi bi-eye"></i>
                    </button>
                </div>
            </div>
            <p class="text-danger"><?php if(isset($password_error)): ?>
                    <?php echo $password_error; ?>
                    <?php endif; ?>
                    </p>
            <div class="mb-3">
                <label for="password" class="form-label">Password confirm</label>
                <div class="input-group mb-3">
                    <input type="password" name="password_confirm" id="password_confirm" class="form-control" placeholder="Please enter password..." aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button id="togglePasswordConfirm" class="btn btn-dark" type="button" id="button-addon2">
                        <i class="bi bi-eye"></i>
                    </button>
                </div>
            </div>
            <button type="submit" class="btn btn-sm btn-success">Register</button>
            <p class="mt-3">Already have an account? <a href="login.view.php" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Login</a></p>
        </form>
            </div>
        </div>
    </div>
    <script src="../js/main.js"></script>
</body>
</html>