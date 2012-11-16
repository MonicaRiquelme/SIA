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
                  	<h1>Agregar Usuario</h1>
                  </hgroup>
                 <form action="insertar.php" method="post" name="form">
                 	<table>
						<tr>
							<td>Rut*:</td>
							<td><input type="text" name="rut" placeholder='‬‬Rut sin punto ni guión' required/></td>
						</tr>
						<tr>
							<td>Nombre*:</td>
							<td><input type="text" name="nombre" placeholder='Escribir Nombre' required/></td>
						</tr>
						<tr>
							<td>Paterno*:</td>
							<td><input type="text" name="paterno" placeholder='Escribir Apellido Parteno' required/></td>
						</tr>
						<tr>
							<td>Materno*:</td>
							<td><input type="text" name="materno" placeholder='Escribir Apellido Materno' required/></td>
						</tr>
						<tr>
							<td>Fono:</td>
							<td><input type="number" name="fono" placeholder='Escribir Fono'/></td>
						</tr>
						<tr>
							<td>Celular</td>
							<td><input type="number" name="cell" placeholder='Escribir Celular'/></td>
						</tr>
						<tr>
							<td>Email*</td>
							<td><input type="email" name="email" placeholder='Escribir Email' required/></td>
						</tr>
						<tr>
							<td><input type="submit" value="insertar datos" /></td>
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