		<!--  -->



		<div class="container  ">
			<div class="row">
				<ul class="socialbuttons">
					<li class="facebook" target="_blank"><a href="" >Facebook</a></li>
					<li class="twitter"><a href="" target="_blank">twitter</a></li>
					<li class="google"><a href="" target="_blank">googple plus</a></li>
				</ul>
			</div>
		</div>
		<!-- Footer -->
		<div class="footer">
			<div class="container  ">
				<div class="row">
					<div class="twelve columns">
						<p>Carolina Parsons © Todos los derechos reservados 2015 </p>
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