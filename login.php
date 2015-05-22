<?php include_once "header.php" ?>
	<section class="[ login ]">
		<div class="[ padding ][ text-center ][ border ]">
			<h3 class="[ no-margin ][ uppercase ]">Login</h3>
		</div>
		<div class="[ wrapper ]">
			<article class="[ facebook-login ]">
				<div class="[ text-center ][ padding ]">
					<a href="" class="[ button button--primary ]">
						<i class="[ icon-facebook icon-menu ]"></i> iniciar sesión con facebook
					</a>
				</div>
			</article>
			<article class="[ email-login ]">
				<form action="">
					<fieldset class="[ margin-bottom ]">
						<label class="[ block xmall-12 ]" for="email">Correo electrónico <span class="[ color-primary ]">*</span></label>
						<input class="[ block xmall-12 ]" type="text">
					</fieldset>
					<fieldset class="[ margin-bottom ]">
						<label class="[ block xmall-12 ]" for="email">Contraseña <span class="[ color-primary ]">*</span></label>
						<input class="[ block xmall-12 ]" type="text">
					</fieldset>
					<fieldset class="[ text-center ">
						<button class="[ button button--hollow button--primary ]" type="submit">iniciar sesión</button>
					</fieldset>
				</form>
			</article>
			<article>
				<div class="[ padding ][ text-center ][ ]">
					<p class="[ no-margin ]">¿No tienes una cuenta aún?</p>
					<a href="create-account.php">Registrate aquí</a>
				</div>
			</article>
		</div><!-- wrapper -->


	</section><!-- login -->


<?php include_once "footer.php" ?>