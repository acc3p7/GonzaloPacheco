
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
				<h2>BP Visco 7000 SAE 0w-40</h2>
				<img src="img/BP img/SAE040.png" width="143" height="252" alt="" class="imginfo" />
				<!-- Descripción del producto -->
				<p class="textoinfo">BP Visco 7000 0W-40 es un lubricante 100% sintético Extra Premium formulado con la tecnología de protección del motor CleanGuardTM para motores gasolina y diésel, incluidos los turboalimentados. Visco 7000 0W-40 esta especialmente diseñado para motores BMW, Porsche, VW y Mercedes, incluidos los equipados con filtros de partículas.</p>
				<p>
				</br>
				<!-- Ventajas del producto -->
				<h3 class="subinfo">Principales Ventajas:</h3>
				<div class="colbod">
					<div id="colheader">
					</div>
					<div id="colbody">
						<ul>
							<li>Excepcional limpieza del motor</li>
							<li>Sobresaliente protección frente condiciones extremas</li>
							<li>Prolonga la vida de los modernos sistemas de escape</li>
							<li>Reduce las emisiones dañinas al medio ambiente</li>
							<li>Mejora la economía de combustible</li>
						</ul>
					</div>
					<div id="colfooter">
					</div>
				
				</div>	
				</p>
			</div>
			

			<!-- Footer -->
			<?php include "includes/footer.php"; ?>
	</div>
</div>
</div>	
</div>

</body>
</html>