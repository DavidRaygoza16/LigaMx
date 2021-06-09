<?php

include("con_db.php");
if (isset($_POST['actualizar'])){

if(
//strlen($_POST['id_jugador']) >= 1 &&
  strlen($_POST['nombre']) >= 1 &&
  strlen($_POST['nacionalidad']) >= 1 &&
  strlen($_POST['edad']) >= 1 &&
  strlen($_POST['numero']) >= 1 &&
  strlen($_POST['id_club']) >= 1 &&
  strlen($_POST['id_posicion']) >= 1 &&
  strlen($_POST['fin_contrato']) >= 1){

	//$id_jugador=trim($_POST['id_jugador']);
	$nombre=trim($_POST['nombre']);
	$nacionalidad=trim($_POST['nacionalidad']);
	$edad=trim($_POST['edad']);
	$numero=trim($_POST['numero']);
	$id_club=trim($_POST['id_club']);
	$id_posicion=trim($_POST['id_posicion']);
	$fin_contrato=trim($_POST['fin_contrato']);
	$fecha_registro= date("d/m/y");
$consulta=("UPDATE jugador SET nombre='$nombre', nacionalidad='$nacionalidad', edad='$edad', numero='$numero', id_club='$id_club', id_posicion='$id_posicion', fin_contrato='$fin_contrato' WHERE nombre='$nombre'");
$resultado= mysqli_query($conexion,$consulta);

if($resultado){
?>
<center> <h1 class="ok"> EL REGISTRO DEL JUGADOR HA SIDO MODIFICADO CON EXITO </h1> </center>
<center><a href="Actualizar.php"> <button type="submit" name="back "value="Atras">REGRESAR</a> </center>

<?php
}else{
?>
<center> <h3 class="bad"> UPS, HA OCURRIDO UN ERROR AL INTENTAR ACTUALIZAR <br> </h3> </center>
<?php
}
}  else{
	?>
<center> <h3 class="bad"> POR FAVOR COMPLETE TODOS LOS CAMPOS PARA ACTUALIZAR </h3> </center>
<?php
}
}
?>