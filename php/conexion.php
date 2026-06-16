<?php
mysqli_report(MYSQLI_REPORT_OFF);

include ("variablesCompu.php");

$conexion = @mysqli_connect($servidor, $usuario, $contrasena, $bd) or die("problemas en la connexión");

echo "<p> Conexión satisfactoria! </p>";

// Recollir dades del formulari
// $nombre      = $_POST["nombre"];
// $descripcion = $_POST["descripcion"];
// $precio      = $_POST["precio"];
// $cantidad    = $_POST["cantidad"];

// // Crear consulta SQL
// $sql = "INSERT INTO productos
//         (nombre, descripcion, precio, cantidad)
//         VALUES
//         ('$nombre', '$descripcion', $precio, $cantidad)";

// // Executar consulta
// $resultat = mysqli_query($conexion, $sql);

// // Comprovar resultat
// if ($resultat) {
//     echo "<p>Producte inserit correctament</p>";
// } else {
//     echo "Error: No se ha podido registrar correctamente.. inténtelo de nuevo.. ";
// }

// mysqli_close($conexion);
?>