			<!-- Sidebar-->

			<div class="col-md-12 sidebar-box perfil-blog">

			<div class="img-perfil">

		 				<img class="first-slide" src="http://dev.lcasesoria.cl/carolina-parsons/wp-content/uploads/2016/02/editorial.jpg" >
			</div>
			<div class="perfildescription">
				<h3>@Carolinaparsons</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
						<a href="">Contactar</a> 

					</p>
			</div>

			</div>



<!--
			<div class="col-md-12 sidebar-box">

			<div class="img-perfil">
				<img src="<?php the_field('foto_perfil', 'option'); ?>" alt="" style="width: 200px;"><br>
			</div>
			<div class="perfildescription">
				<?php the_field('texto_perfil', 'option'); ?>
			</div>

			</div>
-->
			
	<div class="deco2 row"></div>

			<div class="col-md-12 sidebar-box categorias-blog">

				<h3>Categorías</h3>

		<div class="content">	
			<?php $categories_blog = get_categories(array('parent' => 2, 'hide_empty' => 0)); ?>
			<nav> 
				<ul>
					<?php if ( $categories_blog ) foreach ($categories_blog as $key => $cat) { ?>
					<li><a href="<?php echo get_category_link( $cat->term_id ); ?>"><?php echo $cat->name ?></a></li>
					<?php } ?>
				</ul>
			</nav>
			</div>
		</div>		
			<div class="deco2 row hidden-sm "></div>


			<div class="col-md-12 sidebar-box redes-blog">
			<h3>Redes</h3>

			<div class="content">
				<ul class="socialbuttons">
						<li class="facebook"><a href="https://www.facebook.com/CarolinaParsonsOficial" target="_blank">Facebook</a></li>
						<li class="twitter"><a href="https://twitter.com/caroparsons" target="_blank">twitter</a></li>
						<li class="instant"><a href="https://instagram.com/carolinaparsons/" target="_blank">Instagram</a></li>
					</ul>
					</div>
			</div>

			<div class="deco2 hidden-sm"></div>

			<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.jstwitter.js"></script>
			<script type="text/javascript">
			$(document).ready(function(){
					// start jqtweet!
					JQTWEET.loadTweets();
			});
			</script>
			<!-- Twitter
			<div class="col-md-12 mclean-left sidebar-box">
				<h3 class="socialtitle">Twitter</h3>
				<div class="followbutton">
					<a class="twitter-follow-button"
						href="https://twitter.com/caroparsons" data-show-count="false" data-lang="en"> Seguir @caroparsons
					</a>
				</div>

				<div id="jstwitter sidebar-box "></div>
			</div>
-->

			<script>window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));</script>


			<!-- instanfeed-->
			<div class="col-md-12 mclean-left sidebar-box instan-blog">
				<h3 class="socialtitle">Instagram</h3>
				<div class="content">
				<h2><a href="https://www.instagram.com/carolinaparsons/"><span></span>@Carolinaparsons</a></h2>


				<div class="followbutton"></div>
				<div id="instafeed"></div>
				</div>
			</div>
			<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/instafeed.min.js"></script>
			<script type="text/javascript">
			var feed = new Instafeed({
					get: 'user',
					tagName: 'carolinaparsons',
					userId: 228370009,
					accessToken: '141970.467ede5.edbc9c37472d41b790e1db8948793f11',
					sortBy: 'most-recent', limit: '4'

			});
			feed.run();
			</script>
