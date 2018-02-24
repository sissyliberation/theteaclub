;(function(){
  var rng = Math.floor(Math.random()*17);
  var url = "url(img/"+	rng + ".jpg)";
  var body = document.getElementsByTagName("BODY")[0];
  body.style.backgroundImage = url;
})();