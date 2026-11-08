<?php include 'conexion.php'; ?>
<h2>Agregar Producto</h2>
<form method="POST">
  Nombre: <input type="text" name="nombre" required><br><br>
  Descripcion: <input type="text" name="descripcion"><br><br>
  Precio: <input type="number" step="0.01" name="precio" required><br><br>
  Stock: <input type="number" name="stock" required><br><br>
  Categoria: <input type="text" name="categoria"><br><br>
  <input type="submit" name="Guardar" value="Guardar">
</form>
<a href="index.php">Volver</a>
<?php
if(isset($_POST['Guardar'])){
  $stmt=$pdo->prepare("INSERT INTO productos (nombre, descripcion, precio, stock, categoria) VALUES (?,?,?,?,?)");
  $stmt->execute([$_POST['nombre'], $_POST['descripcion'], $_POST['precio'], $_POST['stock'], $_POST['categoria']]);
  echo "<p>Guardado!</p>";
}
?>