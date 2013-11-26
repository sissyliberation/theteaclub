var numImg = Math.floor(Math.random()*10);

console.log(numImg);
$(document).ready( function() {

	temp = "url(img/"+	numImg + ".jpg)";
	console.log(temp);
	$('.LR-bg-img').css("background-image", temp);



	}
);





		// style="background-image: url(rundmc.jpg);"