<?php
session_start();
include "../connection.php";
$error = "";
if(isset($_POST['username'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = mysqli_query($koneksi, "SELECT * FROM admin_login WHERE username='$username' AND password='$password'");

        if(mysqli_num_rows($query) > 0) {
            $data = mysqli_fetch_array($query);
            $_SESSION['user'] = $data;
            header("Location: ../dashboard-admin/admin-dashboard.php");
        } else {
            echo "<script>alert('Username atau Password salah!');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sytle.css">
    <title>Login Admin</title>
</head>
<body>
    <form class="form-login" method="POST" autocomplete="off">
        <h1 class="header">Welcome</h1>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" autocomplete="off" placeholder="username" required>
        <br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" autocomplete="new-password" placeholder="password" required>
        <br><br>

        <button class="btn" type="submit">Login</button>
        <a href="../FormLogin/LoginForm.php">Login sebagai siswa</a>
        <br><br>
    </form>
</body>
</html>