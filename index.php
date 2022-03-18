<!doctype html>
<?php
include "conexiones/config.php";
include "conexiones/funciones.php";

if(!isset($p)){
	$p = "principal";
}else{
	$p = $p;
}


?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="estilos/ESTILOS.css"> 
<script src="https://kit.fontawesome.com/dcc02f985c.js" crossorigin="anonymous"></script>


  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt>
  

<title>MENU PRINCIPAL</title>
</head>
	<body>
	
	
	<header>
    
	<nav id="menu" >
		
		
<ul>
	
		
		<?php
		if(!isset($_SESSION['id'])){
		?>
		<li id="item"><a href="?p=principal"><i class="fas fa-home"></i>  Inicio</a></li>
	    <li id="item"><a href="?p=productos"><i class="fas fa-stream"></i> Productos</a></li>
	    <li id="item"><a href="?p=informacion"><i class="fas fa-info-circle"></i> Acerca de Nosotros</a></li>
	    <?php
			
		}else{
			?>
		<li id="item"><a href="?p=productos_admin"> <i class="fas fa-laptop"></i> Productos</a></li>
		<li id="item"><a href="?p=agregar_producto"> <i class="fas fa-folder-plus"></i> Agregar Producto</a></li>
	    <li id="item"><a href="?p=agregar_admin"><i class="fas fa-user-plus"></i> Agregar Admin</a></li>
	    <li id="item"><a class="pull-right subir" href="?p=administrador"><i class="fas fa-user"></i> Admin: <?=nombre_admin($_SESSION['id'])?></a></li>
		<li id="item"><a class="pull-right subir" href="?p=salir"><i class="fas fa-sign-out-alt"></i> Salir</a></li>

	<?php
		}

				
		?>	
	     

        <?php
		if(isset($_SESSION['id_cliente'])){
		?>
        <li id="item"><a href="?p=carrito"><i class="fas fa-shopping-cart"></i> Carrito</a></li>
	    <li id="item"><a class="pull-right subir" href="#"><i class="fas fa-user"></i> <?=nombre_cliente($_SESSION['id_cliente'])?></a></li>
		<li id="item"><a class="pull-right subir" href="?p=salir"><i class="fas fa-sign-out-alt"></i> Salir</a></li>
		

	
	    <?php
		}else if(isset($_SESSION['id'])){
			
		}else{
			?>
		<li id="item"><a href="?p=registro"><i class="fas fa-user-plus"></i></i> Registrarse</a></li>
        <li id="item"><a href="?p=sesion"><i class="fas fa-user-check"></i> Iniciar Sesion</a></li>
	    <li id="item"><a href="?p=administrador"><i class="fas fa-user-lock"></i> Administrador</a></li>
		<?php
		
		}
        ?>

		



	
		
		</ul>
		
	
	</nav>
	
	
		
	</header>	

	<br><div id="cuerpo">
		
		
		<?php
			if(file_exists("modulos/".$p.".php")){
				include "modulos/".$p.".php";
			}else{
				echo "Creandose..."; 
			}
		?>
		
		</div>
		
	<br>
<fooder>
<div id="piepagina">
		
	</i>
		</div>	
</fooder>

		
		
		
		
	
</body>


</html>
