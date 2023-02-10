<?php

include 'connect.php';

// Datos del producto
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$imagen = $_POST['imagen'];
$categoria_id = $_POST['categoria_id'];
$talle = $_POST['talle'];

// Insertar producto en la tabla
$sql = "INSERT INTO productos (nombre, descripcion, precio, imagen, categoria_id, talle)
VALUES ('$nombre', '$descripcion', '$precio', '$imagen', '$categoria_id', '$talle')";

if (mysqli_query($conn, $sql)) {
    echo "Producto agregado correctamente";
} else {
    echo "Error al agregar producto: " . mysqli_error($conn);
}

// Cerrar conexión
mysqli_close($conn);

?>
<!DOCTYPE html>
<html>
    <body>
        <a href="index.php">Volver</a>
    </body>
</html>