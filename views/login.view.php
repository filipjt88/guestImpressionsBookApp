<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-3">
                <h2 class="text-center">Login</h2>
            <!-- <div class="alert alert-danger"></div> -->
        <form action="../actions/login.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group mb-3">
                    <input type="password" id="password" class="form-control" placeholder="Please enter password..." aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button id="togglePassword" class="btn btn-dark" type="button" id="button-addon2">
                        <i class="bi bi-eye"></i>
                    </button>
                </div>
            </div>
            <button type="submit" class="btn btn-sm btn-success">Login</button>
            <p class="mt-3">Not registered? <a href="register.view.php" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Register</a></p>
        </form>
            </div>
        </div>
    </div>
    <script src="../js/main.js"></script>
</body>
</html>