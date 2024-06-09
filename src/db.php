<?php
$servername = "db_tp_docker";
$username = "user";
$password = "password";
$database = "mydatabase";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $database);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
