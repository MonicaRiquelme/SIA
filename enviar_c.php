<?php
include("conexion.php");
if(isset($_POST['rut']) && !empty($_POST['rut']))
{
	mysql_select_db($db,$con) or die("problemas al conectar db");
    $registro = mysql_query("SELECT * FROM Usuario WHERE ID = '$_POST[rut]'") or die ("problemas en consulta:".mysql_error());
    while($reg=mysql_fetch_array($registro)) {
    	$detino = $reg['Email'];
    	$uder = $reg['Nombre'];
    	$pass = $reg['Pw'];
    	}
    	$mensaje = "Estimado ".$uder." su contraseña es ".$pass." frentre a cualquier duda contactese con su administrador.";
    	$asunto = "recordatorio contraseña";
    	mail($detino,$asunto,$mensaje);
    		echo "Corro enviado...";
    		header("Location: index.html");
}else {
	echo "Problemas al enviar";}   		
?>