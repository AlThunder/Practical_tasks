<?php
	$im = imagecreatetruecolor(1960, 1440);
	imagefilledrectangle($im, 0, 0, 1960, 1440, imageColorAllocate($im, 255, 255, 255));

	imageArc($im, 980, 500, 100, 130, 0, 360, imageColorAllocate($im, 0, 0, 0));
	imageFill($im, 980, 520, imageColorAllocate($im, 240, 190, 0));

	imageArc($im, 980, 800, 200, 400, 0, 360, imageColorAllocate($im, 0, 0, 0));
	imageFill($im, 980, 900, imageColorAllocate($im, 240, 190, 0));

	imagesetthickness($im, 3);
	imageline($im, 930, 650, 750, 800, imageColorAllocate($im, 0, 0, 0));
	imageline($im, 1030, 650, 1220, 800, imageColorAllocate($im, 0, 0, 0));

	imageline($im, 930, 960, 820, 1200, imageColorAllocate($im, 0, 0, 0));
	imageline($im, 1030, 960, 1120, 1200, imageColorAllocate($im, 0, 0, 0));

	imageArc($im, 960, 485, 10, 10, 0, 360, imageColorAllocate($im, 0, 0, 255));
	imageArc($im, 997, 485, 10, 10, 0, 360, imageColorAllocate($im, 0, 0, 255));

	imageArc($im, 978, 525, 20, 6, 0, 360, imageColorAllocate($im, 255, 0, 0));

	imageline($im, 980, 500, 975, 510, imageColorAllocate($im, 0, 0, 0));
	imageline($im, 975, 510, 980, 510, imageColorAllocate($im, 0, 0, 0));

	imageArc($im, 930, 493, 5, 30, 0, 360, imageColorAllocate($im, 0, 0, 0));
	imageArc($im, 1030, 493, 5, 30, 0, 360, imageColorAllocate($im, 0, 0, 0));




	header('Content-Type: image/png');
	imagePng($im);

	imageDestroy($im);
?>