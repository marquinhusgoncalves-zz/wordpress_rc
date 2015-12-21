<footer>
	<div class="footer-barra"></div>
	<div class="container">
		<div class="col-sm-12 col-md-4">		
			<img class="logo-footer" src="<?php bloginfo('stylesheet_directory');?>/img/logo-rodape.png" alt="Logo RC Consulting">
		</div>
		<div class="col-sm-12 col-md-4">
			<div class="menu_footer"><?php wp_nav_menu(''); ?></div>
		</div>
		<div class="col-sm-12 col-md-4">
			<a style="padding: 6px 17px" class="btn btn-default" href="#" role="button"><i class="fa fa-facebook fa-footer"></i></a>
			<a class="btn btn-default" href="#" role="button"><i class="fa fa-twitter fa-footer"></i></a>
			<a class="btn btn-default" href="#" role="button"><i class="fa fa-linkedin fa-footer"></i></a>
			<a class="btn btn-default" href="#" role="button"><i class="fa fa-youtube fa-footer"></i></a>
			<p class="endereco">Av. Imperatriz Leopoldina, 454 - Sala 33</p>
			<p>CEP 09770-272 - B. Nova Petrópolis - S.B.C</p>
			<p>Fone (11) 4330 4442 | 3423 1361</p>
			
		</div>
		<a class="footer-link" href="contato@rcconsulting.eng.br">contato@rcconsulting.eng.br</a>
	</div>
</footer>

<div class = "scroll-to-top"><i class = "fa fa-chevron-up"></i></div><!-- .scroll-to-top -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/js/rc_theme.js"></script>

<?php wp_footer(); ?>

</body>
</html>