<?php 
/*
Template Name: Pagina Contacto
 */ 	
// chequear si existe la variable post
if(isset($_POST['enviado'])):
	if(trim($_POST['nombre']) === ''):
		$nameError = 'Olvidaste Colocar Tu nombre.';
	$hasError = true;
	else:
		$name = trim($_POST['nombre']);
	endif;
	if(trim($_POST['email']) === ''):
		$emailError = 'Olvidaste escribir tu email.';
	$hasError = true;
	elseif(!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+.[A-Z]{2,4}$", trim($_POST['email']))):
		$emailError = 'Escribistes una direccion de correo errada.';
	$hasError = true;
	else:
		$email = trim($_POST['email']);
	endif;
	if(trim($_POST['mensaje']) === ''):
		$commentError = 'Olvidaste lo que nos ibas a decir.';
	$hasError = true;
	else:
		// Revisa que no hallan elementos extraños en el Area de Texto
		if(function_exists('stripslashes')):
			$mensaje = stripslashes(trim($_POST['mensaje']));
		else:
			$mensaje = trim($_POST['mensaje']);
		endif;
		endif;
		if(!isset($hasError)):
			$emailTo = get_theme_mod('correoElectronico');
		$ccemail=get_theme_mod('correoElectronicoCopias');
		$subject = 'Contactado por '.$name;
		$sendCopy = trim($_POST['sendCopy']);
		$body = "
		<html>
		<body>
			Nombre: ".$name." <br/> 
			Correo Electronico: ".$email."
			Mensaje:".$mensaje."
		</body>
		</html>";
		$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
		$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		// Cabeceras adicionales
		$cabeceras .= 'To: zonapro.net,C.A. <info@zonapro.net>' . "\r\n";
		$cabeceras .= 'From: zonapro.net <web@zonapro.net>' . "\r\n";
		if($ccemail!=''):
			$cabeceras .='Cc: '.$ccemail;
		if($sendCopy == true):
			$cabeceras.=",".$email;
		endif;
		$cabeceras.="\r\n";
		else:
			$cabeceras .='Cc: '.$email."\r\n";
		endif;
		mail($emailTo, $subject, $body, $cabeceras);
		$emailSent = true;
		endif;
		endif;
		get_header(); 
		if(isset($emailSent) && $emailSent == true):
			$display="agradecimiento";
		else:
			$display="formulario";
		endif;
		?>
		<main role="main" class="main">
			<div class="loading">
				<div class="bubblingG">
					<span id="bubblingG_1"></span>
					<span id="bubblingG_2"></span>
					<span id="bubblingG_3"></span>
				</div>
			</div>
			<!-- section -->
			<div class="container-fluid text-center loading hidden">Cargando</div>
			<section id="contenidoPrincipal">
				<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
					<div class="tituloDeSeccion col-xs-12 text-center"> <?php the_title( );?></div>
					<div class="clearfix"></div>
					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php get_template_part('contacto', $display );?>
						<?php the_content(); ?>
						<?php edit_post_link(); ?>
					</article><!-- /article -->
				<?php endwhile; ?>
			<?php else: ?>
				<!-- article -->
				<article>

					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

				</article>
				<!-- /article -->

			<?php endif; ?>

		</section>

		<!-- /section -->
	</main>


	<?php get_footer(); ?>
