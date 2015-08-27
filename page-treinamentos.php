<?php get_header(); ?>

<div class="banner">
	<img src="<?php bloginfo('stylesheet_directory');?>/img/banners/banner_treinamento.jpg" alt="Banner treinamento">
</div>
<div class="container treinamento">
	<div class="treinamento-box">
		<div class="titulo-treinamento">
			<img src="<?php bloginfo('stylesheet_directory');?>/img/icontreinamento2.png" alt="Ícone treinamento">
			<h2>Treinamentos On-line e Presencial</h2>
		</div>	
		<div class="treinamento-text">
			<p>Acesse e conheça todos os nossos cursos on-line exclusivos ministrados em plataforma mundialmente reconhecida em mais de 200 países.<br>
				Clique no ícone e acesse <i class="fa fa-hand-o-right"></i></p>
				<a href="http://www.rcconsulting.eng.br/moodle/"><img src="<?php bloginfo('stylesheet_directory');?>/img/iconmoodle.png" alt="Ícone Moodle"></a>
		</div>
		<form class="form-treinamento">
			<div class="form-group">
				<label for="">Baixe a apostila do seu curso:</label>
				<input type="text" class="form-control" placeholder="Text input">
			</div>
			<div class="form-treinamento-btn">
				<button type="clear" class="btn btn-default btn-treinamento"><i class="fa fa-trash-o"></i> Limpar</button>
				<button type="submit" class="btn btn-default btn-treinamento"><i class="fa fa-download"></i> Baixar Apostila</button>
			</div>
		</form>
	</div>
</div>

<?php get_footer(); ?>