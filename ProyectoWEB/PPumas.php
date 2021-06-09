<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Pumas UNAM</title>
	<link rel="stylesheet" type="text/css" href="diseñoAmerica.css" >
</head>
<body>
		<style >
	body{
		background: url(PPumas.jpg) no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
	}	
</style>

	<?php
include ("con_db.php");



    $result =mysqli_query($conexion, "SELECT id_jugador, nombre, nacionalidad, edad, numero, posicion FROM datos_c where nombre_club='UNAM'");
    

    echo "
        <style>
h1 {
	color: white;
}
</style>
<style>
td {
	color: white;
}
</style>
   <h1><center> !!PLANTILLA COMPLETA DEL EQUIPO¡¡ </center> </h1>
	<center>
	<table widht=\"100%\"border=\1\">
		<thead style='background-color:#191970	;'> 
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
	<thead style='background-color:#191970	;'> 
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