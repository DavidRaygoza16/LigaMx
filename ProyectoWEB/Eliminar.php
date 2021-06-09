<?php
include("con_db.php");
if (isset($_POST['eliminar'])){

	$id_jugador=trim($_POST['id_jugador']);
/*	$nacionalidad=trim($_POST['nacionalidad']);
	$edad=trim($_POST['edad']);
	$numero=trim($_POST['numero']);
	$id_club=trim($_POST['id_club']);
	$id_posicion=trim($_POST['id_posicion']);
	$fin_contrato=trim($_POST['fin_contrato']);
	$fecha_registro= date("d/m/y");*/


$consulta=("DELETE FROM jugador WHERE id_jugador='$id_jugador'");
$resultado= mysqli_query($conexion,$consulta);

if($resultado){
?>
<center> <h1 class="ok"> EL JUGADOR HA SIDO ELIMINADO CORRECTAMENTE </h1> </center>
<center> <a href="PAdmin.html"> <button type="submit" name="back "value="Atras">REGRESAR</a> </center>
<?php
}else{
?>
<center> <h3 class="bad"> UPS, HA OCURRIDO UN ERROR AL INTENTAR ELIMINAR EL REGISTRO <br> </h3> </center>
<?php
}
}  else{
	?>
<center> <h3 class="bad"> POR FAVOR INGRESE EL NOMBRE COMPLETO PARA ELIMINAR  </h3> </center>
<?php
}

?>

