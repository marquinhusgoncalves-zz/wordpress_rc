<?php get_header(); ?>

<div class="banner banner_contato">
	<img src="<?php bloginfo('stylesheet_directory');?>/img/banners/banner_contato.jpg" alt="">
</div>
<?php

if($_POST[sent]){
	$error = "";
	if(!trim($_POST[your_name])){
		$ph_name = "Por favor, coloque seu nome";
	}
	if(!filter_var(trim($_POST[your_email]),FILTER_VALIDATE_EMAIL)){
		$ph_email = "Coloque um e-mail válido";
	}
	if(!trim($_POST[your_subject])){
		$ph_subject = "Seria bom saber o assunto";
	}
	if(!$error){
		$email = wp_mail(get_option("admin_email"),trim($_POST[your_name])." enviou uma mensagem do site ".get_option("blogname"),"Nome: " . stripslashes(trim($_POST[your_name])) . "\r\nMensagem: " . stripslashes(trim($_POST[your_message])),"From: ". trim($_POST[your_name])." <".trim($_POST[your_email]).">\r\nReply-To:".trim($_POST[your_email]));
	}
}
get_header(); ?>

<div class="container contato">

	<?php if($email){ ?>
	<div class="alert alert-success" role="alert" data-dismiss="alert">
		<a href="#" class="alert-link">Muito obrigado! Seu e-mail foi enviado com sucesso.</a>
	</div>
	<?php } else { if($error) { ?>
	<div class="alert alert-warning" role="alert" data-dismiss="alert">
		<a href="#" class="alert-link">Precisa preencher por completo.</a>
	</div>
	<?php echo $error; ?>

	<?php } else { the_content(); } ?>

	<?php if( $post_response ) : ?>
		<div class = "alert alert-<?php echo $post_response->status ?>">
			<?php echo $post_response->message ?>
		</div>
	<?php endif ?>

	<form action="<?php the_permalink(); ?>" method="post">
		<input type="hidden" name="sent" id="sent" value="1" />
		<div class="col-md-6 col-md-offset-3">
			<div class="form-group">
				<input type="text" class="form-control" name="your_name" id="your_name" value="<?php echo $_POST[your_name];?>">
				<label for="nome">NOME</label>
			</div>
			<div class="form-group">
				<input type="email" class="form-control" name="your_email" id="your_email" value="<?php echo $_POST[your_email];?>">
				<label for="email">EMAIL</label>
			</div>
			<div>
				<textarea class="form-control" rows="3" name="your_message" id="your_message"><?php echo stripslashes($_POST[your_message]); ?></textarea>
				<label for="mensagem">MENSAGEM</label>
			</div>
			<button type="submit" class="btn btn-default btn-from"><i class="fa fa-paper-plane-o"></i> ENVIAR </button>
		</div>
	</form>

	<?php } ?>
</div>
<div class="container" id="map-canvas"></div>


<?php get_footer(); ?>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script> 
<script type="text/javascript">

	function initialize() {
		var myLatlng = new google.maps.LatLng(-23.7050083, -46.5472141);
		var mapOptions = {
			zoom: 18,
			center: myLatlng,
			disableDefaultUI: false,
			scrollwheel: false,
			draggable: false
		}
		var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			title: 'RC Consulting'
		});

		var styles = [
		{
			stylers: [
			{ hue: "#6C1F1F" },
			{ saturation: -20 }
			]
		},{
			featureType: "road",
			elementType: "geometry",
			stylers: [
			{ lightness: 100 },
			{ visibility: "simplified" }
			]
		},{
			featureType: "road.local",
			elementType: "labels",
		}
		];

		map.setOptions({styles: styles});
	}

	google.maps.event.addDomListener(window, 'load', initialize);

</script>
<?php get_footer(); ?>