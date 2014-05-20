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

			<!-- Contenido en la parte derecha -->
			<div id="portadaproductos">
				<center>
					<img src="img/portadabp.png"/>
				</center>
				<p>
					BP, British Petroleum, es una compañía de energía, dedicada principalmente al petróleo y al gas natural, que tiene su sede en Londres, Reino Unido. Es una de las mayores compañías del mundo (puesto octavo según la revista americana Forbes1 ) y la tercera empresa privada más importante dedicada al petróleo y gas después de ExxonMobil y Royal Dutch Shell.
					<br/><br/>BP España es la tercera empresa del sector petrolero en España, por detrás de Repsol y Cepsa. Cuenta con un 10% de cuota de mercado y se halla presente sobre todo en la zona mediterránea, Centro, Andalucía y Canarias.
					<br/><br/>Aunque la presencia de BP en España se remonta a más de 75 años, la importancia de la misma se acentuó en 1991, tras la compra de Petromed (Petróleos del Mediterráneo) a Banesto en 1991. Dicho compra permitió a BP acceder en condiciones óptimas a la desmonopolización de CAMPSA que se produjo durante los dos años siguientes. la compra de Petromed marcó en su momento un récord en el mercado financiero español.
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