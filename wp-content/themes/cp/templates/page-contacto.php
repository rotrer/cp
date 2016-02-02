<?php /* Template name: Contacto */ ?>


<?php get_header(); ?>


<div class="container section">
	<div class="row">
		<div class="col-md-7">
			<h3>Contacto</h3>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
		<div class="col-md-5 contact-info">
			<h3 class="psm">PARSONS FASHION MANAGEMENT</h3>
			<p><span>Santiago de Chile </span>
			<span>T: 562 – 29515214</span></p>
			<h3 class=" mc2">MC2</h3>
			<p>
			<span>6 West 14 TH St. 2nd Floor</span>
			<span>NY, NY 10011</span>
			<span>T: 646 – 638 – 3330</span>
			<span>F: 646 – 638 – 2123</span></p>
			<h3 class="ming">MING MANAGEMENT</h3>
			<p>
			<span>Sao Paulo, Brazil</span>
			<span>T: 55 11 5083 9539</span>
			<span>T: 55 11 5571 0168</span>
			</p>
		</div>
	</div>
</div>
<?php get_footer(); ?>