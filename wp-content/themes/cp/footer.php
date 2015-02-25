		<!--  -->



		<div class="container  ">
			<div class="row">

			</div>
		</div>
		<!-- Footer -->
		<div class="footer">
			<div class="container  ">
				<div class="row">
					<div class="six columns">
						<p>Carolina Parsons © Todos los derechos reservados 2015 </p>
					</div>	
					<div class="six columns">
					<ul class="socialbuttons">
						<li class="facebook"><a href="https://www.facebook.com/CarolinaParsonsOficial" target="_blank">Facebook</a></li>
						<li class="twitter"><a href="https://twitter.com/caroparsons" target="_blank">twitter</a></li>
						<li class="google"><a href="" target="_blank">googple plus</a></li>
						<li class="instan"><a href="https://instagram.com/carolinaparsons/" target="_blank">googple plus</a></li>
					</ul>
				</div>

				</div>
			</div>
		</div>

		<!-- End Document
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<script>
		  var navigation = responsiveNav(".nav-collapse");
		</script>
		<!-- Flexsslider
			–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<?php if ( is_page( array('Campañas', 'Editorial', 'Portadas') ) ) { ?>
			<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.flex-images.min.js"></script>
			<script>
			$('#collage').flexImages({
			rowHeight: 300,
			});
		</script>
		<?php } ?>
	</body>
</html>