<?php include_once "header.php" ?>
	<div class="[ padding ][ text-center ][ border ]">
		<h3 class="[ no-margin ][ uppercase ]">Quiero vender</h3>
	</div>
	<section class="[ steps ][ text-center ][ border ]">
		<div class="[ padding ][ text-center ][ margin-bottom ]">
			<h3 class="[ margin-bottom ]">Vende tus muebles con unos pocos clicks</h3>
		</div>
		<div class="[ wrapper ]">
			<div class="[ margin-bottom ]">
				<i class="[ block xmall-12 ][ icon-sillon icon-menu icon--large ][ color-primary ]"></i>
				<h3 class="[ no-margin ]">Vende tu mueble</h3>
				<p>Postea tu mueble de una manera rápida y sencilla.</p>
			</div>
			<div class="[ margin-bottom ]">
				<i class="[ block xmall-12 ][ icon-sillon icon-menu icon--large ][ color-primary ]"></i>
				<h3 class="[ no-margin ]">Nosotros lo recogemos</h3>
				<p>Nuestro equipo de mudanza se encarga de recoger y entregar el producto.</p>
			</div>
			<div class="[ margin-bottom ]">
				<i class="[ block xmall-12 ][ icon-sillon icon-menu icon--large ][ color-primary ]"></i>
				<h3 class="[ no-margin ]">Pago</h3>
				<p>El pago se procesará una vez que el producto haya sido recogido, el dinero se depositará a tu cuenta entre 24 y 48hrs.</p>
			</div>
		</div><!-- wrapper -->
	</section><!-- steps -->

	<form action="#">
		<section class="[ categories ]">
			<div class="[ padding ]">
				<div class="[ text-center ]">
					<h3 class="[ no-margin ]">Empieza a vender</h3>
				</div>
			</div>
			<div class="[ wrapper ]">
				<h3 class="[ margin-bottom ][ color-primary ]"><small>Describe tu artículo</small></h3>
			</div>

			<div class="[ row ][ margin-bottom ]">
				<a href="#" class="[ span xmall-6 ][ border ][ button button--primary button--ink button--selected ][ padding ]"><i class="[ icon-sillones ]"></i>Sillones</a>
				<input type="hidden" name="couches" value="selected">
				<a href="#" class="[ span xmall-6 ][ border ][ button button--primary button--ink ][ padding ]"><i class="[ icon-sillas ]"></i>Sillas</a>
				<input type="hidden" name="chairs" value="">
				<a href="#" class="[ span xmall-6 ][ border ][ button button--primary button--ink ][ padding ]"><i class="[ icon-mesas ]"></i>Mesas</a>
				<input type="hidden" name="" value="">
				<a href="#" class="[ span xmall-6 ][ border ][ button button--primary button--ink ][ padding ]"><i class="[ icon-recamaras ]"></i>Recámaras</a>
				<input type="hidden" name="" value="">
				<a href="#" class="[ span xmall-6 ][ border ][ button button--primary button--ink ][ padding ]"><i class="[ icon-almacenaje ]"></i>Almacenaje</a>
				<input type="hidden" name="" value="">
				<a href="#" class="[ span xmall-6 ][ border ][ button button--primary button--ink ][ padding ]"><i class="[ icon-iluminación ]"></i>Iluminación</a>
				<input type="hidden" name="" value="">
				<a href="#" class="[ span xmall-6 ][ border ][ button button--primary button--ink ][ padding ]"><i class="[ icon-decoration ]"></i>Decoración</a>
				<input type="hidden" name="" value="">
				<a href="#" class="[ span xmall-6 ][ border ][ button button--primary button--ink ][ padding ]"><i class="[ icon-kids ]"></i>para niños</a>
				<input type="hidden" name="" value="">
			</div><!-- row -->
			<div class="wrapper">
				<fieldset class="[ margin-bottom ]">
					<label class="[ block xmall-12 ]" for="email">Subcategoría <span class="[ color-primary ]">*</span></label>
					<select name="subcategories" id="">
						<option value="table-lamp">de mesa</option>
						<option value="table-lamp">de mesa</option>
						<option value="table-lamp">de mesa</option>
					</select>
				</fieldset>
				<fieldset class="[ margin-bottom ]">
					<label class="[ block xmall-12 ]" for="email">Nombre <span class="[ color-primary ]">*</span></label>
					<input class="[ block ][ xmall-12 ]" type="text" value="ej. lámpara de mesa negra">
				</fieldset>
				<fieldset class="[ margin-bottom ]">
					<label class="[ block xmall-12 ]" for="email">Descripción <span class="[ color-primary ]"></span></label>
					<textarea class="[ block ][ xmall-12 ]"></textarea>
				</fieldset>
				<fieldset class="[ margin-bottom ]">
					<label class="[ block xmall-12 ]" for="email">Dimenciones <span class="[ color-primary ]">*</span> (en cms)</label>
					<div class="[ row ]">
						<div class="[ columna xmall-4 ]">
							<input class="[ block xmall-12 ]" name="width" type="text" placeholder="ancho">
						</div>
						<div class="[ columna xmall-4 ]">
							<input class="[ block xmall-12 ]" name="height" type="text" placeholder="alto">
						</div>
						<div class="[ columna xmall-4 ]">
							<input class="[ block xmall-12 ]" name="depth" type="text" placeholder="profundo">
						</div>
					</div>
				</fieldset>
				<fieldset class="[ state ][ margin-bottom ]">
					<label class="[ block xmall-12 ]" for="">Estado</label>
					<select class="[ padding ][ text-center ]">
						<option href="#" value="nuevo" >nuevo</a>
						<option href="#" value="bueno" >bueno</a>
						<option href="#" value="satisfactorio" >satisfactorio</a>
						<option href="#" value="gastado" >gastado</a>
					</select>

					<p class="[ no-margin ]"><small><span class="[ color-primary ]">*</span></small></p>
					<p class="[ no-margin ]"><small>Nuevo - el producto se encuentra dentro de su caja </small></p>
					<p class="[ no-margin ]"><small>Bueno - el producto se encuentra dentro de su caja </small></p>
					<p class="[ no-margin ]"><small>Satisfactorio - el producto se encuentra dentro de su caja </small></p>
					<p class="[ no-margin ]"><small>Gastado - el producto se encuentra dentro de su caja </small></p>
				</fieldset>
				<fieldset class="[ margin-bottom ]">
					<label class="[ block xmall-12 ]" for="">Marca</label>
					<select class="[ padding ][ text-center ]">
						<option href="#" value="nuevo" >nuevo</a>
						<option href="#" value="bueno" >bueno</a>
						<option href="#" value="satisfactorio" >satisfactorio</a>
						<option href="#" value="gastado" >gastado</a>
					</select>
				</fieldset>
				<fieldset class="[ margin-bottom ]">
					<label class="[ block xmall-12 ]" for="">Material<span class="[ color-primary ]">*</span></label>
					<select class="[ padding ][ text-center ]">
						<option href="#" value="nuevo" >nuevo</a>
						<option href="#" value="bueno" >bueno</a>
						<option href="#" value="satisfactorio" >satisfactorio</a>
						<option href="#" value="gastado" >gastado</a>
					</select>
				</fieldset>
				<fieldset class="[ margin-bottom ]">
					<label class="[ block xmall-12 ]" for="">Edad<span class="[ color-primary ]">*</span></label>
					<select class="[ padding ][ text-center ]">
						<option href="#" value="nuevo" >nuevo</a>
						<option href="#" value="bueno" >bueno</a>
						<option href="#" value="satisfactorio" >satisfactorio</a>
						<option href="#" value="gastado" >gastado</a>
					</select>
				</fieldset>
				<fieldset class="[ margin-bottom ]">
					<label class="[ block xmall-12 ]" for="">Color<span class="[ color-primary ]">*</span></label>
					<select class="[ padding ][ text-center ]">
						<option href="#" value="nuevo" >nuevo</a>
						<option href="#" value="bueno" >bueno</a>
						<option href="#" value="satisfactorio" >satisfactorio</a>
						<option href="#" value="gastado" >gastado</a>
					</select>
				</fieldset>
			</div>
		</section>

		<section class="[ images ]">
			<div class="[ wrapper ]">
				<h3 class="[ margin-bottom ][ color-primary ]"><small>Agrega imágenes</small></h3>
				<p class="[ color-dark ]"><small><span class="[ color-primary ]">*</span> Recuerda incluir acercamientos del material y posibles dañis que pueda tener el artículo</small></p>
				<fieldset class="[ margin-bottom ][ padding--large border-grey ][ text-center ]">
					<i class="[ block xmall-12 ][ icon-menu icon-camera icon--large ][ color-grey ]"></i>
					<p class="[ color-grey ]"><small>vista frontal</small></p>
					<a href="" class="[ button button--primary button--hollow ]">agregar</a>
				</fieldset>
				<fieldset class="[ margin-bottom ][ padding--large border-grey ][ text-center ]">
					<i class="[ block xmall-12 ][ icon-menu icon-camera icon--large ][ color-grey ]"></i>
					<p class="[ color-grey ]"><small>vista derecha</small></p>
					<a href="" class="[ button button--primary button--hollow ]">agregar</a>
				</fieldset>
				<fieldset class="[ margin-bottom ][ padding--large border-grey ][ text-center ]">
					<i class="[ block xmall-12 ][ icon-menu icon-camera icon--large ][ color-grey ]"></i>
					<p class="[ color-grey ]"><small>vista izquierda</small></p>
					<a href="" class="[ button button--primary button--hollow ]">agregar</a>
				</fieldset>
				<fieldset class="[ margin-bottom ][ padding--large border-grey ][ text-center ]">
					<i class="[ block xmall-12 ][ icon-menu icon-camera icon--large ][ color-grey ]"></i>
					<p class="[ color-grey ]"><small>vista trasera</small></p>
					<a href="" class="[ button button--primary button--hollow ]">agregar</a>
				</fieldset>
				<fieldset class="[ margin-bottom ][ padding--large border-grey ][ text-center ]">
					<i class="[ block xmall-12 ][ icon-menu icon-camera icon--large ][ color-grey ]"></i>
					<p class="[ color-grey ]"><small>detalles</small></p>
					<a href="" class="[ button button--primary button--hollow ]">agregar</a>
				</fieldset>
				<fieldset class="[ margin-bottom ][ padding--large border-grey ][ text-center ]">
					<i class="[ block xmall-12 ][ icon-menu icon-camera icon--large ][ color-grey ]"></i>
					<p class="[ color-grey ]"><small>agregar foto</small></p>
					<a href="" class="[ button button--primary button--hollow ]">agregar</a>
				</fieldset>
			</div>
		</section>

	</form>

<?php include_once "footer.php" ?>