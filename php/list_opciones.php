<?PHP
include('conexion.php');
$querylocalidad = "SELECT * FROM localidad WHERE baja = 0 ORDER BY idLocalidad";
$rtslocalidad = mysqli_query($conexion, $querylocalidad);
//$localidad=mysqli_fetch_assoc($rtslocalidad)

$queryoperacion = "SELECT * FROM operacion WHERE baja = 0 ORDER BY nombreOperacion";
$rtsoperacion = mysqli_query($conexion, $queryoperacion);
// $operaciones=mysqli_fetch_assoc($rtsoperacion;

$querypropiedad = "SELECT * FROM propiedad WHERE baja = 0 ORDER BY nombrePropiedad";
$rtspropiedad = mysqli_query($conexion, $querypropiedad);
// $propiedades=mysqli_fetch_assoc($rtspropiedad); 
