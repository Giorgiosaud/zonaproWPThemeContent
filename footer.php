<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package Zonapro
 * @subpackage Zonapro
 * @since Zonapro 1.0
 */
?>
</div>
<!-- /wrapper -->
<!-- footer -->
<footer class="footer" role="contentinfo">

	<!-- copyright -->
	<div class="contenedor">
		<div class="copyrightFooter col-xs-12 col-md-6">
			<p><?php echo get_theme_mod('footer_text_copyright');?></p>
		</div>
		<div class="infoFooter col-xs-12 col-md-6">
			<p class="col-xs-12 col-md-4"><span class="glyphicon glyphicon-earphone"></span><?php echo get_theme_mod('footer_text_telefono');?></p>
			<p class="col-xs-12 col-md-4"><span class="glyphicon glyphicon-envelope"></span><?php echo get_theme_mod('footer_text_correo');?></p>
			<p class="col-xs-12 col-md-4"><span class="glyphicon glyphicon-globe"></span><?php echo get_theme_mod('footer_text_ubicacion');?></p>	
		</div>
	</div>
	<!-- /copyright -->
	<div class="clearfix"></div>

	<div class="franjaInferior"></div>




	<?php wp_footer(); ?>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-50162067-1', 'zonapro.net');
		ga('send', 'pageview');

	</script>
</footer>
<!-- /footer -->
</body>
</html>
