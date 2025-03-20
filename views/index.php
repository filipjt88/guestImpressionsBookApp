<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest book</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    
<div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-3">
                <h2 class="text-center">Register</h2>
            <!-- <div class="alert alert-danger"></div> -->
        <form action="../actions/register.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-sm btn-success">Register</button>
            <p class="mt-3">Already have an account? <a href="login.php" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Login</a></p>
        </form>
            </div>
        </div>
    </div>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

</body>
</html>

</body>
</html>