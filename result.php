<?php
header('Content-Type: image/jpeg');

$imgname = 'images/' . $_GET['file'] . '.jpg';
$img = imagecreatefromjpeg($imgname);


$w = isset($$_GET['width'])? $_GET['width'] : 500;
$newimg = imagescale($img, $w, $w);

$fontFile = realpath('font/Lato-Medium.ttf');

$fontText1 = $_GET['text1'];
$fontSize1 = $_GET['size1'];
$fontText2 = $_GET['text2'];
$fontSize2 = $_GET['size2'];

$textColor = imagecolorallocate($newimg, 238, 238, 238);

imagettftext($newimg, $fontSize1, 0, 250, 160, $textColor, $fontFile, $fontText1);
imagettftext($newimg, $fontSize2, 0, 250, 160, $textColor, $fontFile, $fontText2);

imagejpeg($newimg);

?>