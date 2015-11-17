<?php
// Original image
$filename = 'buiding.jpg';
//resized image
$filename = "resized".$filename;
// Get dimensions of the original image
list($current_width, $current_height) = getimagesize($filename);
 
// The x and y coordinates on the original image where we
// will begin cropping the image
$left = 0;
$top = 0;
 
if ($current_width > $current_height){
//	$percentage = ($target/$current_width);
	$crop_height = $current_height;
	$crop_width = $current_height;
	
}else{
//	$percentage = ($target/$current_height);
	$crop_height = $current_width;
	$crop_width = $current_width;
}
// This will be the final size of the image (e.g. how many pixels
// left and down we will be going)
//$crop_width = 1166;
//$crop_height = 1166;
 
// Resample the image
$canvas = imagecreatetruecolor($crop_width, $crop_height);
$current_image = imagecreatefromjpeg($filename);
imagecopy($canvas, $current_image, 0, 0, $left, $top, $current_width, $current_height);
imagejpeg($canvas, $filename, 100);

?>