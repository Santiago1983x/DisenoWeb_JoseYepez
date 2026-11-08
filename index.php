<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Mi Sistema Web - Productos</title>
<style>
body{font-family:Arial; margin:30px; background:#f4f4f4}
h2{color:#333}
a.btn{background:#28a745;color:white;padding:8px 15px;text-decoration:none;border-radius:5px}
table{width:100%;background:white;border-collapse:collapse;margin-top:15px}
th{background:#333;color:white;padding:10px} td{padding:10px;border-bottom:1px solid #ddd}
</style>
</head>
<body>
<h2>Mi Sistema Web - Productos</h2>
<a class="btn" href="agregar.php">+ Agregar Producto</a>
<table>
<tr><th>ID</th><th>Nombre</th><th>Descripcion</th><th>Precio</th><th>Stock</th><th>Categoria</th><th>Fecha</th></tr>
<?php
$stmt = $pdo->query("SELECT * FROM productos");
while($row = $stmt->fetch()){
  echo "<tr><td>".htmlspecialchars($row['id'])."</td><td>".htmlspecialchars($row['nombre'])."</td><td>".htmlspecialchars($row['descripcion'])."</td><td>$".htmlspecialchars($row['precio'])."</td><td>".htmlspecialchars($row['stock'])."</td><td>".htmlspecialchars($row['categoria'])."</td><td>".htmlspecialchars($row['fecha_creacion'])."</td></tr>";
}
?>
</table>
</body>
</html>