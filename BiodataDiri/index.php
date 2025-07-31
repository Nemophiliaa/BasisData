<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: LoginForm.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Biodata Diri</title>
</head>
<body>
    <nav>
        <div class="nav-wrapper">
            <a href=""><i class="fa-brands fa-linkedin"></i></a>
            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </div>
    </nav>
    <main>
        <div class="card-wrapper">
            <div class="card">
                <figure>
                    <img src="../Assets/dummy.jpg" alt="">
                </figure>

                <div class="card-content">
                    <h1>WELCOME I'M <?php echo $_SESSION['user']['nama']; ?></h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel, in. Impedit sequi labore animi voluptatem, nobis debitis possimus voluptatum ad nostrum molestias.</p>
                </div>
            </div>
        </div>
        
        <article>
            <div class="article-wrapper">
                <div class="list-wrapper">
                    <div class="formal-list">
                        <ul>
                            <li><span class="label">NISN</span> : <span class="value"><?php echo $_SESSION['user']['nisn']; ?></span></li>
                            <li><span class="label">Birth name</span> : <span class="value"><?php echo $_SESSION['user']['nama']; ?></span></li>
                            <li><span class="label">Birthday</span> : <span class="value"><?php echo $_SESSION['user']['tanggal_lahir']; ?></span></li>
                            <li><span class="label">Address</span> : <span class="value"><?php echo $_SESSION['user']['alamat']; ?></span></li>
                            <li><span class="label">School</span> : <span class="value"><?php echo $_SESSION['user']['sekolah']; ?></span></li>
                        </ul>
                    </div>
                    <div class="nonformal-list">
                        <ul>
                            <li><span class="label">Hobbies</span> : <span class="value"><?php echo $_SESSION['user']['hobi']; ?></span></li>
                            <li><span class="label">Email</span> : <span class="value"><?php echo $_SESSION['user']['email']; ?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </article>
    </main>
</body>
</html>