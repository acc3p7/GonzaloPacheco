				<h2>Agregar un Nuevo Producto</h2>
				<p>
					<form action="admin/altaproducto.php" method = "post" enctype="multipart/form-data">
						<fieldset>
							Nombre<br>
							<input type="text" name="nombre">
						</fieldset>
						<fieldset>
							Descripción<br>
							<input type="text" name="descripcion">
						</fieldset>
						<fieldset>
							Imagen<br>
							<input type="file" name="file">
						</fieldset>
						<fieldset>
							Precio<br>
							<input type="text" name="precio">
						</fieldset>
						<input type="submit" name="accion" value="Enviar" class="aceptar">
					</form>	
				</p>
				<p>
					</br>
					<!-- Ventajas del producto -->
					<div class="colbod">
						<div id="colheader">
						</div>
						<div id="colbody">
						</div>
						<div id="colfooter">
						</div>
					
					</div>	
				</p>
