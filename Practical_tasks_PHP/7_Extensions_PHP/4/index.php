<?php
	$im = imagecreatetruecolor(500, 500);

	$color = imageColorAllocate($im, 250, 250, 250);

	imageSetThickness($im, 3);
	imageRectangle($im, 10, 10, 150, 200, $color);

	imageFilledRectangle($im, 170, 10, 250, 200, $color);

	imageline($im, 10, 220, 10, 300, imageColorAllocate($im, 255, 0, 0));

	imageArc($im, 50, 220, 100, 150, 0, 360, $color);

	$points = [];
	$points[] = 100;
	$points[] = 200;
	$points[] = 150;
	$points[] = 220;
	$points[] = 250;
	$points[] = 270;
	$points[] = 350;
	$points[] = 120;
	$points[] = 250;
	$points[] = 120;
	$points[] = 100;
	$points[] = 200;


	imagePolygon($im, $points, 5, imageColorAllocate($im, 255, 0, 0));
	//imageFilledPolygon($im, $points, 5, imageColorAllocate($im, 255, 0, 0));

	imageSetPixel($im, 400, 50, $color);

	$color = imageColorAt($im, 400, 50);
	//print_r(imagecolorsforindex($im, $color));
	//exit;

	$color = imageColorAllocateAlpha($im, 255, 0, 0, 100);
	imageFilledRectangle($im, 180, 20, 300, 180, $color);

	imageCopyResized($im, $im, 250, 250, 0, 0, 220, 220, 100, 150);

	imagefill($im, 70, 190, imageColorAllocate($im, 0, 255, 0));

	$tile = imagecreatefromjpeg('a.jpg');
	imageSetTile($im, $tile);
	imagefill($im, 70, 130, IMG_COLOR_TILED);


	header('Content-Type: image/png');
	imagePng($im);
	imagePng($im, 'p.png');


	imageDestroy($tile);
	imageDestroy($im);
?>