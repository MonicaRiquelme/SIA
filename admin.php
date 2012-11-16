<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset='utf-8'>
		<link rel="stylesheet" href="estilos.css">
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
                  	<h1>esto es una prueba</h1>
                  </hgroup>
                  <p>huhiuhñhpononóóhjohfkdfñuidsafncpiufpia
                     sdufgapsdhfpiasdfgpucfndsfpuadhf.
                  </p>
                  <ul>
                    <li><a href="agregaruser.php">agregar usuario</a></li>
                    <li><a href="seleccionuser.php">modificar usuario</a></li>
						  <li><a href="eliminaruser.php">eliminar usuario</a></li>
						  <li><a href="destruir.php">cerrar sesion</a></li>
						  <li><a href="todos.php" >mostrar todos</a></li>
                  </ul>			
                 </article>
				</div>	
			</section>
		</div>
		
	<?php }else {
		echo "no puedes ver esta pagina, registrate e inicia secion";
		}?>
		</body>	
</html>