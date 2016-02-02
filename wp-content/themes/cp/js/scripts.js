$(document).ready(function(){
  $("#fb_share").click(function(e){
    e.preventDefault();
    var data = $(this).data();
    FB.ui({
      method: 'feed',
      link: data.link,
      name: 'Carolina Parsonas',
      caption: data.title,
      description: data.excerpt,
      picture: data.picture
    }, function(response){});
  });
  $("#tw_share").click(function(e){
    e.preventDefault();
    var base = 'https://twitter.com/intent/tweet';
    var text = encodeURIComponent( TW_TXT_SHARE );
    var hashtags = '';
    var via = '';
    var url = encodeURIComponent( APP_BASE );
    var width  = 575,
        height = 400,
        urlTwit    = base + '?text=' + text + '&url=' + url + '&hashtags=' + hashtags ,
        opts   = 'status=1' +
                 ',width='  + width  +
                 ',height=' + height;

      window.open(urlTwit, 'twitter', opts);
  });
});