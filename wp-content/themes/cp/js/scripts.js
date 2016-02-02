$(document).ready(function(){
  $("#share_fb").click(function(e){
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
  $("#share_tw").click(function(e){
    e.preventDefault();
    var data = $(this).data();
    var base = 'https://twitter.com/intent/tweet';
    var text = encodeURIComponent( data.title );
    var hashtags = '';
    var via = '';
    var url = encodeURIComponent( data.link );
    var width  = 575,
        height = 400,
        urlTwit    = base + '?text=' + text + '&url=' + url + '&hashtags=' + hashtags ,
        opts   = 'status=1' +
                 ',width='  + width  +
                 ',height=' + height;

      window.open(urlTwit, 'twitter', opts);
  });
});