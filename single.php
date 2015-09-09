<?php get_header(); ?>

<div class="banner banner-aempresa">
	<img src="<?php bloginfo('stylesheet_directory');?>/img/banners/banner_home.jpg" alt="">
</div>

<div class="container">
	<div class="col-sm-12">
		<div class="blog-post">
			<?php if(have_posts()) :while (have_posts()) : the_post(); ?>

				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_content(); ?>

			<?php endwhile;

			else :
				echo '<p> Nenhum artigo encontrado </p>';
			endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>