$(function(){JQTWEET={search:"",user:"caroparsons",numTweets:3,appendTo:"#jstwitter",useGridalicious:!0,template:'<div class="item">{IMG}<div class="tweet-wrapper"><span class="text">{TEXT}</span>	               <span class="time"><a href="{URL}" target="_blank">{AGO}</a></span>	               - <span class="user"><a href="https://twitter.com/caroparsons/" target="_blank">{USER}</a></span></div></div>',loadTweets:function(){var t;t=JQTWEET.search?{q:JQTWEET.search,count:JQTWEET.numTweets,api:"search_tweets"}:{q:JQTWEET.user,count:JQTWEET.numTweets,api:"statuses_userTimeline"},$.ajax({url:"grabtweets.php",type:"POST",dataType:"json",data:t,success:function(t,e,a){if(200==t.httpstatus){JQTWEET.search&&(t=t.statuses);var r,s,n;try{for(var i=0;i<JQTWEET.numTweets;i++){n="",url="http://twitter.com/"+t[i].user.screen_name+"/status/"+t[i].id_str;try{t[i].entities.media&&(n='<a href="'+url+'" target="_blank"><img src="'+t[i].entities.media[0].media_url+'" /></a>')}catch(c){}$(JQTWEET.appendTo).append(JQTWEET.template.replace("{TEXT}",JQTWEET.ify.clean(t[i].text)).replace("{USER}",t[i].user.screen_name).replace("{IMG}",n).replace("{AGO}",JQTWEET.timeAgo(t[i].created_at)).replace("{URL}",url))}}catch(c){}JQTWEET.useGridalicious&&$(JQTWEET.appendTo).gridalicious({gutter:0,width:200,animate:!0})}else alert("no data returned")}})},timeAgo:function(t){var e=new Date,a=new Date(t);$.browser.msie&&(a=Date.parse(t.replace(/( \+)/," UTC$1")));var r=e-a,s=1e3,n=60*s,i=60*n,c=24*i,u=7*c;return isNaN(r)||0>r?"":2*s>r?"right now":n>r?Math.floor(r/s)+" seconds ago":2*n>r?"about 1 minute ago":i>r?Math.floor(r/n)+" minutes ago":2*i>r?"about 1 hour ago":c>r?Math.floor(r/i)+" hours ago":r>c&&2*c>r?"yesterday":365*c>r?Math.floor(r/c)+" days ago":"over a year ago"},ify:{link:function(t){return t.replace(/\b(((https*\:\/\/)|www\.)[^\"\']+?)(([!?,.\)]+)?(\s|$))/g,function(t,e,a,r,s){var n=a.match(/w/)?"http://":"";return'<a class="twtr-hyperlink" target="_blank" href="'+n+e+'">'+(e.length>25?e.substr(0,24)+"...":e)+"</a>"+s})},at:function(t){return t.replace(/\B[@＠]([a-zA-Z0-9_]{1,20})/g,function(t,e){return'<a target="_blank" class="twtr-atreply" href="http://twitter.com/intent/user?screen_name='+e+'">@'+e+"</a>"})},list:function(t){return t.replace(/\B[@＠]([a-zA-Z0-9_]{1,20}\/\w+)/g,function(t,e){return'<a target="_blank" class="twtr-atreply" href="http://twitter.com/'+e+'">@'+e+"</a>"})},hash:function(t){return t.replace(/(^|\s+)#(\w+)/gi,function(t,e,a){return e+'<a target="_blank" class="twtr-hashtag" href="http://twitter.com/search?q=%23'+a+'">#'+a+"</a>"})},clean:function(t){return this.hash(this.at(this.list(this.link(t))))}}}});