<?php
include 'koneksi.php';
session_start(); // Mulai session untuk flash message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $project_name = $_POST['project_name'];
    $status = $_POST['status'];
    $kategori = $_POST['kategori'];

    // Insert the project into the database
    $sql = "INSERT INTO projects (project_name, status, kategori) 
            VALUES ('$project_name', '$status', '$kategori')";

    if (mysqli_query($conn, $sql)) {
        // Set flash message to session
        $_SESSION['flash_message'] = "Proyek berhasil ditambahkan!";
        // Redirect to list_project.php
        header('Location: list_project.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Proyek</title>
    <style>
  body {
    background: linear-gradient(135deg, #ff9a9e, #fad0c4, #fad0c4);
    background-attachment: fixed;
    color: #343a40;
  }
  .form-container {
    border: 2px solid #343a40;
    border-radius: 10px;
    padding: 20px;
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    margin: auto;
  }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
   
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container d-flex justify-content-center">
    <a class="navbar-brand fw-bold me-4" href="dashboard.php">JADI</a>
    <div class="mx-auto d-flex">
        <a class="nav-link text-white fw-bold mx-3" href="dashboard.php">Dashboard</a>
        <a class="nav-link text-white fw-bold mx-3" href="add_project.php">Add Project</a>
        <a class="nav-link text-white fw-bold mx-3" href="list_project.php">Projects</a>
        <a class="nav-link text-white fw-bold mx-3" href="todolist.php"> To-Do List</a>
    </div>
    <div>
        <a class="nav-link text-white fw-bold" href="#" onclick="confirmLogout()">Logout</a>
    </div>
</nav>

<div class="container mt-5">
    <h2 class="text-center">Tambah Proyek</h2>
    <div class="form-container">
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Nama Proyek</label>
            <input type="text" name="project_name" class="form-control" placeholder="Masukkan Nama Proyek" required minlength="8">
            <small id="nameHelp" class="form-text text-muted">Minimal 8 karakter untuk nama proyek.</small>
        </div>
        <div class="mb-3">
            <label for="status">Status:</label>
            <select name="status" id="status" class="form-control">
                <option value="Archived">Archived</option>
                <option value="Pending">Pending</option>
                <option value="Published">Published</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="kategori">Kategori:</label>
            <select name="kategori" id="kategori" class="form-control">
                <option value="Mobile">Mobile</option>
                <option value="Website">Website</option>
                <option value="Desktop">Desktop</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
        <a href="dashboard.php" class="btn btn-secondary">Kembali</a>
    </form>
    </div>
</div>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    let formModified = false;
    const form = document.querySelector("form");
    const inputs = form.querySelectorAll("input, select");
    
    inputs.forEach(input => {
        input.addEventListener("change", () => {
            formModified = true;
        });
    });
    document.querySelector("a.btn-secondary").addEventListener("click", function (event) {
        if (formModified) {
            event.preventDefault();
            Swal.fire({
                title: "Yakin ingin keluar?",
                text: "Perubahan yang belum disimpan akan hilang!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Ya, keluar!",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = event.target.href;
                }
            });
        }
    });
});

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
