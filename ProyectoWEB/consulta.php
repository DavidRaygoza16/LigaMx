<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>America</title>
	<link rel="stylesheet" type="text/css" href="diseñoAmerica.css" >
</head>
<body>
		<style >
	body{
			background: url(FResul.jpg) no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
	}	
</style>

 <?php
include ("con_db.php");

$id_jugador=$_POST['id_jugador'];

    $result =mysqli_query($conexion, "SELECT * FROM datos_c WHERE id_jugador='$id_jugador'");
    

    echo "
   <h1><center> !!RESUSLTADOS DE BUSQUEDA¡¡ </center> </h1>
	<center>
	<table widht=\"100%\"border=\1\">
	<tr>
	<td> <b> <center> ID Jugador </center> </b> </td>
	<td> <b> <center> Nombre completo </center> </b> </td>
	<td> <b> <center> Nacionalidad </center> </b> </td>
	<td> <b> <center> Edad </center> </b> </td>
	<td> <b> <center> Numero </center> </b> </td>
	<td> <b> <center> Club </center> </b> </td>
	<td> <b> <center> Posicion </center> </b> </td>
	
	</tr>
";
    while($consulta = mysqli_fetch_array($result)){
echo  "
<tr>
<td> <center> ".$consulta['id_jugador']." </center> </td>
<td> <center> ".$consulta['nombre']." </center> </td>
<td> <center> ".$consulta['nacionalidad']." </center> </td>
<td> <center> ".$consulta['edad']." </center> </td>
<td> <center> ".$consulta['numero']."</center>  </td>
<td> <center> ".$consulta['nombre_club']." </center> </td>
<td> <center> ".$consulta['posicion']." </center> </td>

</tr>
</center>
";

}

echo"</table>";

?>
<center> <a href="Equipos.html"> <button type="submit" name="back2"value="Atras">Regresar</a> </center>

</body>
</html>