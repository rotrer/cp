		<!--  -->



		<footer class="container  ">
			<div class="row">
				<div class="col-md-6">
					<p>Carolina Parsons© Todos los derechos reservados 2016 </p>
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


		<!-- End Document
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
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