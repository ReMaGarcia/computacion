<?php
//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
mysqli_report(MYSQLI_REPORT_OFF);

include ('conexion.php');

$conexion = @mysqli_connect($servidor, $usuario, $contrasena, $bd) or die("problemas en la connexión");

echo "<p> Conexión satisfactoria! </p>";

$nombre = $_POST['nombre'];      
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];      
$cantidad = $_POST['cantidad']; 

$sql = "INSERT INTO productos(nombre,descripcion,precio,cantidad) VALUES ('$nombre', '$descripcion', $precio, $cantidad)";

$resultat = mysqli_query($conexion, $sql);

if($resultat){
    echo "<p style='color:green'> Producto guardado correctamente!</p>";
}else{
    echo "<p style='color:red'> Error al guardar: " . mysqli_error($conexion) . "</p>";
}

//mysqli_query($conexion, $sql);

mysqli_close($conexion);
echo "<p>Producto listado!</p>";

$resultat = mysqli_query($conexion, $sql);

// Comprovar resultat
if ($resultat) {
    echo "<p>Producte inserit correctament</p>";
} else {
    echo "Error: No se ha podido registrar correctamente.. inténtelo de nuevo.. ";
}

mysqli_close($conexion);



// try {
//     $conexion = mysqli_connect($servidor, $usuario, $contrasena, $bd);

//     $nombre = $_POST['nombre'];      
//     $descripcion = $_POST['descripcion'];
//     $precio = $_POST['precio'];      
//     $cantidad = $_POST['cantidad']; 

//     $sql = "INSERT INTO productos(nombre,descripcion,precio,cantidad) VALUES ('$nombre', '$descripcion', $precio, $cantidad)";
    
//     mysqli_query($conexion, $sql);
    
//     mysqli_close($conexion);
//     echo "<p>Producto listado!</p>";

// } catch (mysqli_sql_exception $error) {
//     echo '<p style="color:red">problemas en la conexión</p>';
//     echo '<p style="color:red"> Problemas en la conexión</p>';
//     echo $error->getMessage();
// }

?>