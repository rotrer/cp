<?php /* Template name: Contacto */ ?>


<?php get_header(); ?>


<section class="container section">
            <header class="title category">
                <h1>
                 Contacto
                </h1>
          
                </header>
		<div class="col-md-7">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
		<div class="col-md-5 contact-info">
			
			<div class="col-md-6">
				<a href="http://www.parsons.cl/web/">
					<img class="contact-logo" src="<?php bloginfo( 'template_directory' ); ?>/images/pfm.jpg" alt="PARSONS FASHION MANAGEMENT">
				</a>
				<a href="http://www.parsons.cl/web/">www.parsons.cl</a>
				<p><span>Santiago de Chile </span>	
				<span>T: 562 – 29515214</span></p>

				<p><span>Carolina Parsons</span>	
				<a href="mailto:booking@carolinaparsons.com">booking@carolinaparsons.com</a></p>
			</div>

			

			
<!--		
			<a href="http://www.parsons.cl/web/">
				<img class="contact-logo" src="<?php bloginfo( 'template_directory' ); ?>/images/mc2.jpg" alt="MC2">
			</a>
			<a href="http://www.mc2models.com/">www.mc2models.com</a>
			<p>
			<span>6 West 14 TH St. 2nd Floor</span>
			<span>NY, NY 10011</span>
			<span>T: 646 – 638 – 3330</span>
			<span>F: 646 – 638 – 2123</span></p>

			<a href="http://www.parsons.cl/web/">
				<img class="contact-logo" src="<?php bloginfo( 'template_directory' ); ?>/images/ming.jpg" alt="MING MANAGEMENT">
			</a>
			<a href="http://www.modelmanagement.com/">www.modelmanagement.com</a>
			<p>
			<span>Sao Paulo, Brazil</span>
			<span>T: 55 11 5083 9539</span>
			<span>T: 55 11 5571 0168</span>
			</p>-->
		</div>
	</div>
</section>
<?php get_footer(); ?>