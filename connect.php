<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tienda_online";

// Crea la conexión a la base de datos
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica la conexión
if (!$conn) {
  die("La conexión ha fallado: " . mysqli_connect_error());
}
// echo "Conexión exitosa";
?>