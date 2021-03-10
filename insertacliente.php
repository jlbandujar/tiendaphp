<html
<head>
    
</head>
<body>
   

<?php
include("conect.php");
$conexion=conectarse();
$nombre=$_GET["nombre"];
$ciudad=$_GET["ciudad"];
$edad=$_GET["edad"];
$fecha_nacimiento=$_GET["fecha_nacimiento"];
$consulta = "INSERT INTO CLIENTES (nombre,ciudad,edad,fecha_nacimiento) VALUES ('$nombre','$ciudad',$edad,'$fecha_nacimiento')";
echo $consulta;
$resultado = mysqli_query( $conexion, $consulta ) or die ("Algo ha ido mal al insertar el registro");
echo "Cliente $nombre insertado";
mysqli_close( $conexion );
?>
<p></p><a href=listaclientes.php>Volver</a></p>
</body>
</html>