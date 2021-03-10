<html
<head>
    
</head>
<body>
    

<?php
include("conect.php");
$conexion=conectarse();
$consulta = "DELETE FROM CLIENTES WHERE idcliente=".$_GET["idcliente"];
//echo $consulta;
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal al borrar el registro");
echo "Cliente ".$_GET['idcliente']."borrado";
mysqli_close( $conexion );
?>
<p></p><a href=listaclientes.php>Volver</a></p>
</body>
</html>