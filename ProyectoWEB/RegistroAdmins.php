<?php
include ("con_db.php");


$usuario=$_POST['usuario'];
$password=$_POST['password'];


$insertar= "INSERT INTO admin(usuario, password) values('$usuario','$password')";

$verificar_user = mysqli_query($conexion, "SELECT * FROM admin WHERE usuario='$usuario'");
if(mysqli_num_rows($verificar_user) > 0){
	echo 'ERROR, "EL ADMINISTRADOR YA ESTA REGISTRADO"';
	exit;
}


$resultado=mysqli_query($conexion,$insertar);
if(!$resultado){
	echo 'Error al registrarse';

}else{
	echo'Usuario regristrado exitosamente';
}

mysqli_close($conexion);
