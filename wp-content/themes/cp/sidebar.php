<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.jstwitter.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    // start jqtweet!
    JQTWEET.loadTweets();
});
</script>
<h3>Twitter</h3>
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
<h3>Instagram</h3>
<div id="instafeed"></div>

<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.gridalicious.min.js"></script>