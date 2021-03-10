<html>
<head>
    
</head>
<body>
   

<?php
include("conect.php");
$conexion=conectarse();
$idCliente=$_GET["idcliente"];
$nombre=$_GET["nombre"];
$ciudad=$_GET["ciudad"];
$edad=$_GET["edad"];
$fecha_nacimiento=$_GET["fecha_nacimiento"];
$consulta = "UPDATE  CLIENTES SET nombre = '$nombre',
								ciudad='$ciudad',
								edad = $edad,
								fecha_nacimiento='$fecha_nacimiento' WHERE idCliente = $idCliente";
;
echo $consulta;
$resultado = mysqli_query( $conexion, $consulta ) or die ("Algo ha ido mal al insertar el registro");
echo "Cliente $nombre actualizado";
mysqli_close( $conexion );
?>
<p></p><a href=listaclientes.php>Volver</a></p>
</body>
</html>