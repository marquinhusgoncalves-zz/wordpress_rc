<div class="banner banner-aempresa">
	<img src="<?php bloginfo('stylesheet_directory');?>/img/banners/banner_home.jpg" alt="">
</div>

<div class="container">
	<div class="col-sm-12">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-sm-6 list-post-category">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="post-category">
						<p><?php echo wp_trim_words( get_the_content(), 25 ); ?></p>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php _e( '<i class="fa fa-hand-o-right"></i> Clique aqui e leia mais' ); ?>
						</a>
					</div>  
				</div>
			<?php endwhile; ?>
			<?php pagination(); ?>
		<?php else : ?>
			<p> Nenhum artigo encontrado </p>
		<?php endif; ?>

	</div>

</div>