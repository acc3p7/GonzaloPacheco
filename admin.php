<?php
	include "conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
		<meta charset="utf-8"/>
		<title >Gonzalo Pacheco S.L.</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="slider.css" />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
		<script type="text/javascript" src="jq/jquery.featureList-1.0.0.js"></script>
		<script language="javascript">$(document).ready(function() {$.featureList($("#tabs li a"),$("#output li"), {start_item	:	1});});</script>
</head>

<body>


	<!-- header -->
	<div id="header">
			<div id="cabecera">
			<div class="menuacc">
				<ul>
					<li><a href="#" title="Inicio">Inicio</a></li>
					<li><a href="#" title="Contacto">Contacto</a></li>
					<li><a href="#" title="Mapa web">Mapa web</a></li>
					<li><a href="#" title="Accesibilidad">Accesibilidad</a></li>
				</ul>
			</div>
			
			<div class="menuid">
				<ul>
					<li><a href="#" title="Español"><img src="img/es.png" width="24" height="18" border="0"></a></li>
					<li><a href="#" title="Francés"><img src="img/fr.png" width="24" height="18" border="0"></a></li>
					<li><a href="#" title="Inglés"><img src="img/en.png" width="24" height="18" border="0"></a></li>
					<li><a href="#" title="Ruso"><img src="img/ru.png" width="24" height="18" border="0"></a></li>
				</ul>
			</div>
			
			<div class="logo">
				<h1 class="titulo"><a href="#"><span>Gonzalo Pacheco</span></a></h1>
			</div>
		</div>
		<!-- Menu dinámico para todas las páginas -->
		<div id="menu">
			<?php include "includes/menu.php"; ?>
		</div>
	</div>

	<div id="contenedor">
		<div id="contenido">		
						
			<!-- Contenido -->

			<!-- Menu lateral izquierdo -->
			<div id="menuint">
				<h3>BP</h3>
				<ul>
					<li>Producto 1</li>
					<li>Producto 2</li>
					<li>Producto 3</li>
					<li>Producto 4</li>
				</ul>
			</div>

			<!-- Contenido en la parte izquierda -->
			<div id="contproductos">
				<!-- Título del producto -->
				<h2>Ultimas compras</h2>
				<p></p>
				<table border="1px" width="100%" >
					<tr>
						<td>Nombre</td>
						<td>Precio</td>
						<td>Cantidad</td>
						<td>Subtotal</td>
					</tr>

					<?php
						$re=mysql_query("select * from tblpedido");
						$pedidoNumeroVenta=0;
						while ($f=mysql_fetch_array($re)) {
							if($pedidoNumeroVenta!=$f['pedidoNumeroVenta']){
								echo '<tr><td>Compra Número: '.$f['pedidoNumeroVenta'].' </td></tr>';
							}
							$pedidoNumeroVenta=$f['pedidoNumeroVenta'];
							echo '<tr>
									<td>'.$f['pedidoNombre'].'</td>
									<td>'.$f['pedidoPrecio'].'</td>
									<td>'.$f['pedidoCantidad'].'</td>
									<td>'.$f['pedidoSubtotal'].'</td>
							</tr>';
						}
					?>
				</table>
			</div>
			

			<!-- Footer -->
			<?php include "includes/footer.php"; ?>
	</div>
</div>
</div>	
</div>

</body>
</html>