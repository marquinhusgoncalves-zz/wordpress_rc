<?php get_header(); ?>

<div class="banner banner_empresa">
	<img src="<?php bloginfo('stylesheet_directory');?>/img/banners/banner_home.jpg" alt="">
</div>

<div class="container">
	<div class="col-md-8 col-sm-12 linha">
		<?php if(have_posts()) :while (have_posts()) : the_post(); ?>
			<div>
				<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div style="margin-top: -10px"><?php the_time('j \d\e F \d\e Y'); ?></div>
				<div style="padding: 10px 0">
					<?php the_excerpt(); ?>
				</div>   
			</div>
		<?php endwhile;

		else :
			echo '<p> Nenhum artigo encontrado </p>';

		endif; ?>
	</div>
</div>

<?php get_footer(); ?>