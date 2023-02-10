<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <h1>Catálogo de productos</h1>
  <?php
  // Incluye el archivo de conexión a la base de datos
  include 'connect.php';

  // Ejecuta la consulta SQL para obtener todos los productos
  $sql = "SELECT * FROM productos";
  $result = mysqli_query($conn, $sql);

  // Verifica si se obtuvieron resultados
  if (mysqli_num_rows($result) > 0) {
    // Recorre todos los resultados y los muestra en una tabla HTML
    echo "<table>";
    echo "<tr><th>Nombre</th><th>Descripción</th><th>Precio</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row["nombre"] . "</td>";
      echo "<td>" . $row["descripcion"] . "</td>";
      echo "<td>" . $row["precio"] . "</td>";
      echo "</tr>";
    }
    echo "</table>";
  } else {
    // Muestra un mensaje si no hay resultados
    echo "No se encontraron productos en la base de datos.";
  }
  

  // Cierra la conexión a la base de datos
  mysqli_close($conn);
  ?>
  <form action="agregar_producto.php" method="post">
  <label for="nombre">Nombre:</label>
  <input type="text" id="nombre" name="nombre" required>

  <label for="descripcion">Descripción:</label>
  <textarea id="descripcion" name="descripcion" required></textarea>

  <label for="precio">Precio:</label>
  <input type="number" id="precio" name="precio" required>

  <label for="imagen">Imagen:</label>
  <input type="text" id="imagen" name="imagen" required>

  <label for="categoria_id">Categoría:</label>
  <input type="number" id="categoria_id" name="categoria_id" required>

  <label for="talle">Talle:</label>
  <input type="text" id="talle" name="talle" required>

  <input type="submit" value="Agregar producto">
</form>
</body>
</html>