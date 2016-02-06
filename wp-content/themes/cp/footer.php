		<!--  -->

<div class="deco3">
	<footer class="container  ">
		<div class="row">
			<div class="col-md-6">
				<h1>CAROLINA PARSONS©</h1> <p>Todos los derechos reservados 2016 </p>
			</div>	
			<div class="col-md-6">
				<ul class="socialbuttons social-footer">
					<li class="facebook"><a href="https://www.facebook.com/CarolinaParsonsOficial" target="_blank">Facebook</a></li>
					<li class="twitter"><a href="https://twitter.com/caroparsons" target="_blank">twitter</a></li>
					<li class="instant"><a href="https://instagram.com/carolinaparsons/" target="_blank">Instagram</a></li>
				</ul>
			</div>
		</div>
	</footer>
</div>		
		<?php wp_footer(); ?>
		<script type="text/javascript">
			$(function() {
			     $("img.lazy").lazyload({
			         effect : "fadeIn"
			     });

			  });
		</script>


	<!-- JS -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>

		<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

		
		<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/libs/fancybox/jquery.fancybox.pack.js"></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/sliderpro-min.js"></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.flex-images.min.js"></script>

				<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.lazyload.js"></script>
<!-- LOAD DE IMAGENES 
		<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/social2.js"></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/social3.js"></script>
		<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/scripts.js"></script>
-->
		
			<?php if ( is_home() ) { ?>
				<script type="text/javascript">
					$(document).ready(function($) {
						$('#slider').sliderPro({
							width: '500px',
							height: '500px',
							aspectRatio: 1,
							visibleSize: '100%',
							//forceSize: 'fullWidth'
							slideDistance :0,   
						});

						// instantiate fancybox when a link is clicked
						$('#slider .sp-image').parent('a').on('click', function(event) {
							event.preventDefault();

							// check if the clicked link is also used in swiping the slider
							// by checking if the link has the 'sp-swiping' class attached.
							// if the slider is not being swiped, open the lightbox programmatically,
							// at the correct index
							if ($('#slider').hasClass('sp-swiping') === false) {
								$.fancybox.open($('#slider .sp-image').parent('a'), {
									index: $(this).parents('.sp-slide').index()
								});
							}
						});
					});	
				</script>
			<?php } ?>
		<?php wp_head(); ?>

			<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.flex-images.min.js"></script>
			<script>
				$('#flex').flexImages({ rowHeight: 320, maxRows: 8, truncate: true });
		    </script>
		    
	</body>
</html>