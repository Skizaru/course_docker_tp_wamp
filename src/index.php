<?php
/* ------------------ Partie Docker Compose ------------------ 
include 'db.php';
*/

echo "<!DOCTYPE html>
<html>
<head>
    <title>Basic PHP app</title>
    <link rel='stylesheet' type='text/css' href='styles.css'>
</head>
<body>";

echo "<h1>Serveur fonctionnel !</h1>";



/* ------------------ Partie Docker Compose ------------------ 

echo "<h1>Test de Connexion à MySQL</h1>";

if ($conn->connect_error) {
    echo "<p style='color:red;'>Connection failed: " . $conn->connect_error . "</p>";
} else {
    echo "<p style='color:green;'>Connected successfully to the database!</p>";
}

Fermer la connexion
$conn->close();
*/

echo "</body>
</html>";
?>
