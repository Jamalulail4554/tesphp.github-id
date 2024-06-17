<?php
session_start();

// Periksa apakah pengguna sudah login
if(!isset($_SESSION['login_user'])){
    header("location: A Login.php");
    die();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Selamat Datang</title>
</head>
<body>
    <h2>Selamat Datang, <?php echo $_SESSION['login_user']; ?>!</h2>
    <a href="C Logout.php">Logout</a>
</body>
</html>