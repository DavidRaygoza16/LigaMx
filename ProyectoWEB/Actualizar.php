<?php
include ("con_db.php");

    $result =mysqli_query($conexion, "SELECT * FROM jugador");

    echo "
    <center><h2>Actualizacion De Registros </h2></center><br>
    <center><table width\"100%\" border=\"1\"></center>
    
    <table widht=\"100%\"border=\1\">
    <tr>
    <td> <b> <center> ID Jugador </center> </b> </td>
    <td> <b> <center> Nombre completo </center> </b> </td>
    <td> <b> <center> Nacionalidad </center> </b> </td>
    <td> <b> <center> Edad </center> </b> </td>
    <td> <b> <center> Numero </center> </b> </td>
    <td> <b> <center> ID Club </center> </b> </td>
    <td> <b> <center> ID Posicion </center> </b> </td>
    <td> <b> <center> Fin Contrato </center> </b> </td>
    <td> <b> <center> Fecha Registro </center> </b> </td>
    <td> <b> <center> Accion </center> </b> </td>
    </tr>
";
    while($consulta = mysqli_fetch_array($result)){
echo "
        <tr>

<tr>
<td> <center> ".$consulta['id_jugador']." </center> </td>
<td> <center> ".$consulta['nombre']." </center> </td>
<td> <center> ".$consulta['nacionalidad']." </center> </td>
<td> <center> ".$consulta['edad']." </center> </td>
<td> <center> ".$consulta['numero']."</center>  </td>
<td> <center> ".$consulta['id_club']." </center> </td>
<td> <center> ".$consulta['id_posicion']." </center> </td>
<td> <center> ".$consulta['fin_contrato']." </center> </td>
<td> <center> ".$consulta['fecha_registro']." </center> </td>


</center>

        
            <td> <br><form action='PAdmin2.html' method='post'>
       <center> <input type='submit' value='Actualizar'> </center>
                </form></td>
                        
        </tr>
        
</tr>

        ";

}

?>