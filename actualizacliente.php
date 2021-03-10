<html
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    

<?php
include("conect.php");
$conexion=conectarse();
$consulta = "SELECT * FROM CLIENTES WHERE idcliente=".$_GET["idcliente"];
echo $consulta; //solo para pruebas
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal al borrar el registro");
$fila = mysqli_fetch_array( $resultado );
/* echo "<p>IdCliente: " . $fila['idcliente'] . "</p>";
echo "<p>Nombre: " . $fila['nombre'] . "</p>";
echo "<p>Ciudad: " . $fila['ciudad'] . "</p>";
echo "<p>Edad: " . $fila['edad'] . "</p>";
echo "<p>fecha_nacimiento: " . $fila['fecha_nacimiento'] . "</p>";*/
?>
<h1>Actualiza Cliente</h1>
<form action="actualizacliente2.php">
<p>IdCliente:<input type="text" name="idcliente" value="<?php echo $fila['idcliente'] ?>" readonly></p>   
<p>Nombre:<input type="text" name="nombre" value="<?php echo $fila['nombre'] ?>"></p>    
<p>Ciudad:<input type="text" name="ciudad" value="<?php echo $fila['ciudad'] ?>"></p>     
<p>Edad:<input type="number" name="edad" value="<?php echo $fila['edad'] ?>"></p>
<p>Fecha de Nacimiento:<input type="date" name="fecha_nacimiento" value="<?php echo $fila['fecha_nacimiento'] ?>"></p> 

<input type="submit"  value="Actualizar cliente">
</form>

<?php
mysqli_close( $conexion );
?>
<p></p><a href=listaclientes.php>Volver</a></p>
</body>
</html>
