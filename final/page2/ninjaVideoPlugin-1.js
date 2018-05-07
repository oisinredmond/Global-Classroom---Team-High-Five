
/* Ninja Slider Video Plugin v2014.9.16. Copyright www.menucool.com */
var McVideo2=function(){var a=[],b=function(b,e){if(!b.vPlayer)for(var c=0;c<a.length;c++){var d=new a[c](b,e);if(typeof d.play!=="undefined"){b.vPlayer=d;break}}};
return{plugin:function(b){a.push(b)},register:function(c,a){b(c,a)},play:function(a,e,d,c){if(a.vPlayer){var b=a.vPlayer.play(a,e,d,c);if(b==1)return 1}return 0},
stop:function(b){var a=b.getElementsByTagName("iframe");if(a.length){a=a[0];a.src="";setTimeout(function(){a.parentNode.removeChild(a);a=null;b.innerHTML=""},10)}}}}(),
VimeoPlayer2=function(a,c){if(a.nodeName!="A"||a.getAttribute("data-href").toLowerCase().indexOf("vimeo.com")==-1)return null;var b=function(){var b;
if(window.addEventListener)window.addEventListener("message",d,false);else window.attachEvent("onmessage",d,false);function d(b){try{var a=JSON.parse(b.data);
switch(a.event){case"ready":f();break;case"finish":e()}}catch(b){}}function g(e,a){var c={method:e};if(a!==undefined)c.value=a;
if(window.JSON){var d=b.contentWindow||b.contentDocument;d.postMessage(window.JSON.stringify(c),b.getAttribute("src").split("?")[0])}}
function f(){g("addEventListener","finish")}function e(){a.iP&&c.To(1)}return{setIframe:function(a){b=a}}},e=new b;function d(a,k,j,f)
{if(!a.children.length){var h="&loop=0&autoplay=1&wmode=opaque&color=bbbbbb&"+(new Date).getTime(),d=a.getAttribute("data-href"),
i=d.toLowerCase().indexOf("vimeo.com"),c='<iframe id="mcVideo'+f+'" src="http://player.vimeo.com/video/'+d.substring(i+10)+"?api=1&player_id=mcVideo"+f+h+'" webkitAllowFullScreen mozallowfullscreen allowFullScreen';
c+=' frameborder="0" width="'+k+'" height="'+j+'" style="position:absolute;top:0;left:0;"></iframe>';var b=document.createElement("span");b.innerHTML=c;
var g=b.childNodes[0];a.appendChild(g);e.setIframe(g)}return 1}return{play:function(b,e,c,a){return d(b,e,c,a)}}};McVideo2.plugin(VimeoPlayer2);
var YoutubePlayer2=function(a,c){if(a.nodeName!="A"||a.getAttribute("data-href").toLowerCase().indexOf("youtube.com")==-1)return null;
var b=function(){var f=document.createElement("script");f.src="http://www.youtube.com/player_api";var d=document.getElementsByTagName("script")[0];
d.parentNode.insertBefore(f,d);var i,j,e=0,b=function(a){if(typeof YT!=="undefined"&&typeof YT.Player!=="undefined")
i=new YT.Player(a,{events:{onReady:h,onStateChange:g}});else if(e<30){setTimeout(function(){b(a)},50);e++}};
function g(b){if(b.data==0)a.iP&&c.To(1)}function h(){}return{setPlayer:function(a){b(a)}}},e=new b;
function d(a,k,j,d){if(!a.children.length){var f="&loop=0&start=0&wmode=opaque&html5=1&autohide=1&showinfo=0&iv_load_policy=3&allowScriptAccess=always&modestbranding=1&showsearch=0",
c=a.getAttribute("data-href"),h=c.toLowerCase().indexOf("v="),g='<iframe id="mcVideo'+d+'" src="http://www.youtube.com/embed/'+c.substring(h+2)+"?enablejsapi=1&autoplay=1"+f+'" frameborder="0" width="'+k+'" height="'+j+'" style="position:absolute;top:0;left:0;"></iframe>',
b=document.createElement("span");b.innerHTML=g;var i=b.childNodes[0];a.appendChild(i);e.setPlayer("mcVideo"+d)}return 1}return{play:function(b,e,c,a){return d(b,e,c,a)}}};McVideo2.plugin(YoutubePlayer2)