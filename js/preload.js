
	var my_imageJezza = new Image();
	var my_imageJeremy = new Image();
	var my_imageJeremyRight = new Image();
	var my_imageTerry = new Image();
	var my_imageDeedee = new Image();
	var my_imageBlondey = new Image();
	var my_imageHoward = new Image();

	function preload()
	{
		// my_image.onload = notify;
		my_imageJezza.src = 'img/jezza.png';
		my_imageJeremy.src = 'img/jeremyLEFT.png';
		my_imageJeremyRight.src = 'img/jeremyRIGHT.png';
		my_imageTerry.src = 'img/terry.png';
		my_imageDeedee.src = 'img/deedee.png';
		my_imageBlondey.src = 'img/blondey.png';
		my_imageHoward.src = 'img/howard.png';
	}

function use_preloaded_image()
{
	document.getElementById('sourceJezza').src = 'img/jezza.png';
	document.getElementById('source').src = 'img/jeremyLEFT.png';
	document.getElementById('sourceright').src = 'img/jeremyRIGHT.png';


	document.getElementById('sourceTerry').src = 'img/terry.png';
	document.getElementById('sourceDeedee').src = 'img/deedee.png';
	document.getElementById('sourceBlondey').src = 'img/blondey.png';
	document.getElementById('sourceHoward').src = 'img/howard.png';
}

	preload();
