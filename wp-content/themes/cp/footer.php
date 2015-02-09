<div class="footer">
<div class="container  ">

        <div class="row">
		<div class="twelve columns">
			<p>Carolina Parsons © Todos los derechos reservados 2015 </p>
		</div>	
</div>

</div>
</div>
    </div>




    <!-- End Document
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <!-- Flexsslider
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <?php if ( is_page( array('Campañas', 'Editorial', 'Portadas') ) ) { ?>
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/jquery.flex-images.css">
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.flex-images.min.js"></script>
    <script>
        $('#demo1').flexImages({rowHeight: 250});
    </script>
    <?php } ?>


</body>

</html>