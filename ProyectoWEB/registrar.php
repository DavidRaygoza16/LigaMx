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
			background: url(FNuevo.jpg) no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
	}	
</style>

<?php
include("con_db.php");

if (isset($_POST['registrar'])){

if(strlen($_POST['nombre']) >= 1 &&
  strlen($_POST['nacionalidad']) >= 1 &&
  strlen($_POST['edad']) >= 1 &&
  strlen($_POST['numero']) >= 1 &&
  strlen($_POST['id_club']) >= 1 &&
  strlen($_POST['id_posicion']) >= 1 &&
  strlen($_POST['fin_contrato']) >= 1){

	$nombre=trim($_POST['nombre']);
	$nacionalidad=trim($_POST['nacionalidad']);
	$edad=trim($_POST['edad']);
	$numero=trim($_POST['numero']);
	$id_club=trim($_POST['id_club']);
	$id_posicion=trim($_POST['id_posicion']);
	$fin_contrato=trim($_POST['fin_contrato']);
	$fecha_registro= date("d/m/y");
$consulta=" INSERT INTO jugador(nombre, nacionalidad, edad, numero, id_club, id_posicion, fin_contrato, fecha_registro) values('$nombre', '$nacionalidad', '$edad', '$numero', '$id_club', '$id_posicion','$fin_contrato','$fecha_registro')";
$verificar_user = mysqli_query($conexion, "SELECT * FROM jugador WHERE nombre='$nombre'");
if(mysqli_num_rows($verificar_user) > 0){
	echo 'ERROR, "EL JUGADOR YA ESTA REGISTRADO"';
	exit;
}

$resultado= mysqli_query($conexion,$consulta);

if($resultado){
?>
<center> <h1 class="ok"> EL JUGADOR HA SIDO REGISTRADO CORRECTAMENTE </h1> 
<a href="PAdmin.html"> <button type="submit" name="back "value="Atras">REGRESAR</a> </center>
<?php
}else{
?>
<center> <h3 class="bad"> UPS, HA OCURIDO UN ERROR EN EL REGISTRO <br> </h3> </center>
<?php
}
}  else{
	?>
<center> <h3 class="bad"> POR FAVOR COMPLETE TODOS LOS CAMPOS </h3> </center>
<?php
}
}
?>


</body>
</html>