<?php
session_start();
if (!isset($_SESSION['login'])){
    
echo "<script>alert('logout dahulu');</script>";
echo "<script>window.location.replace('login.php');</script>";
}
$con = new mysqli("localhost", "root", "", "login");
?>
selamat jalan <?php echo $_SESSION['username']; ?> <a href="logout.php">logout</a>