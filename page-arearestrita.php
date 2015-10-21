<?php get_header(); ?>

<div class="banner banner-clientes">
	<img src="<?php bloginfo('stylesheet_directory');?>/img/banners/banner_area.jpg" alt="Banner RC Consulting">
</div>
<div class="container">
	<div class="col-sm-12 arearestrita-download">
		<h3>Área para Downloads e Uploads</h3>
		<div class="col-md-6">
			<form method="post" action="/sites/rc/download.php" >
				<fieldset>
					<legend>Download</legend>
					<div class="form-group">
						<label for="dia">Dia</label>
						<input type="text" name="dia" id="dia" size="3" maxlength="2" tabindex="1">
						<label for="mes">Mês</label>
						<input type="text" name="mes" id="mes" size="3" maxlength="2" tabindex="2">
						<label for="ano">Ano</label>
						<input type="text" name="ano" id="ano" size="5" maxlength="4" tabindex="3">
					</div>
					<div class="form-group">
						<label for="code">Código</label>
						<input type="text" name="code" id="code" size="15" tabindex="4">
					</div>
					<button type="reset" class="btn btn-default">Limpar</button>
					<button type="submit" class="btn btn-default">Download</button>

				</fieldset>
			</form>
		</div>
		<div class="col-md-6">
			<form method="post" action="/sites/rc/upload.php" enctype="multipart/form-data">
				<fieldset>
					<legend>Upload</legend>
					<div class="form-group">
						<label for="arquivo">Selecione o arquivo</label>
						<input name="arquivo" type="file" id="arquivo">
					</div>
					<button type="reset" class="btn btn-default">Limpar</button>
					<button type="submit" class="btn btn-default">Enviar</button>
				</fieldset>
			</form>
		</div>
	</div>
	<div class="col-sm-12 arearestrita-webmail">
		<h3>WebMail</h3>
		<div class="arearestrita-webmail-box">
			<img src="<?php bloginfo('stylesheet_directory');?>/img/logo-webmail.png" alt="Logo WebMail">
			<h3>webmail.rcconsulting.com.br</h3>
		</div>
	</div>
</div>
<?php get_footer(); ?>