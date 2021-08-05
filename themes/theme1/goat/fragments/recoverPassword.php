<div class="row mt-5">
	<div class="col-3"></div>
	<div class="col-6">
		<form id="recoverPasswordForm" action="<?= $router->route('goat.request.recoverPassword'); ?>" method="POST" data-type="JSON">
			<input type="text" name="email" placeholder="Email recuperação" autofocus="" id="email" class="form-control">
			<button type="submit" class="btn btn-primary btn-block mt-3">Enviar</button>
			<div class="load text-center"></div>
		</form>

	</div>
	<div class="col-3"></div>
</div>