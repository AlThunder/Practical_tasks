<?php
    $im = imagecreatetruecolor(500, 500);
    $font = 'W:\domains\mysite.local\fonts\arial.ttf';
    $text = 'Hello World!';
    $color = imagecolorallocate($im, 255, 255, 0);
    imageTtfText($im, 15, 50, 100, 100, $color, $font, $text);
    $text = 'Русский текст';
    imageTtfText($im, 15, 50, 100, 300, $color, $font, htmlentities($text));

    header('Content-Type: image/png');
    imagePng($im);
    imageDestroy($im);
?>