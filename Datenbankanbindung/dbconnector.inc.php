<?php
// Variabeln deklarieren
$host = 'localhost'; // host
$username = 'Modul_151'; // username
$password = 'Pizza1234'; // password
$database = 'Modul151'; // database



// mit der Datenbank verbinden
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>