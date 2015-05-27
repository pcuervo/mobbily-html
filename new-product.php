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
		<section class="[  ]">
			<div class="[ padding ]">
				<div class="[ text-center ]">
					<h3 class="[ no-margin ]">Empieza a vender</h3>
				</div>
			</div>
			<div class="[ wrapper ]">
				<h3 class="[ margin-bottom ][ color-primary ]"><small>Describe tu artículo</small></h3>
			</div>
			<article class="[ screen-1 ]">
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
				</div><!-- wrapper -->
			</article>
			<article class="[ images ][ screen-2 ]">
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
			</article>
			<article class="[ ][ screen-3 ]">
				<div class="[ wrapper ]">
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
							<option href="#" value="nuevo" >nuevo</option>
							<option href="#" value="bueno" >bueno</option>
							<option href="#" value="satisfactorio" >satisfactorio</option>
							<option href="#" value="gastado" >gastado</option>
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
							<option href="#" value="nuevo" >nuevo</option>
							<option href="#" value="bueno" >bueno</option>
							<option href="#" value="satisfactorio" >satisfactorio</option>
							<option href="#" value="gastado" >gastado</option>
						</select>
					</fieldset>
					<fieldset class="[ margin-bottom ]">
						<label class="[ block xmall-12 ]" for="">Material<span class="[ color-primary ]">*</span></label>
						<select class="[ padding ][ text-center ]">
							<option href="#" value="nuevo" >nuevo</option>
							<option href="#" value="bueno" >bueno</option>
							<option href="#" value="satisfactorio" >satisfactorio</option>
							<option href="#" value="gastado" >gastado</option>
						</select>
					</fieldset>
					<fieldset class="[ margin-bottom ]">
						<label class="[ block xmall-12 ]" for="">Edad<span class="[ color-primary ]">*</span></label>
						<select class="[ padding ][ text-center ]">
							<option href="#" value="nuevo" >nuevo</option>
							<option href="#" value="bueno" >bueno</option>
							<option href="#" value="satisfactorio" >satisfactorio</option>
							<option href="#" value="gastado" >gastado</option>
						</select>
					</fieldset>
					<fieldset class="[ margin-bottom ]">
						<label class="[ block xmall-12 ]" for="">Color<span class="[ color-primary ]">*</span></label>
						<div class="[ row ]">
							<div class="[ columna xmall-2 ][ margin-bottom--small ]">
								<div class="[ bg-black ][ color-chip color-chip-selected ]">
								</div>
							</div>
							<div class="[ columna xmall-2 ][ margin-bottom--small ]">
								<div class="[ bg-grey ][ color-chip ]">
								</div>
							</div>
							<div class="[ columna xmall-2 ][ margin-bottom--small ]">
								<div class="[ bg-brown ][ color-chip ]">
								</div>
							</div>
							<div class="[ columna xmall-2 ][ margin-bottom--small ]">
								<div class="[ bg-purple ][ color-chip ]">
								</div>
							</div>
							<div class="[ columna xmall-2 ][ margin-bottom--small ]">
								<div class="[ bg-blue ][ color-chip ]">
								</div>
							</div>
							<div class="[ columna xmall-2 ][ margin-bottom--small ]">
								<div class="[ bg-green ][ color-chip ]">
								</div>
							</div>
							<div class="[ columna xmall-2 ][ margin-bottom--small ]">
								<div class="[ bg-yellow ][ color-chip ]">
								</div>
							</div>
							<div class="[ columna xmall-2 ][ margin-bottom--small ]">
								<div class="[ bg-orange ][ color-chip ]">
								</div>
							</div>
							<div class="[ columna xmall-2 ][ margin-bottom--small ]">
								<div class="[ bg-red ][ color-chip ]">
								</div>
							</div>
							<div class="[ columna xmall-2 ][ margin-bottom--small ]">
								<div class="[ bg-wheat ][ color-chip ]">
								</div>
							</div>
							<div class="[ columna xmall-2 ][ margin-bottom--small ]">
								<div class="[ bg-silver ][ color-chip ]">
								</div>
							</div>
						</div>
					</fieldset>
					<fieldset class="[ margin-bottom ]">
						<label class="[ block xmall-12 ]" for="">Textura<span class="[ color-primary ]">*</span></label>
						<div class="[ row ]">
							<div class="[ columna xmall-2 ][ margin-bottom--small ]">
								<div class="[ bg-black ][ color-chip color-chip-selected ]">
								</div>
							</div>
							<div class="[ columna xmall-2 ][ margin-bottom--small ]">
								<div class="[ bg-grey ][ color-chip ]">
								</div>
							</div>
						</div>
					</fieldset>
					<fieldset class="[ margin-bottom ]">
						<label class="[ block xmall-12 ]" for="">Este producto se vende como:<span class="[ color-primary ]">*</span></label>
						<input type="radio" name="tipo" value="individual"> Artículo individual <br />
						<input type="radio" name="tipo" value="conjunto"> En conjunto
					</fieldset>
					<fieldset class="[ margin-bottom ]">
						<label class="[ block xmall-12 ]" for="">Haz click en las características que tu producto cumpla:</label>
						<input type="checkbox" name="characteristics" value="antiquity"> Antigüedad<br />
						<input type="checkbox" name="characteristics" value="kids"> Mueble para niños<br />
						<input type="checkbox" name="characteristics" value="less-than-5"> Pesa menos de 5 kilos<br />
						<input type="checkbox" name="characteristics" value="scratches"> Tiene golpes o rayones de más de 2 cms.
					</fieldset>
					<fieldset class="[ margin-bottom ]">
						<label class="[ block xmall-12 ]" for="">Este artículo a estado expuesto a:</label>
						<input type="checkbox" name="exposed-to" value="dog"> Perro<br />
						<input type="checkbox" name="exposed-to" value="cat"> Gato<br />
						<input type="checkbox" name="exposed-to" value="cigarrette"> Cigarro
					</fieldset>
					<fieldset class="[ margin-bottom ]">
						<label class="[ block xmall-12 ]" for="">Cantidad<span class="[ color-primary ]">*</span></label>
						<input class="[ block ][ xmall-12 ]" type="number" name="cuantity">
					</fieldset>
					<fieldset class="[ margin-bottom ]">
						<label class="[ block xmall-12 ]" for="">Precio original<span class="[ color-primary ]">*</span></label>
						<input class="[ block ][ xmall-12 ]" type="number" name="original-price" value="$">
					</fieldset>
					<fieldset class="[ margin-bottom ]">
						<label class="[ block xmall-12 ]" for="">Precio final<span class="[ color-primary ]">*</span></label>
						<input class="[ block ][ xmall-12 ]" type="number" name="final-price" value="$">
					</fieldset>
					<fieldset class="[ margin-bottom ]">
						<input type="checkbox" name="exposed-to" value="cat"> <span class="[ color-primary ]">Solicitar sello cxm</span><br />
						<span class="[ color-primary ]">*</span> Actualmente sólo validamos en las zonas de: Polanco, Roma y Condesa.
					</fieldset>
				</div><!-- wrapper -->
			</article>
		</section>
	</form>

	<artcle class="[ screen-4 ]">
		<div class="[ wrapper ]">
			<h3 class="[ text-center ]">Datos personales</h3>
			<h3 class="[ text-center ][ color-primary ][ margin-bottom--small ]"><small>Dirección de recolección</small></h3>
			<p class="[ margin-bottom--large ]">¿Ya tienes una cuenta? <a href="login.php">inicia aquí</a></p>
			<fieldset class="[ margin-bottom ]">
				<label class="[ block xmall-12 ]" for="name">Nombre completo <span class="[ color-primary ]">*</span></label>
				<input class="[ block ][ xmall-12 ]" type="text" value="">
			</fieldset>
			<fieldset class="[ margin-bottom ]">
				<label class="[ block xmall-12 ]" for="name">Calle y número <span class="[ color-primary ]">*</span></label>
				<input class="[ block ][ xmall-12 ]" type="text" value="">
			</fieldset>
			<fieldset class="[ margin-bottom ]">
				<label class="[ block xmall-12 ]" for="name">Número interior</label>
				<input class="[ block ][ xmall-12 ]" type="text" value="">
			</fieldset>
			<fieldset class="[ margin-bottom ]">
				<label class="[ block xmall-12 ]" for="name">Código postal</label>
				<input class="[ block ][ xmall-12 ]" type="text" value="">
			</fieldset>
			<fieldset class="[ margin-bottom ]">
				<label class="[ block xmall-12 ]" for="name">Delegación o municipio</label>
				<input class="[ block ][ xmall-12 ]" type="text" value="">
			</fieldset>
			<fieldset class="[ margin-bottom ]">
				<label class="[ block xmall-12 ]" for="">Colonia <span class="[ color-primary ]">*</span></label>
				<select class="[ padding ][ text-center ]">
					<option href="#" value="nuevo" >Una colonia</option>
					<option href="#" value="bueno" >Otra colonia</option>
				</select>
			</fieldset>
			<fieldset class="[ margin-bottom ]">
				<label class="[ block xmall-12 ]" for="name">Ciudad <span class="[ color-primary ]">*</span></label>
				<input class="[ block ][ xmall-12 ]" type="text" value="">
			</fieldset>
			<fieldset class="[ margin-bottom ]">
				<label class="[ block xmall-12 ]" for="name">Entre la calle <span class="[ color-primary ]">*</span></label>
				<input class="[ block ][ xmall-12 ]" type="text" value="">
			</fieldset>
			<fieldset class="[ margin-bottom ]">
				<label class="[ block xmall-12 ]" for="name">y la calle <span class="[ color-primary ]">*</span></label>
				<input class="[ block ][ xmall-12 ]" type="text" value="">
			</fieldset>
			<fieldset class="[ margin-bottom ]">
				<label class="[ block xmall-12 ]" for="">¿Cuenta con elevador?<span class="[ color-primary ]">*</span></label>
				<input type="radio" name="tipo" value="si"> Sí <br />
				<input type="radio" name="tipo" value="no"> No
			</fieldset>
			<fieldset class="[ margin-bottom --large]">
				<label class="[ block xmall-12 ]" for="">¿Permitir al comprador recoger el producto?<span class="[ color-primary ]">*</span></label>
				<input type="radio" name="tipo" value="si"> Sí <br />
				<input type="radio" name="tipo" value="no"> No
			</fieldset>
			<h3 class="[ text-center ][ color-primary ][ margin-bottom--small ]"><small>Fecha de recolección</small></h3>
			<p class="[ margin-bottom--large ]">Define 3 fechas distintas para la recolección</p>
			<div class="[ row ][ margin-bottom--large ]">
				<fieldset class="[ columna xmall-6 ][ margin-bottom ]">
					<label class="[ block xmall-12 ]" for="name">Fecha 1 <span class="[ color-primary ]">*</span></label>
					<input class="[ block ][ xmall-12 ]" type="text" value="DD/MM/AAAA">
				</fieldset>
				<fieldset class="[ columna xmall-6 ][ margin-bottom ]">
					<label class="[ block xmall-12 ]" for="name">Horario <span class="[ color-primary ]">*</span></label>
					<select name="" id="">
						<option value="0600">6:00 AM</option>
					</select>
				</fieldset>
				<div class="[ clear ]"></div>
				<fieldset class="[ columna xmall-6 ][ margin-bottom ]">
					<label class="[ block xmall-12 ]" for="name">Fecha 2 <span class="[ color-primary ]">*</span></label>
					<input class="[ block ][ xmall-12 ]" type="text" value="DD/MM/AAAA">
				</fieldset>
				<fieldset class="[ columna xmall-6 ][ margin-bottom ]">
					<label class="[ block xmall-12 ]" for="name">Horario <span class="[ color-primary ]">*</span></label>
					<select name="" id="">
						<option value="0600">6:00 AM</option>
					</select>
				</fieldset>
				<div class="[ clear ]"></div>
				<fieldset class="[ columna xmall-6 ][ margin-bottom ]">
					<label class="[ block xmall-12 ]" for="name">Fecha 3 <span class="[ color-primary ]">*</span></label>
					<input class="[ block ][ xmall-12 ]" type="text" value="DD/MM/AAAA">
				</fieldset>
				<fieldset class="[ columna xmall-6 ][ margin-bottom ]">
					<label class="[ block xmall-12 ]" for="name">Horario <span class="[ color-primary ]">*</span></label>
					<select name="" id="">
						<option value="0600">6:00 AM</option>
					</select>
				</fieldset>
			</div>
			<h3 class="[ text-center ][ color-primary ][ margin-bottom--small ]"><small>Estimación por artículo individual</small></h3>
			<fieldset class="[ margin-bottom ]">
				<label class="[ margin-bottom--large ]">Tu precio</label>
				<h4 class="[ color-primary ]">$00.00</h4>
			</fieldset>
			<fieldset class="[ margin-bottom ]">
				<label class="[ margin-bottom--large ]">Comisión de Mobbily <span class="color-primary">20%</span></label>
				<h4 class="[ color-primary ]">$00.00</h4>
			</fieldset>
			<fieldset class="[ margin-bottom ]">
				<label class="[ margin-bottom--large ]">Ganancia</label>
				<h4 class="[ color-primary ]">$00.00</h4>
			</fieldset>
		</div><!-- wrapper -->
	</artcle>

<?php include_once "footer.php" ?>