<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Atletico San Luis</title>
	<link rel="stylesheet" type="text/css" href="diseñoAmerica.css" >
</head>
<body>
		<style >
	body{
			background: url(FATS.png) no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
	}	
</style>

	<?php
include ("con_db.php");



    $result =mysqli_query($conexion, "SELECT id_jugador, nombre, nacionalidad, edad, numero, posicion FROM datos_c where nombre_club='Atletico San Luis'");
    

    echo "
   <h1><center> !!PLANTILLA COMPLETA DEL EQUIPO¡¡ </center> </h1>
	<center>
	<table widht=\"100%\"border=\1\">
	<thead style='background-color:#FFFAFA;'>
	<tr>
	<td> <b> <center> ID Jugador </center> </b> </td>
	<td> <b> <center> Nombre completo </center> </b> </td>
	<td> <b> <center> Nacionalidad </center> </b> </td>
	<td> <b> <center> Edad </center> </b> </td>
	<td> <b> <center> Numero </center> </b> </td>
	
	<td> <b> <center> Posicion </center> </b> </td>
	
	</tr>
	</thead>
";
    while($consulta = mysqli_fetch_array($result)){
echo  "
<tr>
<thead style='background-color:#FFFAFA;'>
<td> <center> ".$consulta['id_jugador']." </center> </td>
<td> <center> ".$consulta['nombre']." </center> </td>
<td> <center> ".$consulta['nacionalidad']." </center> </td>
<td> <center> ".$consulta['edad']." </center> </td>
<td> <center> ".$consulta['numero']."</center>  </td>

<td> <center> ".$consulta['posicion']." </center> </td>

</tr>
</thead>
</center>
";

}

echo"</table>";

?>

<a href="Equipos.html"> <button type="submit" name="back2"value="Atras">Regresar</a> 
</body>
</html>