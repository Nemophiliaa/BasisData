<?php
include "../connection.php";

$query = mysqli_query($koneksi, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="admin-dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Admin Dashboard</title>
    <style>
        
    </style>
</head>
<body>
    <nav>
        <div class="brand">AdminPanel</div>
        <a href="../logout.php">Log out</a>
    </nav>
    
    <h1>Data User</h1>
    <form class="form" action="post">
        <input type="text" name="search" placeholder="Search by name or nisn">
        <button type="submit">Search</button>
    </form>
    <div class="card-container">
        <?php while($row = mysqli_fetch_assoc($query)): ?>
            <div class="card">
                <h3><?php echo htmlspecialchars($row['nama']); ?></h3>
                <p>Nisn: <?php echo htmlspecialchars($row['nisn']); ?></p>
                <p>Sekolah: <?php echo htmlspecialchars($row['sekolah']); ?></p>
                <p>Alamat: <?php echo htmlspecialchars($row['alamat']); ?></p>
                <p>Tanggal Lahir: <?php echo htmlspecialchars($row['tanggal_lahir']); ?></p>
                <p>Hobi: <?php echo htmlspecialchars($row['hobi']); ?></p>
                <div class="button-gap">
                    <button class="edit-button">Edit</button>
                    <button class="delete-button">Delete</button>
                </div>
                
            </div>
        <?php endwhile; ?>
    </div>
    <div class="add-btn">
        <a href="../addData.php"><i class="fa-solid fa-plus white"></i></a>
    </div>
   
</body>
</html>