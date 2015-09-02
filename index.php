<?php get_header(); ?>

<div class="banner banner_home">
	<img src="<?php bloginfo('stylesheet_directory');?>/img/banners/banner_home.jpg" alt="">
</div>

<section class="container">
	<div class="wrap col-md-12">
		<div class="first_column col-md-6">
			<div class="col-md-12">
				<h2>notícias</h2>
				<?php query_posts('category_name=noticias&showposts=1'); ?>
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>

					<h4><?php the_title(); ?></h4>
					<div style="width: 100%; height: 230px; background: url(<?php echo catch_that_image() ?>) no-repeat; background-size: 100%"></div>
					<div class="child"><?php the_excerpt(); ?></div>

				<?php endwhile; ?>
				<?php else : ?>
				<?php endif; ?>
			</div>
		</div><!-- primeira coluna -->
		<div class="second_column col-md-6">
			<div class="children_column col-md-6">
				<h2>cursos & treinamentos</h2>
				<div style="background-color: #d4d9dc; padding: 0 15px; height: auto; min-height: 180px; position: relative;">
					<?php query_posts('category_name=cursosetreinamentos&showposts=1'); ?>
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>

						<h4><?php the_title(); ?></h4>
						<?php the_excerpt(); ?>

					<?php endwhile; ?>
					<?php else : ?>
					<?php endif; ?>
				</div>	
			</div>
			<div class="children_column col-md-6">
				<h2>atuação</h2>
				<div style="background-color: #e6d4d8; padding: 0 15px; height: auto; min-height: 180px; position: relative;">
					<?php query_posts('category_name=atuacao&showposts=1'); ?>
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>

						<h4><?php the_title(); ?></h4>
						<?php the_excerpt(); ?>

					<?php endwhile; ?>
					<?php else : ?>
					<?php endif; ?>
				</div>
			</div>
		</div><!-- segunda coluna -->
	</div><!-- wrap -->
</section>

<div class="container">
  <div class="all col-sm-6 col-md-3">
	<div class="one thumbnail">
		<div class="caption">
			<img src="<?php bloginfo('stylesheet_directory');?>/img/iconeletrica.png" alt="">
			<h3>Engenharia <br>Elétrica</h3>
			<p>A legislação vigente obriga que as empresas sejam portadoras de um verdadeiro sistema de gestão para as instalações elétricas e o desenvolvimento de atividades nestes equipamentos. Esta sistemática compreende requisitos técnicos e administrativo.</p>
			<a class="btn btn-default" href="<?php bloginfo('url'); ?>/servicos" role="button">saiba mais</a>
		</div>
	</div>
  </div>
  <div class="all col-sm-6 col-md-3">
	<div class="two thumbnail">
		<div class="caption">
			<img src="<?php bloginfo('stylesheet_directory');?>/img/icontrabalho.png" alt="">
			<h3>Engenharia <br>de Segurança <br>do Trabalho</h3>
			<p>Os cuidados pela segurança nas atividades laborais, além das responsabilidades e ações definidas legalmente, deve ser um aliado da produtividade e performance empresarial.</p>
			<a class="btn btn-default" href="<?php bloginfo('url'); ?>/servicos" role="button">saiba mais</a>
		</div>
	</div>
  </div>
  <div class="all col-sm-6 col-md-3">
	<div class="three thumbnail">
		<div class="caption">
			<img src="<?php bloginfo('stylesheet_directory');?>/img/iconincendio.png" alt="">
			<h3>Engenharia de <br>Proteção Contra <br>Incêndios</h3>
			<p>Cada vez mais a continuidade	produtiva passa a ser primordial para as empresas. Para atingir este conceito, a aplicação de sistemas de proteção e prevenção de incêndios eficazes são de suma importância.</p>
			<a class="btn btn-default" href="<?php bloginfo('url'); ?>/servicos" role="button">saiba mais</a>
		</div>
	</div>
  </div>
  <div class="all col-sm-6 col-md-3">
	<div class="four thumbnail">
		<div class="caption">
			<img src="<?php bloginfo('stylesheet_directory');?>/img/icontreinamento.png" alt="">
			<h3>Treinamentos <br>Empresariais</h3>
			<p>O sucesso da empresa moderna está calçado na formação e treinamento dos recursos humanos. Pensando nisso, desenvolvemos treinamentos específicos sobre os mais diversos temas.</p>
			<a class="btn btn-default" href="<?php bloginfo('url'); ?>/servicos" role="button">saiba mais</a>
		</div>
	</div>
  </div>
</div>

<?php get_footer(); ?>