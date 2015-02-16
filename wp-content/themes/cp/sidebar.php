<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.jstwitter.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    // start jqtweet!
    JQTWEET.loadTweets();
});
</script>

<div class="twelve column">
<h3 class="socialtitle">Twitter</h3>

<div class="followbutton">
<a class="twitter-follow-button"
  href="https://twitter.com/caroparsons"
  data-show-count="false"
  data-lang="en">
Seguir @caroparsons
</a></div>
</div>
<script>window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));</script>


<div id="jstwitter"></div>



<!-- instanfeed-->
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/instafeed.min.js"></script>
<script type="text/javascript">
var feed = new Instafeed({
    get: 'user',
    // tagName: 'carolinaparsons',
    userId: 228370009,
    accessToken: '141970.467ede5.edbc9c37472d41b790e1db8948793f11',
    sortBy: 'most-recent'
});
feed.run();
</script>
<<<<<<< HEAD
<h3 class="socialtitle">Instagram</h3>
<div class="followbutton">

</div>
=======
<h3>Instagram</h3>
>>>>>>> FETCH_HEAD
<div id="instafeed"></div>

<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.gridalicious.min.js"></script>