<?php
// Config/Connection.php
$host = "localhost";
$username = "root";
$password = ""; // Kosong untuk XAMPP default
$dbname = "dbkegiatan_dosen";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->exec("SET NAMES 'utf8mb4'");
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>