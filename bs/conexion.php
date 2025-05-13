<?php
$servername = "sql311.infinityfree.com";  // Reemplaza con tu servidor
$username = "if0_38704752";  // Tu usuario de InfinityFree
$password = "ZJKopSPvSZe";  // La contraseña
$dbname = "if0_38704752_XXX";  // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";
?>
