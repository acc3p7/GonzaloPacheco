
<?php include "includes/header.php";?>

	<div id="contenedor">
		<div id="contenido">

		
						
			<!-- Contenido -->
			<div id="menuint">
				<h3>BP</h3>
				<ul>
					<li>Producto 1</li>
					<li>Producto 2</li>
					<li>Producto 3</li>
					<li>Producto 4</li>
				</ul>
			</div>
			
			<div id="contproductos">

				<?php
					include 'conexion.php';
					$re=mysql_query("select * from tblproducto") or die (mysql_error());
					while ($f=mysql_fetch_array($re)) {
						?>
						<h2><?php echo $f['productoNombre'];?></h2>
						<img src="productos/<?php echo $f['productoImagen'];?>" width="143" height="252" alt="" class="imginfo" />
						<p class="textoinfo">BP Visco 7000 0W-40 es un lubricante 100% sintético Extra Premium formulado con la tecnología de protección del motor CleanGuardTM para motores gasolina y diésel, incluidos los turboalimentados. Visco 7000 0W-40 esta especialmente diseñado para motores BMW, Porsche, VW y Mercedes, incluidos los equipados con filtros de partículas.</p>
						<p>
						</br>
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

						<?php
					}
				?>


			</div>
	

			
			
			

			<!-- Footer -->
			<div id="footer">
				<div id="direccion">
				<address>
					<b>Gonzalo Pacheco</b> Distribuidor de aceite y lubricantes en Cantabria<br />
					<b>Sede Santander</b> Poligono de Raos, C/ Alday Valle Real nº 3 ·  39011 Santander<br />
					<a href="#">www.gonzalopacheco.com</a> | <a href="mailto:buzon@gonzalopacheco.es">buzon@gonzalopacheco.es</a> | Tel.: 942 269 017 · Fax: 942 269 117 
				</address> 
				</div>
				
				<div id="logocic">
					<a href="http://www.cic.es" title="CIC"><img src="img/logocic.png" width="90" height="48" border="0"></a>
				</div>
				<div id="social">
				<dl>
					<dt>Social Media</dt>
					<dd><a href="#" title="RSS"><img src="img/rss.png" width="21" height="20" border="0"></a></dd>
					<dd><a href="http://www.youtube.com/" title="Youtube"><img src="img/youtube.png" width="21" height="20" border="0"></a></dd>
					<dd><a href="http://www.facebook.com/" title="Facebook"><img src="img/facebook.png" width="21" height="20" border="0"></a></dd>
					<dd><a href="http://www.twitter.com/" title="Twitter"><img src="img/twitter.png" width="21" height="20" border="0"></a></dd>
				</dl>
				</div>
				
			</div>
	</div>
</div>
</div>	
</div>

</body>
</html>