<?php get_header(); ?>

<div class="banner banner-treinamentos">
	<img src="<?php bloginfo('stylesheet_directory');?>/img/banners/banner_treinamento.jpg" alt="Banner RC Consulting">
</div>
<div class="container treinamento">
	<div class="treinamento-box">
		<div class="titulo-treinamento">
			<img src="<?php bloginfo('stylesheet_directory');?>/img/icontreinamento2.png" alt="Ícone treinamento">
			<h2>Treinamentos On-line e Presencial</h2>
		</div>		
		<h3>Nosso objetivo é ministrar treinamentos, cursos e palestras que ofereçam a melhoria da eficácia dos profissionais e dos métodos de trabalho.</h3>
		<h5><strong>Assuntos:</strong></h5>
		<ul>
			<li>Segurança do Trabalho, Proteção Contra Incêndio e Motivacional</li>
		</ul>
		<h5><strong>Métodos de Atuação:</strong></h5>
		<ul>
			<li><strong>In Company:</strong> Treinamento presencial  ministrado por profissionais.</li>
			<li><strong>EAD (ensino à distância):</strong> Cursos exclusivos realizados on-line, ministrados através de plataforma reconhecida e utilizada em mais de 200 países.</li>
		</ul>
		<div class="treinamento-text">
			<p>Acesse e conheça todos os nossos cursos on-line exclusivos ministrados em plataforma mundialmente reconhecida em mais de 200 países.<br>
				Clique no ícone e acesse <i class="fa fa-hand-o-right"></i></p>
				<a href="http://www.rcconsulting.eng.br/moodle/" target="_blank"><img src="<?php bloginfo('stylesheet_directory');?>/img/iconmoodle.png" alt="Ícone Moodle"></a>
		</div>
		<form class="form-treinamento" method="post" action="/treinamento.php">
		<fieldset>
		<legend>Baixe a apostila do seu curso:</legend>
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
			<div class="form-treinamento-btn">
				<button type="reset" class="btn btn-default btn-padrao"><i class="fa fa-trash-o"></i> Limpar</button>
				<button type="submit" class="btn btn-default btn-padrao"><i class="fa fa-download"></i> Baixar Apostila</button>
			</div>
			</fieldset>
		</form>
	</div>
</div>

<?php get_footer(); ?>
