<?php
include ("con_db.php");

$usuario = $_POST["usuario"]; 
$password = $_POST["password"]; 
session_start();
$_SESSION['usuario']=$usuario;

include('con_db.php');

$consulta="SELECT * FROM admin where usuario='$usuario' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:PAdmin.html");
}
else{
    ?>
    <?php
    include("Validadr.php");
    ?>

    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>

    <h1 class=""> &nbsp; &nbsp; &nbsp; &nbsp; !ERROR, LOS DATOS INGRESADOS SON INCORRECTOS¡</h1>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);