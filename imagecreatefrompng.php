<?php 
// create jpeg file with img_path and out result png
$image=imagecreatefromjpeg("imagecreatetruecolor.jpeg");
imagepng($image,"result.png");