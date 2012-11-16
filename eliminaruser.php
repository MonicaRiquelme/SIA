<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset='utf-8'>
		<link rel="stylesheet" href="estilos.css">
		<script src='jquery.js'></script>
	</head>
	<body>
	<?php
    session_start();
     if(isset($_SESSION['username'])){?>
     	<div id='contenido'>
			<header>
				<hgroup>
					<h1>Proyecto de Sia</h1>				
				</hgroup>
			</header>
			</div>
			<section>
				<div id='textPr'>
					<article>
						<hgroup>
                  	<h1>seleccion Usuario</h1>
                  </hgroup>
                 <form action="delete.php" method="post" name="form">
                 	<table>
						<tr>
							<td>Rut*:</td>
							<td><input type="text" name="rut" placeholder='Escribir Rut' required/></td>
						<tr>
							<td><input type="submit" value="enviar datos" /></td>
							<td><a href="admin.php" >volver</a></td>
						</tr>
						</table>
						<font size="2">los datos * son obligatorios</font>    
						<br><font size="2">si los datos son llenados corretamente se regresara al inicio</font>                
                 </form>
                </article>
				</div>	
			</section>
		</div>
		
	<?php }else {
		echo "no puedes ver esta pagina, registrate e inicia secion";
		}?>
		</body>	
</html>