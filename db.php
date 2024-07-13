<?php
// db.php
$host = 'pg-2c1b0f18-szanajatovo-3c95.f.aivencloud.com'; // Remplacez par le nom d'hôte de votre base de données PostgreSQL
$db = 'madagrad'; // Remplacez par le nom de votre base de données
$user = 'avnadmin'; // Remplacez par votre nom d'utilisateur PostgreSQL
$pass = 'AVNS_YHEjzlYZgaAhA4tkJXZ'; // Remplacez par votre mot de passe PostgreSQL
$charset = 'utf8';
$port = 27701; // Port de la base de données

$dsn = "pgsql:host=$host;port=$port;dbname=$db;user=$user;password=$pass";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}
?>
