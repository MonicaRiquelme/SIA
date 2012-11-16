<?
include("conexion.php");

if(isset($_POST['rut']) && !empty($_POST['rut']) && isset($_POST['nombre']) && !empty($_POST['nombre']) && 
isset($_POST['paterno']) && !empty($_POST['paterno']) && isset($_POST['materno']) && !empty($_POST['materno']) ) 
{
	mysql_query("UPDATE Usuario SET Fijo='$_POST[fono]', Cell='$_POST[cell]',Email='$_POST[email]'",$con);
header("Location: admin.php");
}
else {
	header("Location: seleccionaruser.php");
	}
?>			