<?php
include "koneksi.php"; 
session_start();

$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    if (empty($username) || empty($email) || empty($password)) {
        $errorMessage = "Semua field harus diisi!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage = "Email tidak valid!";
    } else {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $checkQuery = "SELECT * FROM users WHERE username='$username' OR email='$email'";
        $result = mysqli_query($conn, $checkQuery);

        if (mysqli_num_rows($result) > 0) {
            $errorMessage = "Username atau Email sudah terdaftar!";
        } else {
            $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$passwordHash')";
            if (mysqli_query($conn, $query)) {
                $_SESSION["username"] = $username;
                echo "<script>alert('Registrasi berhasil!'); window.location='dashboard.php';</script>";
            } else {
                $errorMessage = "Terjadi kesalahan saat registrasi. Silakan coba lagi.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
       <style>
  body {
    background: linear-gradient(135deg, #ff9a9e, #fad0c4, #fad0c4);
    background-attachment: fixed;
    color: #343a40;
}
        .card {
            border-radius: 15px;
        }
        .form-control {
            border-radius: 10px;
        }
        .btn {
            border-radius: 10px;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg p-4" style="width: 380px; background: white;">
        <h3 class="text-center text-primary">Registrasi</h3>
        
        <?php if ($errorMessage): ?>
            <div class="alert alert-danger">
                <?php echo $errorMessage; ?>
            </div>
        <?php endif; ?>

        <form action="" method="POST">
            <div class="mb-3">
                <label class="form-label"><i class="fas fa-user"></i> Username</label>
                <input type="text" class="form-control" name="username" value="<?php echo isset($username) ? $username : ''; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label"><i class="fas fa-envelope"></i> Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo isset($email) ? $email : ''; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label"><i class="fas fa-lock"></i> Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Daftar</button>
        </form>
        <p class="text-center mt-2">Sudah punya akun? <a href="login.php" class="text-decoration-none">Login</a></p>
    </div>
</body>
</html>
