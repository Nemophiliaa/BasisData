<?php
session_start();
include "../connection.php";
$error = "";
if(isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = ($_POST['password']);

    $query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$password'");

    if(mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_array($query);
        $_SESSION['user'] = $data;
        header("Location: ../BiodataDiri/index.php");
    } else {
        $error = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="sytle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="form-wrapper">
            <header class="form-header" aria-label="Form Header">
                <img src="../Assets/Smkn7Logo.png" alt="Logo SMKN 7" title="SMKN 7 SAMARINDA " class="logo">
                <h1>SMKN 7 SAMARINDA</h1>
                <P>TEKNIK KOMPUTER DAN JARINGAN</P>
            </header>
            <div class="form-body" aria-label="Form Body"> 
                <h1>WELCOME</h1>
                <form action="" method="post" autocomplete="off">
                    <input type="text" name="username" placeholder="Username" autocomplete="off" required>
                    <input type="password" name="password" placeholder="Password" autocomplete="new-password" required>
                    <?php if($error): ?>
                    <div style="color: red; margin-top: 10px;"><?php echo $error; ?></div>
                    <?php endif; ?>
                    <button type="submit">LOGIN</button>
                    <a href="../LoginAdmin/LoginAdmin.php" style="display: block; margin-bottom: -30px; margin-top: 20px; text-decoration: none; font-size: 1.2rem;">Login Sebagai Admin</a>
                </form>
            </div>
        </div>
    </main>
</body>
</html>