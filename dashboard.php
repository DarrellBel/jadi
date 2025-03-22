<?php
session_start();
if (!isset($_SESSION["username"])) {
    echo "<script>alert('Silakan login terlebih dahulu!'); window.location='login.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
       body {
    background: linear-gradient(135deg, #ff9a9e, #fad0c4, #fad0c4);
    background-attachment: fixed;
    color: #343a40;
}
        .card {
            background: white;
            color: black;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="dashboard.php">JADI</a>
            <div class="d-flex">
                <a class="nav-link text-white fw-bold mx-2" href="dashboard.php">Dashboard</a>
                <a class="nav-link text-white fw-bold mx-2" href="add_project.php">Add Project</a>
                <a class="nav-link text-white fw-bold mx-2" href="list_project.php">Projects</a>
                <a class="nav-link text-white fw-bold mx-2" href="todolist.php">To-Do List</a>
            </div>
            <a class="nav-link text-white fw-bold" href="#" onclick="confirmLogout()">Logout</a>
        </div>
    </nav>
    
    <div class="container text-center mt-5">
        <div class="card p-4">
            <h2>Selamat datang, <?= $_SESSION["username"]; ?>!</h2>
            <p class="lead">Ini adalah halaman dashboard Anda.</p>
        </div>
    </div>

    <script>
    function confirmLogout() {
        Swal.fire({
            title: "Apakah Anda yakin?",
            text: "Anda akan keluar dari akun!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Ya, Logout!",
            cancelButtonText: "Batal"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "logout.php"; 
            }
        });
    }
    </script>
</body>
</html>
