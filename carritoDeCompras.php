<?php
	session_start();
	include 'conexion.php';
	if (isset($_SESSION['carrito'])) {
		if(isset($_GET['id'])){
			$arreglo=$_SESSION['carrito'];
			$encontro=false;
			$numero=0;
			for ($i=0; $i<count($arreglo); $i++) { 
				if ($arreglo[$i]['ProductoID']==$_GET['id']){
					$encontro=true;
					$numero=$i;
				}
			}
			if($encontro==true){
				$arreglo[$numero]['ProductoCantidad']=$arreglo[$numero]['ProductoCantidad']+1;
				$_SESSION['carrito']=$arreglo;
			}else{
				$nombre="";
				$precio=0;
				$thumb="";
				/* Capturamos en el while toda la info que nos interesa y viene de la DB */
				$re=mysql_query("select * from tblproducto where productoID=".$_GET['id']);
				while ($f=mysql_fetch_array($re)) {
					$nombre=$f['productoNombre'];
					$precio=$f['productoPrecio'];
					$thumb=$f['productoThumb'];
				}
				$datosNuevos=array('ProductoID'=>$_GET['id'],
								'ProductoNombre'=>$nombre,
								'ProductoPrecio'=>$precio,
								'ProductoThumb'=>$thumb,
								'ProductoCantidad'=>1);
				array_push($arreglo, $datosNuevos);
				$_SESSION['carrito']=$arreglo;
		}
	}

	}else{
		if (isset($_GET['id'])) {
			$nombre="";
			$precio=0;
			$thumb="";
			/* Capturamos en el while toda la info que nos interesa y viene de la DB */
			$re=mysql_query("select * from tblproducto where productoID=".$_GET['id']);
			while ($f=mysql_fetch_array($re)) {
				$nombre=$f['productoNombre'];
				$precio=$f['productoPrecio'];
				$thumb=$f['productoThumb'];
			}
			/* Igual hay que modificar aquí el ID primero o segundo para ver cual es el que vale */
			/* Se entra al arreglo con la primera mayuscula y a la DB con la primera en minúscula */
			$arreglo[]=array('ProductoID'=>$_GET['id'],
							'ProductoNombre'=>$nombre,
							'ProductoPrecio'=>$precio,
							'ProductoThumb'=>$thumb,
							'ProductoCantidad'=>1);
			$_SESSION['carrito']=$arreglo;
		}
	}

?>
<!DOCTYPE html>
<html lang="es">
<head>
		<meta charset="utf-8"/>
		<title >Gonzalo Pacheco S.L.</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="slider.css" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>
		<!--<script type="text/javascript" src="js/prueba.js"></script>-->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.featureList-1.0.0.js"></script>
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
				<h2>Carrito de compras</h2>
				<?php
					$total=0;
					if(isset($_SESSION['carrito'])){
						$datos=$_SESSION['carrito'];
						$total=0;
						for ($i=0; $i<count($datos) ; $i++) { 
				?>	
							<div class="producto">
								<center>
									<img src="productos/thumbnail/<?php echo $datos[$i]['ProductoThumb'];?>"><br>
									<span><?php echo $datos[$i]['ProductoNombre'];?></span><br>
									<span>Precio: <?php echo $datos[$i]['ProductoPrecio'];?></span><br>
									<span>Cantidad 
										<input type="text" 
										value="<?php echo $datos[$i]['ProductoCantidad'];?>"
										data-precio="<?php echo $datos[$i]['ProductoPrecio'];?>"
										data-id="<?php echo $datos[$i]['ProductoID'];?>"
										class="cantidad"> 
									</span><br>
									<span class="subtotal">Subtotal: <?php echo $datos[$i]['ProductoPrecio']*$datos[$i]['ProductoCantidad'];?></span><br>
								</center>
							</div>
				<?php
					$total=($datos[$i]['ProductoCantidad']*$datos[$i]['ProductoPrecio'])+$total;
						}
					}else{
						echo '<center><h3>El carrito de compras está vacío</h3></center>';
					}
					echo '<center><h2 id="total">Total : '.$total.'</h2></center>';
					if($total!=0){
						echo '<center><a href="./compras/compras.php" class="aceptar">Comprar</a></center>';
				}
				?>
				<center><a href="./basesubcategoria.php">Ver catalogo</a></center>


			</div>

			<!-- Footer -->
			<?php include "includes/footer.php"; ?>
	</div>
</div>
</div>	
</div>

</body>
</html>