<footer>
	<div class="container">
		<div class="col-sm-12 col-md-4">		
			<img class="logo-footer" src="<?php bloginfo('stylesheet_directory');?>/img/logo.png" alt="logo rc consulting">
			<p>Soluções em Engenharia</p>
			<p>Segurança do Trabalho</p>
			<p>Proteção Contra Incêndios</p>
			<p>&copy; <?php echo date('Y'); ?> | <?php bloginfo('name'); ?></p>
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
			<a style="color: #fff" href="contato@rcconsulting.eng.br">contato@rcconsulting.eng.br</a>
		</div>
	</div>
</footer>

<div class = "scroll-to-top"><i class = "fa fa-chevron-up"></i></div><!-- .scroll-to-top -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/js/rc_theme.js"></script>
<!-- Não abrir link no menu -->
<script type="text/javascript">jQuery(function($) {$("li#menu-item-44").children("a").attr('href', "#");});</script>

<?php wp_footer(); ?>

</body>
</html>